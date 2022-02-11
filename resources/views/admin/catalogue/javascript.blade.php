<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    // create & edit
    $("#quickForm").submit(function(e){
      e.preventDefault()
      const data = new FormData($('#quickForm')[0])
      const type = $('#type').val()
      
      // jika type actionya = create
      if (type == 'create') ajaxCreate(data)

      // jika type actionya = edit
      if (type == 'edit') ajaxUpdate(data)

      // untuk delete tidak masuk scope ini
    })

    // hapus catalogue
    $("#delete-catalogue").submit(function(e){
      e.preventDefault()
      const data = new FormData($('#delete-catalogue')[0])
      ajaxDelete(data)
    })

    // upload gambar
    $("#imageForm").submit(function(e){
      e.preventDefault()
      serializationImages()
    })
  })

  // untuk menampilkan form modal
  function ShowCRUDmodal(e) {
    const type = $(e).attr('data-type')
    const id = $(e).attr('data-id')
    $('#type').val(type)

    // check type
    // jika attr button = edit/update maka ambil attr data-id dari button

    // jika attr button = delete maka panggil swal2 bukan modal
    if (type == "create" || type == "edit") {
      $('#modal-xl').modal('show')
      $('#quickForm').trigger('reset')
      $("#crud-header").text("Add Catalogue")

      // jika type aksinya = edit
      if (type == "edit") {
        ajaxGetDetail(id)
        $("#crud-header").text("Edit Catalogue")
      }
    }else {

    }
  }

  // untuk menampilkan dialog hapus 
  function ShowDeleteModal(e) {
    const id = $(e).attr('data-id')
    $("#delete-modal").modal("show")
    $("#delete-target").val(id)
  }

  // untuk menampilkan modal upload gambar
  function ShowImageUploadModal(e) {
    const id = $(e).attr('data-id')
    $("#catalogue-id").val(id)
    $("#image-modal").modal('show')
  }

  // ajax untuk type aksi CREATE
  function ajaxCreate(data){
    $.ajax({
      type: 'POST',
      url: "{{ route('catalogue.create') }}",
      data: data,
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: function(){
        $('#modal-xl').modal('hide')
        $('#loading-modal').modal('show')
        $("#heading").text("Please Wait...")
        $("#body").text("Your data is being processed!")
      },
      success: function(res){
        $('#modal-xl').modal('hide')
        $("#heading").text("Action Success")
        $("#body").text(res.message)
        setTimeout(() => {
          location.reload()
        }, 2500)
      },
      error : function(xhr, ajaxOptions, thrownError) { 
        $('#modal-xl').modal('hide')
        $("#heading").text("Whooops...something went wrong b*tch")
        $("#body").text("there is a life that full of shit! so rise up and wipe your ass")
      }
    })
  }

  // ajax untuk type aksi EDIT
  function ajaxUpdate(data){
    $.ajax({
      type: 'POST',
      url: "{{ route('catalogue.update') }}",
      data: data,
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: function(){
        $('#modal-xl').modal('hide')
        $('#loading-modal').modal('show')
        $("#heading").text("Please Wait...")
        $("#body").text("Your data is being processed!")
      },
      success: function(res){
        $('#modal-xl').modal('hide')
        $("#heading").text("Action Success")
        $("#body").text(res.message)
        setTimeout(() => {
          location.reload()
        }, 2500)
      },
      error : function(xhr, ajaxOptions, thrownError) { 
        $('#modal-xl').modal('hide')
        $("#heading").text("Whooops...something went wrong b*tch")
        $("#body").text("there is a life that full of shit! so rise up and wipe your ass")
      }
    })
  }

  // ajax untuk type aksi EDIT
  function ajaxDelete(data){
    $.ajax({
      type: 'POST',
      url:"{{ route('catalogue.delete') }}",
      data: data,
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: function(){
        $('#delete-modal').modal('hide')
        $('#loading-modal').modal('show')
        $("#heading").text("Please Wait...")
        $("#body").text("Your data is being processed!")
      },
      success: function(res){
        $('#delete-modal').modal('hide')
        $("#heading").text("Action Success")
        $("#body").text(res.message)
        setTimeout(() => {
          location.reload()
        }, 2500)
      },
      error : function(xhr, ajaxOptions, thrownError) { 
        $('#delete-modal').modal('hide')
        $("#heading").text("Whooops...something went wrong b*tch")
        $("#body").text("there is a life that full of shit! so rise up and wipe your ass")
      }
    })
  }

  // ajax untuk mengambi data katalog sesuai id (untuk edit)
  function ajaxGetDetail(id) {
    var url = "{{ route('catalogue.detail', ":id") }}"
    url = url.replace(':id', id)

    $.ajax({
      type:"GET",
      url,
      success: function(res){
        const { name, description, moq, capacity, id} = res
        $('#name').val(name)
        $('#description').val(description)
        $('#moq').val(moq)
        $('#capacity').val(capacity)
        $('#cid').val(id)
      }
    })
  }

  // serialisasi dari src gambar
  function serializationImages() {
    var t = document.querySelectorAll("span.preview > img")
    var serialized = []

    // proses serialisasi data gambar
    for (let i = 0; i < t.length; i++) {
      var img =  t[i].getAttribute("src")
      var encoded = img.split(';base64,')[1]
      var format = img.match(/[^:]\w+\/[\w-+\d.]+(?=;|,)/)[0].replaceAll("image/", "")
      serialized.push({encoded, format})
    }

    // serialisasi akhir
    const data = {
      images : serialized,
      id : $("#catalogue-id").val(),
    }

    // upload gambar
    uploadImages(data)
  }

  // upload gambar
  function uploadImages(data) {
    var t = document.querySelectorAll("input[name='_token']")
    $.ajax({
      headers: { 'X-CSRF-TOKEN': t[3].value },
      url: "{{ route('catalogue.image.upload') }}",
      type: 'post',
      data : JSON.stringify(data),
      dataType: "json",
      contentType: "application/json",
      success: function() {},
    })
  }
     
  Dropzone.autoDiscover = false
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { 
    url: "/target-url", 
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, 
    previewsContainer: "#previews", 
    clickable: ".fileinput-button" 
  })

  myDropzone.on("addedfile", function(file) {
    file.previewElement.querySelector(".delete").onclick = function() { myDropzone.enqueueFile(file) }
  })
 
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector(".progress-bar").style.width = progress + "%"
  })

  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }

  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }

</script>
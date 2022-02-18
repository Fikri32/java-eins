<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    // create & edit
    $("#quickForm").submit(function(e){
      e.preventDefault()
      const type = $('#type').val()
      
      // jika type actionya = create
      if (type == 'create') {
        $('#upload-dropzone').show()
        var images = serializationImages()
        const data = {
          name : $('#name').val(),
          description : $('#description').val(),
          moq : $('#moq').val(),
          capacity : $('#capacity').val(),
          images,
        }
        ajaxCreate(data)
      }

      // jika type actionya = edit
      if (type == 'edit'){
        $('#upload-dropzone').hide()
        const data = new FormData($('#quickForm')[0])
        ajaxUpdate(data)
      }

      // untuk delete tidak masuk scope ini
    })

    // upload gambar pada model edit
    $("#upload-image-btn").click(function(e){
      var images = serializationImages()
      const data = {
        images,
        id: $('#cid').val()
      }
      ajaxUploadImages(data)
    })

    // inisiasi summernote
    $('#description').summernote({
      placeholder: 'Describe your product like product overview, advantage of product, main feature, core benefits etc...',
      toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']]
      ]
    })
  })

  // untuk menampilkan form modal
  function ShowCRUDmodal(e) {
    const type = $(e).attr('data-type')
    const id = $(e).attr('data-id')
    $('#type').val(type)
    $("#uploaded-image").html('')
    $("#previews").html('')
    $('#description').summernote('reset')

    // jika attr button = delete maka panggil swal2 bukan modal
    if (type == "create" || type == "edit") {
      $('#modal-xl').modal('show')
      $('#quickForm').trigger('reset')
      $("#crud-header").text("Add Catalogue")
      $('#upload-image-btn').hide()

      // jika type aksinya = edit
      if (type == "edit") {
        $("#previews").html('')
        $('#upload-image-btn').show()
        ajaxGetDetail(id)
        getImages(id)
        $("#crud-header").text("Edit Catalogue")
      }
    }
  }

  // untuk menampilkan dialog hapus 
  function ShowDeleteModal(e) {
    const id = $(e).attr('data-id')
    $("#cid").val(id)
    Swal.fire({
        title: "Are you sure?",
        text: "Any removed data cannot be undone",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: 'Yes, Remove!',
        cancelButtonText: 'Cancel',
        reverseButtons: true,
        allowOutsideClick: false,
        confirmButtonColor: '#af1310',
        cancelButtonColor: '#fffff',
    })
    .then((result) => {
        if (result.value) {
          ajaxDelete()
        }else{
          Swal.close()
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

    // return data gambar terserialisasi
    return serialized    
  }

  // hapus gambar (yang sudah di upload)
  function deleteImage(id) {
    var c = confirm("Do you want to remove this product picture?")
    if (c) ajaxDeleteImages(id)
  }

  // ajax untuk type aksi CREATE
  function ajaxCreate(data){
    var t = document.querySelectorAll("input[name='_token']")
    $.ajax({
      headers: { 'X-CSRF-TOKEN': t[1].value },
      type: 'POST',
      url: "{{ route('catalogue.create') }}",
      data: JSON.stringify(data),
      dataType: "json",
      contentType: "application/json",
      beforeSend: function(){
        Swal.fire({
            title: 'Please Wait...',
            text: 'Storing product data',
            imageUrl: '/img/loading.gif',
            showConfirmButton: false,
            allowOutsideClick: false,
        })
      },
      success: function(res){
        $('#modal-xl').modal('hide')
        Swal.fire({
            title: 'Action Success',
            icon: 'success',
            text: 'new data successfully stored',
            showConfirmButton: false,
            allowOutsideClick: false,
            timer:3000,
        })
        $("#catalogue-list").append(drawCatalogueElement(res.catalogue, res.images[0].image))
      },
      error : function(xhr, ajaxOptions, thrownError) { 
        Swal.fire({
            title: 'Action Failed',
            icon: 'error',
            text: 'Action failed, plase try again',
            showConfirmButton: false,
            allowOutsideClick: true,
        })
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
        Swal.fire({
            title: 'Please Wait...',
            text: 'Updating Product data',
            imageUrl: '/img/loading.gif',
            showConfirmButton: false,
            allowOutsideClick: false,
        })
      },
      success: function(res){
        Swal.fire({
            title: 'Action Success',
            icon: 'success',
            text: 'data successfully updated',
            showConfirmButton: false,
            allowOutsideClick: false,
            timer:3000,
        })
        updateCatalogueElement(res)
      },
      error : function(xhr, ajaxOptions, thrownError) { 
        Swal.fire({
            title: 'Action Failed',
            icon: 'error',
            text: 'Action failed, plase try again',
            showConfirmButton: false,
            allowOutsideClick: true,
        })
      }
    })
  }

  // ajax untuk type aksi EDIT
  function ajaxDelete(){
    const data = new FormData($('#quickForm')[0])
    $.ajax({
      type: 'POST',
      url:"{{ route('catalogue.delete') }}",
      data: data,
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: function(){
        Swal.fire({
            title: 'Please Wait...',
            text: 'Removing Product data',
            imageUrl: '/img/loading.gif',
            showConfirmButton: false,
            allowOutsideClick: false,
        })
      },
      success: function(res){
        Swal.fire({
          title: 'Action Success',
          icon: 'success',
          text: 'new data successfully removed',
          showConfirmButton: false,
          allowOutsideClick: true,
          timer:3000,
        })
        $(`#row-${res.id}`).remove()
      },
      error : function(xhr, ajaxOptions, thrownError) { 
        Swal.fire({
            title: 'Action Failed',
            icon: 'error',
            text: 'Action failed, plase try again',
            showConfirmButton: false,
            allowOutsideClick: true,
        })
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
        $('#moq').val(moq)
        $('#capacity').val(capacity)
        $('#cid').val(id)
        $('#description').summernote('editor.pasteHTML', description);
      },
      error : function(xhr, ajaxOptions, thrownError) { 
        Swal.fire({
            title: 'Action Failed',
            icon: 'error',
            text: 'Action failed, plase try again',
            showConfirmButton: false,
            allowOutsideClick: true,
        })
      }
    })
  }

  // ajax untuk upload gambar
  function ajaxUploadImages(data) {
    var t = document.querySelectorAll("input[name='_token']")
    $.ajax({
      headers: { 'X-CSRF-TOKEN': t[1].value },
      url: "{{ route('catalogue.image.upload') }}",
      type: 'post',
      data : JSON.stringify(data),
      dataType: "json",
      contentType: "application/json",
      beforeSend: function(){
        Swal.fire({
            title: 'Please Wait...',
            text: 'Updating Product data',
            imageUrl: '/img/loading.gif',
            showConfirmButton: false,
            allowOutsideClick: false,
        })
      },
      success: function(res) {
        Swal.fire({
            title: 'Action Success',
            icon: 'success',
            text: 'Product images saved',
            showConfirmButton: false,
            allowOutsideClick: false,
            timer:3000,
        })
        // kosongkan preview image
        $("#previews").html('')
        // render yang berhasil diupload
        res.forEach(el => {
          $("#uploaded-image").append(drawImageElement(el))          
        })
      },
      error : function(xhr, ajaxOptions, thrownError) { 
        Swal.fire({
            title: 'Action Failed',
            icon: 'error',
            text: 'Action failed, plase try again',
            showConfirmButton: false,
            allowOutsideClick: true,
        })
      }
    })
  }

  // ajax untuk hapus gambar
  function ajaxDeleteImages(id) {
    var t = document.querySelectorAll("input[name='_token']")
    var url = "{{ route('catalogue.image.delete', ":id") }}"
    url = url.replace(':id', id)
    $.ajax({
      headers: { 'X-CSRF-TOKEN': t[1].value },
      url,
      type: 'post',
      dataType: "json",
      contentType: "application/json",
      beforeSend: function(){
        Swal.fire({
            title: 'Please Wait...',
            text: 'Removing Product image',
            imageUrl: '/img/loading.gif',
            showConfirmButton: false,
            allowOutsideClick: false,
        })
      },
      success: function(res) {
        Swal.fire({
            title: 'Action Success',
            icon: 'success',
            text: 'Product images removed',
            showConfirmButton: false,
            allowOutsideClick: false,
            timer:3000,
        })
        $(`#image-${res.id}`).remove()
      },
      error : function(xhr, ajaxOptions, thrownError) { 
        Swal.fire({
            title: 'Action Failed',
            icon: 'error',
            text: 'Action failed, plase try again',
            showConfirmButton: false,
            allowOutsideClick: true,
        })
      }
    })
  }

  // ambil daftar gambar
  function getImages(id) {
    var url = "{{ route('catalogue.image.get', ":id") }}"
    url = url.replace(':id', id)
    $.ajax({
      type:"GET",
      url,
      success: function(res){
        res.forEach(el => {
          $("#uploaded-image").append(drawImageElement(el))          
        })
      },
      error : function(xhr, ajaxOptions, thrownError) { 
        $("#image-modal").modal('hide')
        $('#loading-modal').modal('show')
        $("#heading").text("Whooops...something went wrong")
        $("#body").text("please try your action once again")
      }
    })
  }

  // utuk render gambar ke DOM
  function drawImageElement(data) {
    return `
      <div class="col-sm-2 mb-4 mt-5" id="image-${data.id}">
        <img src="/catalogue_images/${data.image}" height="100%" width="100%"/></br><br>
        <a href="#" class="btn btn-danger btn-block btn-sm" onclick="deleteImage(${data.id})">
            <i class="fas fa-trash"></i>
            <span>Remove</span>
        </a>
      </div>
    `
  }

  // untuk render row catalogue
  function drawCatalogueElement(data, image) {
    // numbering
    var list = document.querySelectorAll("#catalogue-list > tr")

    return `
      <tr id="row-${data.id}">
        <td>${list.length + 1}</td>
        <td>
          ${ image ? `<img src="/catalogue_images/${image}" alt="" height="60px" width="60px">` : "" } 
        </td>
        <td>${data.name}</td>
        <td>${data.capacity}</td>
        <td>${data.moq}</td>
        <td>
            <button type="button" class="btn btn-sm btn-outline-warning mr-2" data-type="edit" data-id="${data.id}" onclick="ShowCRUDmodal(this)"><i class="fa fa-edit"></i> Edit</button>
            <button type="button" class="btn btn-sm btn-outline-danger" data-type="delete" data-id="${data.id}" onclick="ShowDeleteModal(this)"><i class="fa fa-trash" ></i> Delete</button>
        </td>
      </tr>
    `
  }

  // upload catalogue table row element
  function updateCatalogueElement(data) {
    var row = document.querySelectorAll(`#row-${data.id} > td`)
    row[2].innerHTML = data.name 
    row[3].innerHTML = data.capacity 
    row[4].innerHTML = data.moq
  }
</script>

<script>
  Dropzone.autoDiscover = false
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { 
    url: "/target-url", 
    thumbnailWidth: 250,
    thumbnailHeight: 250,
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
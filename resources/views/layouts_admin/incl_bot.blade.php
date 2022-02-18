<!-- jQuery -->
<script src="{{asset('assets_admin/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('assets_admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- AdminLTE -->
<script src="{{asset('assets_admin/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->

<!-- jquery-validation -->
<script src="{{asset('assets_admin/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets_admin/plugins/jquery-validation/additional-methods.min.js')}}"></script>

<!-- Datatables -->
<script src="{{asset('assets_admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets_admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets_admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets_admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets_admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets_admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assets_admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets_admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assets_admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets_admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets_admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<!-- Summernote -->
<script src="{{asset('assets_admin/plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- Sweetalert 2 -->
<script src="{{asset('assets_admin/plugins/sweetalert2/sweetalert2.js')}}"></script> 

<!-- Dropzonejs -->
<script src="{{asset('assets_admin/plugins/dropzone/min/dropzone.min.js')}}"></script>

<!-- Set CSRF token ke request header ajax -->
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
</script>
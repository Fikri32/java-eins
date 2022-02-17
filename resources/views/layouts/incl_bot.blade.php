<script src="{{asset('assets_front/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets_front/js/owl.carousel.js')}}"></script>
<script src="{{asset('assets_front/js/plugins.js')}}"></script>
<script src="{{asset('assets_front/js/main.js')}}"></script>
<script src="{{asset('assets_front/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
</script>

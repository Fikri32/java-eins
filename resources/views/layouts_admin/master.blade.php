<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts_admin.incl_top')
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('layouts_admin.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layouts_admin.sidebar')

        <!-- Content Wrapper. Contains page content -->
        @yield('content_admin')
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        @include('layouts_admin.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    @include('layouts_admin.incl_bot')
    @stack('scripts')
</body>

</html>
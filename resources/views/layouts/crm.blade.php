<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('crm/images/favicon.png') }}">
    <title>CoinDash - Cryptocurrency Dashboard Admin Template</title>
    <!-- Custom CSS -->

    <link href="{{ asset('crm/css/style.css') }}" rel="stylesheet">
</head>

<body class="header-fix fix-sidebar">
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        @include('components.nav.navigate-component')
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->

            <!-- End Bread crumb -->
            @include('components.body.bodyComponet')
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 CoinDash All Right Reserved.</footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="{{asset('crm/js/lib/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('crm/js/lib/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('crm/js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('crm/js/jquery.slimscroll.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('crm/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('crm/js/lib/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('crm/js/lib/webticker/jquery.webticker.min.js')}}"></script>
    <script src="{{asset('crm/js/lib/peitychart/jquery.peity.min.js')}}"></script>
    <!-- scripit init-->
    <script src="{{asset('crm/js/custom.min.js')}}"></script>
    <script src="{{asset('crm/js/dashboard-1.js')}}"></script>
</body>

</html>

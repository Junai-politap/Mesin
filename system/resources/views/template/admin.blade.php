<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>PPM | Super Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('public')}}/logo.png">

        <!-- jvectormap -->
        <link href="{{url('public/admin')}}/assets/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />

        <!-- DataTables -->
        <link href="{{url('public/admin')}}/assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{url('public/admin')}}/assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        
        <link href="{{url('public/admin')}}/assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public/admin')}}/assets/libs/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />    
        
        <!-- App css -->
        <link href="{{url('public/admin')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public/admin')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public/admin')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" />

        <link href="{{url('public/admin')}}/assets/libs/custombox/custombox.min.css" rel="stylesheet">

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
           @include('section.admin.header')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('section.admin.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                @include('template.utils.notif')
               @yield('content')
                <!-- Footer Start -->
               @include('section.admin.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        

        <!-- Vendor js -->
        <script src="{{url('public/admin')}}/assets/js/vendor.min.js"></script>

        <!-- KNOB JS -->
        <script src="{{url('public/admin')}}/assets/libs/jquery-knob/jquery.knob.min.js"></script>
        <!-- Chart JS -->
        <script src="{{url('public/admin')}}/assets/libs/chart-js/Chart.bundle.min.js"></script>

        <!-- Jvector map -->
        <script src="{{url('public/admin')}}/assets/libs/jqvmap/jquery.vmap.min.js"></script>
        <script src="{{url('public/admin')}}/assets/libs/jqvmap/jquery.vmap.usa.js"></script>
        
        <!-- Datatable js -->
        <script src="{{url('public/admin')}}/assets/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="{{url('public/admin')}}/assets/libs/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="{{url('public/admin')}}/assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="{{url('public/admin')}}/assets/libs/datatables/responsive.bootstrap4.min.js"></script>
        
        <script src="{{url('public/admin')}}/assets/libs/datatables/dataTables.buttons.min.js"></script>
        <script src="{{url('public/admin')}}/assets/libs/datatables/buttons.bootstrap4.min.js"></script>
        <script src="{{url('public/admin')}}/assets/libs/datatables/buttons.html5.min.js"></script> 

        <script src="{{url('public/admin')}}/assets/libs/datatables/dataTables.keyTable.min.js"></script>
        <script src="{{url('public/admin')}}/assets/libs/datatables/dataTables.select.min.js"></script>

        <!-- Datatables init -->
        <script src="{{url('public/admin')}}/assets/js/pages/datatables.init.js"></script>
        
        <!-- Dashboard Init JS -->
        <script src="{{url('public/admin')}}/assets/js/pages/dashboard.init.js"></script>
        
        <!-- App js -->
        <script src="{{url('public/admin')}}/assets/js/app.min.js"></script>

        <script src="{{url('public/admin')}}/assets/libs/custombox/custombox.min.js"></script>

    </body>
</html>
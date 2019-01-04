<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>AD_Shop_Banh</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <base href="{{asset('')}}">

        <!-- App favicon -->
        <link rel="shortcut icon" href="/public/admin/assets/images/favicon.ico">

        <link href="/public/admin/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="/public/admin/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="/public/admin/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="/public/admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/public/admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="/public/admin/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="/public/admin/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="/public/admin/assets/js/modernizr.min.js"></script>
        <script src="/public/ckeditor/ckeditor.js"></script>
    
        <script src="/public/ckfinder/ckfinder.js"></script>
        <!--calendar css-->
        <link href="/public/admin/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                            <img src="assets/images/logo.png" alt="" height="16">
                        </span>
                        <i>
                            <img src="assets/images/logo_sm.png" alt="" height="28">
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="list-unstyled topbar-right-menu float-right mb-0">
                        <li class="dropdown notification-list hide-phone">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                               <i class="mdi mdi-earth"></i> English  <i class="mdi mdi-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    Spanish
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    Italian
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    French
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    Russian
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="fi-bell noti-icon"></i>
                                <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h6 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h6>
                                </div>

                                <div class="slimscroll" style="max-height: 190px;">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                        <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                        <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-purple"><i class="mdi mdi-account-plus"></i></div>
                                        <p class="notify-details">New user registered.<small class="text-muted">7 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-custom"><i class="mdi mdi-heart"></i></div>
                                        <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all <i class="fi-arrow-right"></i>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="fi-speech-bubble noti-icon"></i>
                                <span class="badge badge-light badge-pill noti-icon-badge">6</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h6 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Chat</h6>
                                </div>

                                <div class="slimscroll" style="max-height: 190px;">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="assets/images/users/avatar-3.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Sam Garret</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Wow that's great</p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="assets/images/users/avatar-5.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Sherry Marshall</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="assets/images/users/avatar-6.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Shawn Millard</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all <i class="fi-arrow-right"></i>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="public/admin/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1">Samuel <i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-head"></i> <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-cog"></i> <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-help"></i> <span>Support</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-lock"></i> <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="{{route('adminlogout')}}" class="dropdown-item notify-item">
                                    <i class="fi-power"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        <li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Navigation</li>
                            <li>
                                <a href="{{route('dashboard')}}">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill pull-right">3</span> <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('getaddslide')}}"><i class="fi-box"></i><span> Slide </span> <span></span></a>                                
                            </li>
                            <li>
                                <a><i class="fi-box"></i><span>Type_product</span><span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('getaddtype')}}">Add type_roduct</a></li>
                                    <li><a href="{{route('list')}}">List type_roduct</a></li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a><i class="fi-box"></i><span>Product</span><span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('getaddproduct')}}">Add Poduct</a></li>
                                    <li><a href="{{route('listpro')}}">List Poduct</a></li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a><i class="fi-box"></i><span>Type_product</span><span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('getaddtype')}}">Add typep_roduct</a></li>
                                    <li><a href="{{route('list')}}">List typep_roduct</a></li>
                                    
                                </ul>
                            </li>

                            <!-- <li>
                                <a href="javascript: void(0);"><i class="fi-mail"></i><span> Email </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Read Email</a></li>
                                    <li><a href="email-compose.html">Compose Email</a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);"><i class="fi-layout"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Tables</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                                    <li><a href="tables-editable.html">Editable Tables</a></li>
                                </ul>
                            </li> -->

                            <li class="menu-title">More</li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-map"></i> <span> Maps </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{url('admin/googlemmap')}}">Google Maps</a></li>
                                    <li><a href="{{url('admin/vectormap')}}">Vector Maps</a></li>
                                </ul>
                            </li>

                            <li><a href="{{url('admin/calendar')}}"><i class="fi-clock"></i> <span>Calendar</span> </a></li>


                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="row" style="margin-left: 250px;margin-top: 100px;margin-right: 10px;">
            @yield("content")
            </div>
            @yield('map')

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="/public/admin/assets/js/jquery.min.js"></script>
        <script src="/public/admin/assets/js/popper.min.js"></script>
        <script src="/public/admin/assets/js/bootstrap.min.js"></script>
        <script src="/public/admin/assets/js/metisMenu.min.js"></script>
        <script src="/public/admin/assets/js/waves.js"></script>
        <script src="/public/admin/assets/js/jquery.slimscroll.js"></script>
        <script src="/public/admin/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="/public/admin/plugins/counterup/jquery.counterup.min.js"></script>

        <!-- Chart JS -->
        <script src="/public/admin/plugins/chart.js/chart.bundle.js"></script>

        <!-- init dashboard -->
        <script src="/public/admin/assets/pages/jquery.dashboard.init.js"></script>

        <!-- App js -->
        <script src="/public/admin/assets/js/jquery.core.js"></script>
        <script src="/public/admin/assets/js/jquery.app.js"></script>

        <!-- admin js -->
        <script src="/public/admin/myJS/adJS.js"></script>

         <!-- Required datatable js -->
        <script src="/public/admin/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="/public/admin/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="/public/admin/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="/public/admin/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="/public/admin/plugins/datatables/jszip.min.js"></script>
        <script src="/public/admin/plugins/datatables/pdfmake.min.js"></script>
        <script src="/public/admin/plugins/datatables/vfs_fonts.js"></script>
        <script src="/public/admin/plugins/datatables/buttons.html5.min.js"></script>
        <script src="/public/admin/plugins/datatables/buttons.print.min.js"></script>
        <!-- Responsive examples -->
        <script src="/public/admin/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="/public/admin/plugins/datatables/responsive.bootstrap4.min.js"></script>
        <!-- Jvector map -->
        <script src="/public/admin/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="/public/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="/public/admin/plugins/jvectormap/gdp-data.js"></script>
        <script src="/public/admin/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        <script src="/public/admin/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
        <script src="/public/admin/plugins/jvectormap/jquery-jvectormap-au-mill.js"></script>
        <script src="/public/admin/plugins/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
        <script src="/public/admin/plugins/jvectormap/jquery-jvectormap-ca-lcc.js"></script>
        <script src="/public/admin/plugins/jvectormap/jquery-jvectormap-de-mill.js"></script>
        <script src=/public/admin/plugins/jvectormap/jquery-jvectormap-in-mill.js"></script>
        <script src="/public/admin/plugins/jvectormap/jquery-jvectormap-asia-mill.js"></script>
        <script src="/public/admin/assets/pages/jquery.jvectormap.init.js"></script>
        <!-- calendar -->
         <!-- Jquery-Ui -->
        <script src="/public/admin/plugins/jquery-ui/jquery-ui.min.js"></script>

        <!-- SCRIPTS -->
        <script src="/public/admin/plugins/moment/moment.js"></script>
        <script src='/public/admin/plugins/fullcalendar/js/fullcalendar.min.js'></script>
        <script src="/public/admin/assets/pages/jquery.calendar.js"></script>



        <!-- App js -->
        <script src="/public/admin/assets/js/jquery.core.js"></script>
        <script src="/public/admin/assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>

        
        


    </body>
</html>
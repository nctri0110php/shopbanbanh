@extends('admin.master')
@section('map')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page" style="margin-top: -98px">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Vector Map</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                                        <li class="breadcrumb-item"><a href="#">Maps</a></li>
                                        <li class="breadcrumb-item active">Vector Map</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-12">
                                <iframe src="https://www.google.com/maps/d/embed?mid=1hjs3mIoZBblBP_CvxiP4w38STiY" width="1085" height="990"></iframe>
                            </div>
                        </div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2017 - 2018 © Abstack. - Coderthemes.com
                </footer>

            </div>


 @endsection
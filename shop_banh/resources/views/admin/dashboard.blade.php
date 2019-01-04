@extends('admin.master')
@section('content')
                            <div class="col-12" style="margin-top:-30px; position: fixed;z-index: 1">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Dashboard</h4>

                                    <ol class="breadcrumb float-right" style="margin-top:-30px;" >
                                        <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        <!-- end row -->

                        <div class="row" style="padding-top: 60px;">
                            <div class="col-3">
                                <div class="card-box tilebox-one">
                                    <i class="fi-box float-right"></i>
                                    <h6 class="text-muted text-uppercase mb-3">Số đơn hàng</h6>
                                    <h4><?php 
                                    $table=DB::table('bills')->get();
                                    echo $data=count($table);
                                    // dd($table);
                                    ?></h4>
                                    <!-- <span class="badge badge-primary"> +11% </span> <span class="text-muted ml-2 vertical-middle">From previous period</span> -->
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="card-box tilebox-one">
                                    <i class="fi-layers float-right"></i>
                                    <h6 class="text-muted text-uppercase mb-3">Số khách hàng</h6>
                                    <h4><?php 
                                    $kh=DB::table('customer')->get();
                                    echo count($kh);
                                    // dd($table);
                                    ?></h4>
                                    <!-- <span class="badge badge-primary"> -29% </span> <span class="text-muted ml-2 vertical-middle">From previous period</span> -->
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="card-box tilebox-one">
                                    <i class="fi-layers float-right"></i>
                                    <h6 class="text-muted text-uppercase mb-3">Số Sản Phẩm</h6>
                                    <h4><?php 
                                    $sp=DB::table('products')->get();
                                    echo count($sp);
                                    // dd($table);
                                    ?></h4>
                                    <!-- <span class="badge badge-primary"> -29% </span> <span class="text-muted ml-2 vertical-middle">From previous period</span> -->
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card-box tilebox-one">
                                    <i class="fi-layers float-right"></i>
                                    <h6 class="text-muted text-uppercase mb-3">Số loại SP</h6>
                                    <h4><?php 
                                    $lsp=DB::table('type_products')->get();
                                    echo count($lsp);
                                    // dd($table);
                                    ?></h4>
                                    <!-- <span class="badge badge-primary"> -29% </span> <span class="text-muted ml-2 vertical-middle">From previous period</span> -->
                                </div>
                            </div>
                            <!-- <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="fi-briefcase float-right"></i>
                                    <h6 class="text-muted text-uppercase mb-3">Product Sold</h6>
                                    <h4 class="mb-3" data-plugin="counterup">1,890</h4>
                                    <span class="badge badge-primary"> +89% </span> <span class="text-muted ml-2 vertical-middle">Last year</span>
                                </div>
                            </div> -->
                       
                       <div class="col-12" style="padding-bottom: 7px;">
                                <span style="color: red;font-size: 28px;font-weight: bold;">GOOGLE MAP</span>

                        </div>
                        
                        <div class="col-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.729004301847!2d106.85569631405785!3d10.908187992232182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174dfaaa4942ca7%3A0xe0b0790eff3ebb16!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEPDtG5nIG5naOG7hyB2w6AgUXXhuqNuIHRy4buLIFNvbmFkZXpp!5e0!3m2!1svi!2s!4v1545222787587" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>

                        <!-- <div class="row">
                            <div class="col-xl-7">
                                <div class="card-box">
                                    <h4 class="header-title">Transactions History</h4>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="text-center mt-3">
                                                <h6 class="font-normal text-muted font-14">Conversion Rate</h6>
                                                <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">1.78%</span> <small></small></h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center mt-3">
                                                <h6 class="font-normal text-muted font-14">Average Order Value</h6>
                                                <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">25.87</span> <small>USD</small></h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center mt-3">
                                                <h6 class="font-normal text-muted font-14">Total Wallet Balance</h6>
                                                <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">87,4517</span> <small>USD</small></h6>
                                            </div>
                                        </div>
                                    </div>

                                    <canvas id="transactions-chart" height="350" class="mt-4"></canvas>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="card-box">
                                    <h4 class="header-title">Sales History</h4>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="text-center mt-3">
                                                <h6 class="font-normal text-muted font-14">Conversion Rate</h6>
                                                <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">3.94%</span> <small></small></h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center mt-3">
                                                <h6 class="font-normal text-muted font-14">Average Sales</h6>
                                                <h6 class="font-18"><i class="mdi mdi-arrow-down-bold-hexagon-outline text-danger"></i> <span class="text-dark">16.25</span> <small>USD</small></h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center mt-3">
                                                <h6 class="font-normal text-muted font-14">Total Sales</h6>
                                                <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">124,858.67</span> <small>USD</small></h6>
                                            </div>
                                        </div>
                                    </div>

                                    <canvas id="sales-history" height="350" class="mt-4"></canvas>
                                </div>
                            </div>
                        </div> -->
                        <!-- end row -->

                      



            </div>
            <div class="content-page">
                <footer class="footer text-right">
                    2018 - 2019 © copyright. - ShopBanh
                </footer>
            </div>
@endsection
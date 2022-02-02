@extends('Users.Layout.base')

@section('title')
Track Shipment
@endsection

@section('css-section')
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" type="image/png" href="{{URL::to('/')}}/Userassets/ico/favicon-16x16.png"/>

        <!-- owl.carousel css -->
        <link rel="stylesheet" href="{{URL::to('/')}}/assets/libs/owl.carousel/assets/owl.carousel.min.css">

        <link rel="stylesheet" href="{{URL::to('/')}}/assets/libs/owl.carousel/assets/owl.theme.default.min.css">

        <!-- Bootstrap Css -->
        <link href="{{URL::to('/')}}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{URL::to('/')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{URL::to('/')}}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="{{URL::to('/')}}/Userassets/css/bootstrap/css/bootstrap.min.css">
    <link href="{{URL::to('/')}}/Userassets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/lib.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/js/minicolors/miniColors.css" rel="stylesheet">
    
    <link href="{{URL::to('/')}}/Userassets/js/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/pe-icon-7-stroke/css/helper.html" rel="stylesheet">

    <!-- Theme CSS
    ============================================ -->
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so_searchpro.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so-categories.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so_advanced_search.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so-categories.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so-category-slider.html" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so-newletter-popup.css" rel="stylesheet">
     <link href="{{URL::to('/')}}/Userassets/css/themecss/so-latest-blog.css" rel="stylesheet">

    <link href="{{URL::to('/')}}/Userassets/css/footer/footer1.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/header/header1.css" rel="stylesheet">
    <link id="color_scheme" href="{{URL::to('/')}}/Userassets/css/home2.css" rel="stylesheet"> 
    <link id="color_scheme" href="{{URL::to('/')}}/Userassets/css/theme.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/responsive.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/js/lightslider/lightslider.css" rel="stylesheet">


    
     <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,600,700' rel='stylesheet' type='text/css'>
    <style type="text/css">
         body{font-family:'Rubik', sans-serif}
    </style>
@endsection

@section('js-section')
    <script src="{{URL::to('/')}}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/node-waves/waves.min.js"></script>

        <!-- owl.carousel js -->
        <script src="{{URL::to('/')}}/assets/libs/owl.carousel/owl.carousel.min.js"></script>

        <!-- timeline init js -->
        <script src="{{URL::to('/')}}/assets/js/pages/timeline.init.js"></script>
        <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/slick-slider/slick.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/libs.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/unveil/jquery.unveil.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/datetimepicker/moment.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/modernizr/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/minicolors/jquery.miniColors.min.js"></script>

<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/lightslider/lightslider.js"></script>

<!-- Theme files
============================================ -->

<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/application.js"></script>

<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/homepage.js"></script>

<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/toppanel.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/addtocart.js"></script>  

        <script src="{{URL::to('/')}}/assets/js/app.js"></script>
@endsection

@section("main-section")
    <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                    @foreach($trackdata as $item)
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h2 class="mb-0 font-size-20">Current Shipment Status for OrderID : {{ $item->order_id }}</h2>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Track Parcel</a></li>
                                            <li class="breadcrumb-item active">Status</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Customer Name : {{ $item->name }}</p>
                        <p>Contact Info : {{ $item->contact }}&emsp;{{ $item->email }}
                        </p>

                        <!-- end page title --> 
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- <h4 class="card-title mb-6">Vertical Timeline</h4> -->
                                        <div class="">
                                            <ul class="verti-timeline list-unstyled">
                                                @if($item->status == "pending")
                                                <li class="event-list active">
                                                    <div class="event-timeline-dot">
                                                        <i class="bx bx-right-arrow-circle bx-fade-right h3"></i>
                                                    </div>
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <i class="bx bx-copy-alt h1 text-primary"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <div>
                                                                <h3>Ordered</h3>
                                                                <p class="text-muted">Order Date & Time : {{ $item->order_datetime }}</p>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @else
                                                    <li class="event-list">
                                                    <div class="event-timeline-dot">
                                                        <i class="bx bx-right-arrow-circle h3"></i>
                                                    </div>
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <i class="bx bx-copy-alt h1 text-primary"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <div>
                                                                <h3>Ordered</h3>
                                                                <p class="text-muted">Order Date & Time : {{ $item->order_datetime }}</p>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endif
                                                @if($item->status == "cancelled")
                                                <li class="event-list active">
                                                    <div class="event-timeline-dot">
                                                        <i class="bx bx-x-circle text-warning h3"></i>
                                                    </div>
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <i class="bx bx-copy-alt h1 text-warning"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <div>
                                                                <h3>Cancelled</h3>
                                                                <p class="text-muted">Your order is cancelled on {{ $item->order_datetime }}</p>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @else
                                                @if($item->status == "processing")
                                                <li class="event-list active">
                                                    <div class="event-timeline-dot">
                                                        <i class="bx bx-right-arrow-circle bx-fade-right h3"></i>
                                                    </div>
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <i class="bx bx-package h1 text-primary"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <div>
                                                                <h3>Packed</h3>
                                                                <p class="text-muted">To achieve this, it would be necessary to have uniform grammar.</p>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @else
                                                <li class="event-list">
                                                    <div class="event-timeline-dot">
                                                        <i class="bx bx-right-arrow-circle h3"></i>
                                                    </div>
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <i class="bx bx-car h1 text-primary"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <div>
                                                                <h3>Packed</h3>
                                                                <p class="text-muted">It will be as simple as Occidental in fact, it will be Occidental..</p>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endif
                                                @if($item->status == "shipped")
                                                <li class="event-list active">
                                                    <div class="event-timeline-dot">
                                                        <i class="bx bx-right-arrow-circle bx-fade-right h3"></i>
                                                    </div>
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <i class="bx bx-car h1 text-primary"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <div>
                                                                <h3>Shipped</h3>
                                                                <p class="text-muted">It will be as simple as Occidental in fact, it will be Occidental..</p>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @else
                                                <li class="event-list">
                                                    <div class="event-timeline-dot">
                                                        <i class="bx bx-right-arrow-circle h3"></i>
                                                    </div>
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <i class="bx bx-car h1 text-primary"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <div>
                                                                <h3>Shipped</h3>
                                                                <p class="text-muted">It will be as simple as Occidental in fact, it will be Occidental..</p>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endif
                                                @if($item->status == "completed")
                                                <li class="event-list active">
                                                    <div class="event-timeline-dot">
                                                        <i class="bx bx-right-arrow-circle bx-fade-right h3"></i>
                                                    </div>
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <i class="bx bx-badge-check h1 text-primary"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <div>
                                                                <h3>Delivered</h3>
                                                                <p class="text-muted">Delivery Date : </p>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @else
                                                <li class="event-list">
                                                    <div class="event-timeline-dot">
                                                        <i class="bx bx-right-arrow-circle h3"></i>
                                                    </div>
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <i class="bx bx-badge-check h1 text-primary"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <div>
                                                                <h3>Delivered</h3>
                                                                <p class="text-muted">Delivery Date : </p>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endif
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
@endsection
    
@extends('Users.Layout.base')

@section('title')
Tow Status
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

@section('main-section')
    <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <h1>Tow Status</h1>
                        <!-- start page title -->
                         @foreach($trackdata as $item)
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18"></h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="/Users/Tow">Tow</a></li>
                                            <li class="breadcrumb-item active">Tow Status</li>
                                        </ol>
                                    </div>
                                </div>
                            <p>Customer Name : {{ $item->name }}</p>
                            <p>Contact Info : {{ $item->contact }}&emsp;{{ $item->email }}
                                <hr/>
                            </div>
                        </div>
                        @endforeach
                        <!-- end page title -->
                        @foreach($trackdata as $item)
                        <div class="row">
                            <!-- <div class="col-lg-0">&nbsp;</div> -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Status for Tow-ID - {{ $item->tow_id }}</h4><br>
                                        <div class="hori-timeline">
                                            <div class="owl-carousel owl-theme  navs-carousel events" id="timeline-carousel">
                                                @if($item->status == "pending")
                                                <div class="item event-list active">
                                                    <div>
                                                        <div class="event-date">
                                                            <div class="text-primary mb-1">Requested</div>
                                                            <h5 class="mb-4">&nbsp;</h5>
                                                        </div>
                                                        <div class="event-down-icon">
                                                            <i class="bx bx-down-arrow-circle h1 text-primary down-arrow-icon"></i>
                                                        </div>
                
                                                        <div class="mt-3 px-3">
                                                            <p class="text-muted">Requested on {{ $item->request_datetime}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="item event-list">
                                                    <div>
                                                        <div class="event-date">
                                                            <div class="text-primary mb-1">Requested</div>
                                                            <h5 class="mb-4">&nbsp;</h5>
                                                        </div>
                                                        <div class="event-down-icon">
                                                            <i class="bx bx-down-arrow-circle h1 text-primary"></i>
                                                        </div>
                
                                                        <div class="mt-3 px-3">
                                                            <p class="text-muted">Requested on {{ $item->request_datetime}}.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @if($item->status == "process")
                                                <div class="item event-list active">
                                                    <div>
                                                        <div class="event-date">
                                                            <div class="text-primary mb-1">Went for Process</div>
                                                            <h5 class="mb-4">&nbsp;</h5>
                                                        </div>
                                                        <div class="event-down-icon">
                                                            <i class="bx bx-down-arrow-circle h1 text-primary down-arrow-icon"></i>
                                                        </div>
                
                                                        <div class="mt-3 px-3">
                                                            <p class="text-muted">Tow vehicle on the way and getting reached to the venue.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="item event-list">
                                                    <div>
                                                        <div class="event-date">
                                                            <div class="text-info mb-1">Went for Process</div>
                                                            <h5 class="mb-4">&nbsp;</h5>
                                                        </div>
                                                        <div class="event-down-icon">
                                                            <i class="bx bx-down-arrow-circle h1 text-info"></i>
                                                        </div>
                
                                                        <div class="mt-3 px-3">
                                                            <p class="text-muted">Tow vehicle on the way and getting reached to the venue.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @if($item->status == "complete")
                                                <div class="item event-list active">
                                                    <div>
                                                        <div class="event-date">
                                                            <div class="text-success mb-1">Tow Completed</div>
                                                            <h5 class="mb-4">Third event</h5>
                                                        </div>
                                                        <div class="event-down-icon">
                                                            <i class="bx bx-down-arrow-circle h1 text-success down-arrow-icon"></i>
                                                        </div>
                
                                                        <div class="mt-3 px-3">
                                                            <p class="text-muted">The Tow-vehicle  reached to it's destination.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="item event-list">
                                                    <div>
                                                        <div class="event-date">
                                                            <div class="text-success mb-1">Tow Completed</div>
                                                            <h5 class="mb-4">Third event</h5>
                                                        </div>
                                                        <div class="event-down-icon">
                                                            <i class="bx bx-down-arrow-circle h1 text-success"></i>
                                                        </div>
                
                                                        <div class="mt-3 px-3">
                                                            <p class="text-muted">The tow-vehicle reached to it's destination.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                @endif
                                                @if($item->status == "cancel")
                                                <div class="item event-list active">
                                                    <div>
                                                        <div class="event-date">
                                                            <div class="text-warning mb-1">Tow Cancel</div>
                                                            <h5 class="mb-4">Forth event</h5>
                                                        </div>
                                                        <div class="event-down-icon">
                                                            <i class="bx bx-down-arrow-circle h1 text-warning down-arrow-icon"></i>
                                                        </div>
                
                                                        <div class="mt-3 px-3">
                                                            <p class="text-muted">The Tow-vehicle do not reached to it's destination.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="item event-list">
                                                    <div>
                                                        <div class="event-date">
                                                            <div class="text-warning mb-1">Tow Cancel</div>
                                                            <h5 class="mb-4">Forth event</h5>
                                                        </div>
                                                        <div class="event-down-icon">
                                                            <i class="bx bx-down-arrow-circle h1 text-warning"></i>
                                                        </div>
                
                                                        <div class="mt-3 px-3">
                                                            <p class="text-muted">The Tow-vehicle do not reached to it's destination.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end row -->
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
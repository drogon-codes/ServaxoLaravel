@extends('Users.Layout.base')

@section('title')
RTO Agents
@endsection

@section('css-section')

   <link href="{{URL::to('/')}}/Userassets/css/responsive.css" rel="stylesheet">
   <link rel="shortcut icon" type="image/png" href="{{URL::to('/')}}/Userassets/ico/favicon-16x16.png"/>
    

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
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so_advanced_search.css" rel="stylesheet">
     

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

<!-- Include Libs & Plugins
============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
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


@endsection




@section('main-section')
<div class="main-container container">
<ul class="breadcrumb">
            <li><a href="/Users/Home"><i class="fa fa-home"></i></a></li>
            <li><a href="/Users/RTOAgent">RTO Agent</a></li>
            <!-- <li><a href="/Users/News/Newsdetails">News Blog</a></li> -->
        </ul>

       <div class="row">

    <div class="col-md-12 our-member">
         <div class="cart text-right">
                 <input type="submit" data-toggle="tooltip" title="" value="Locate on Map" data-loading-text="Loading..." id="button-cart" class="btn btn-danger btn-lg" onclick="window.location='/Users/RTOAgent/rtoagentmap' " data-original-title="Locate on map">
        </div>          
                        <div class="title-about-us">
                            <h2><b>Our RTO Agents</b></h2>
                        </div>

                        <div class="short-des"><!-- Consectetur adipiscing elit. Donec pellentesque venenatis elit, quis aliquet mauris malesuada vel. Donec vitae libero dolor, eget dapibus justo.
                            <br>Aenean facilisis aliquet feugiat. Suspendisse lacinia congue est ac semper. Nulla ut elit magna, vitae volutpat magna. --></div>
                        <div class="overflow-owl-slider1">
                            <div class="wrapper-owl-slider1">
                                <div class="row slider-ourmember">
                                    @foreach($rto as $r)
                                    <div class="item-about col-lg-6 col-md-6 col-sm-6">
                                        <div class="item respl-item">
                                            <div class="item-inner">
                                                <div class="w-image-box">
                                                    <div class="item-image">
                                                        <a title="{{ $r->name }}" href="#">
                                                            <img src="{{URL::to('/')}}/agent_img/{{ $r->photo }}" alt="Image Client" height="150px;">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="info-member">
                                                    <h2 class="cl-name"><a title="{{ $r->name }}" href="#">{{ $r->name }}</a></h2>
                                                    <p class="cl-job">{{$r->agent_work}}</p>
                                                    <a href="mailto:contact@opencartworks.com"><p class="cl-des">{{$r->email}}</p></a>
                                                    
                                                    <p class="cl-des">{{$r->contact}}</p>

                                                    <ul>
                                                        <li>
                                                            <a class="fa fa-f" title="Facebook" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-t" title="Twitter" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-g" title="google" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-s" title="skyper" href="#"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
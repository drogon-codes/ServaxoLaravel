@extends('Users.Layout.base')

@section('title')
Training Schools
@endsection

@section('css-section')
	<!-- Favicon
    ============================================ -->
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
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so_advanced_search.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so-categories.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so-newletter-popup.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so-latest-blog.css" rel="stylesheet">

    <link href="{{URL::to('/')}}/Userassets/css/footer/footer1.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/header/header1.css" rel="stylesheet">
    <link id="color_scheme" href="{{URL::to('/')}}/Userassets/css/theme.css" rel="stylesheet"> 
    <link href="{{URL::to('/')}}/Userassets/css/responsive.css" rel="stylesheet">

    <link href="{{URL::to('/')}}/Userassets/js/lightslider/lightslider.css" rel="stylesheet">
     <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,600,700' rel='stylesheet' type='text/css'>     
    <style type="text/css">
         body{font-family:'Rubik', sans-serif;}
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
    
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/lightslider/lightslider.js"></script>
    <!-- Theme files
    ============================================ -->
    
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/addtocart.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/application.js"></script>    
    <script type="text/javascript"><!--
    // Check if Cookie exists
        if($.cookie('display')){
            view = $.cookie('display');
        }else{
            view = 'grid';
        }
        if(view) display(view);
    //--></script>
@endsection

@section('main-section')
        
  <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="/Users/Home"><i class="fa fa-home"></i></a></li>
            <li><a href="/Users/TrainingSchool">Training Schools</a></li>
        </ul>
        
        <div class="row">
             <div class="cart text-right">
                                        <input type="submit" data-toggle="tooltip" title="" value="Locate on Map" data-loading-text="Loading..." id="button-cart" class="btn btn-danger btn-lg" onclick="window.location='/Users/TrainingSchool/Trainingsclmap' " data-original-title="Locate on map">
                    </div>      
            <!--Middle Part Start-->
            @foreach($trainingsch as $d)
            <div id="content" class="col-md-9 col-sm-8">

                
                <div class="product-view">
                    <div class="left-content-product">
                        <div class="row">

                            <div class="content-product-left col-md-6 col-sm-12 col-xs-12">

                                <!-- <div id="thumb-slider-vertical" class="thumb-vertical-outer">
                                    <span class="btn-more prev-thumb nt"><i class="fa fa-angle-up"></i></span>
                                    <span class="btn-more next-thumb nt"><i class="fa fa-angle-down"></i></span>
                                    <ul class="thumb-vertical">
                                        <li class="owl2-item">
                                            <a data-index="0" class="img thumbnail" data-image="image/catalog/demo/product/replacement/1.jpg" title="Canon EOS 5D">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/demo/product/replacement/1.jpg" title="Canon EOS 5D" alt="Canon EOS 5D">
                                            </a>
                                        </li>
                                        <li class="owl2-item">
                                            <a data-index="1" class="img thumbnail " data-image="image/catalog/demo/product/replacement/2.jpg" title="Chicken swinesha">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/demo/product/replacement/2.jpg" title="Chicken swinesha" alt="Chicken swinesha">
                                            </a>
                                        </li>
                                        <li class="owl2-item">
                                            <a data-index="2" class="img thumbnail" data-image="image/catalog/demo/product/replacement/3.jpg" title="Chicken swinesha">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/demo/product/replacement/3.jpg" title="Chicken swinesha" alt="Chicken swinesha">
                                            </a>
                                        </li>
                                        <li class="owl2-item">
                                            <a data-index="3" class="img thumbnail" data-image="image/catalog/demo/product/replacement/4.jpg" title="Chicken swinesha">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/demo/product/replacement/4.jpg" title="Chicken swinesha" alt="Chicken swinesha">
                                            </a>
                                        </li>
                                        <li class="owl2-item">
                                            <a data-index="3" class="img thumbnail" data-image="image/catalog/demo/product/replacement/5.jpg" title="Chicken swinesha">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/demo/product/replacement/5.jpg" title="Chicken swinesha" alt="Chicken swinesha">
                                            </a>
                                        </li>
                                    </ul>                                                           
                                </div>
                                 --><div class="large-image  vertical">
                                    <img itemprop="image" class="product-image-zoom" src="{{URL::to('/')}}/school_img/{{ $d->logo }}" data-zoom-image="{{URL::to('/')}}/school_img/{{ $d->logo }}" title="Chicken swinesha" alt="Chicken swinesha">
                                </div>
                                <!-- <a class="thumb-video pull-left" href="https://www.youtube.com/watch?v=HhabgvIIXik"><i class="fa fa-youtube-play"></i></a>
                                 -->
                            </div>

                            <div class="content-product-right col-md-6 col-sm-12 col-xs-12">
                                <div class="title-product">
                                    <h1>{{ $d->school_name }}</h1>
                                </div>
                                <!-- Review ---->
                               <!--  <div class="box-review form-group">
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        </div>
                                    </div>

                                   </div>
 -->
                                <div class="product-label form-group">
                                    <!-- <div class="stock"><span>Availability:</span> <span class="status-stock">In Stock</span></div> -->
                                </div>

                                <div class="product-box-desc">
                                    <div class="inner-box-desc">
                                        <div class="price-tax"><span>Contact:</span>{{ $d->school_contact }}</div>
                                        <div class="reward"><span>Email :</span> {{ $d->emailid }}</div>
                                        <div class="brand"><span>Address Line 1:</span>{{ $d->addressline1 }}     </div>
                                        <div class="model"><span>Address Line 2:</span> {{ $d->addressline2 }} </div>
                                        <div class="reward"><span>Landmark:</span> {{ $d->landmark }} </div>
                                        <div class="reward"><span>Pincode:</span> {{ $d->pincode }} </div>
                                        <div class="reward"><span>Landmark:</span> {{ $d->landmark }} </div>
                                        <div class="reward"><span>City:</span> {{ $d->city_name }} </div>
                                       <!--  <div class="reward"><span>Latitude:</span> {{ $d->latitude }} </div>
                                        <div class="reward"><span>Logitude:</span> {{ $d->longitude }} </div>
                                        --> <div class="reward"><span>Price:</span> {{ $d->price }} </div>
                                        <!-- <div class="reward"><span>Is Active:</span> {{ $d->isactive }} </div> -->





                                    </div>
                                </div>

                                <!-- <div class="short_description form-group">
                                    <h4>OverView</h4>
                                    The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this display provid...
                                </div>
                                 --><!-- <div id="product">
                                    <h4>Available Options</h4>
                                 -->   <!--  <div class="image_option_type form-group required">
                                        <label class="control-label">Colors</label>
                                        <ul class="product-options clearfix"id="input-option231">
                                            <li class="radio active">
                                                <label>
                                                    <input class="image_radio" type="radio" name="option[231]" value="33"> <img src="{{URL::to('/')}}/Userassets/image/demo/colors/blue.jpg"
                                                    data-original-title="blue +$12.00" class="img-thumbnail icon icon-color">               <i class="fa fa-check"></i>
                                                    <label> </label>
                                                </label>
                                            </li>
                                            <li class="radio">
                                                <label>
                                                    <input class="image_radio" type="radio" name="option[231]" value="34"> <img src="{{URL::to('/')}}/Userassets/image/demo/colors/brown.jpg"
                                                    data-original-title="brown -$12.00" class="img-thumbnail icon icon-color">              <i class="fa fa-check"></i>
                                                    <label> </label>
                                                </label>
                                            </li>
                                            <li class="radio">
                                                <label>
                                                    <input class="image_radio" type="radio" name="option[231]" value="35"> <img src="{{URL::to('/')}}/Userassets/image/demo/colors/green.jpg"
                                                    data-original-title="green +$12.00" class="img-thumbnail icon icon-color">              <i class="fa fa-check"></i>
                                                    <label> </label>
                                                </label>
                                            </li>
                                            <li class="selected-option">
                                            </li>
                                        </ul>
                                    </div>
                                    --> 
                                    

                                    
                                </div>
                                <!-- end box info product -->

                            </div>
                        </div>
                    </div>
                    
                
                </div>
                @endforeach
                
                <!-- Product Tabs -->
                <!-- //Product Tabs -->
                
                <!-- Related Products -->
                
                <!-- end Related  Products-->

        

                
            </div>
            <!--Middle Part End-->
            <!--Left Part Start -->
            <!--Left Part End -->
        </div>
        
    </div>
        

    
@endsection
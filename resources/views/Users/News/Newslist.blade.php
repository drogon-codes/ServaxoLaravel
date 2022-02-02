@extends('Users.Layout.base')

@section('title')
News
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
    </style> @endsection

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
            view = 'list';
        }
        if(view) display(view);
    //--></script>
@endsection

@section('main-section')
<div id="wrapper" class="wrapper-fluid banners-effect-8">
    

    <!-- Header Container  -->
    <!-- //Header Container  -->
    
   
<!-- Main Container  -->
    <!-- Main Container  -->
    <div class="main-container container">
            <ul class="breadcrumb">
                <li><a href="/Users/Home"><i class="fa fa-home"></i></a></li>
                <li><a href="/Users/News">News</a></li>
            </ul>
            
            <div class="row">
                
                <!--Middle Part Start-->
                       
                <div id="content" class="col-md-12 col-sm-8">
                    <div class="products-category">     
                        </div>
                        <!-- Filters -->
                        <div class="product-filter product-filter-top filters-panel">
                            <div class="row">
                                <div class="col-md-5 col-sm-3 col-xs-12 view-mode">
                                    
                                        <div class="list-view">
                                           <!--  <button class="btn btn-default grid" data-view="grid" data-toggle="tooltip" data-original-title="Grid"><i class="fa fa-th"></i></button>
                                            -->  <button class="btn btn-default list active" selected data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                                        </div>
                            
                                </div>
                                
                            </div>
                        </div>
                        <!--  //end Filters -->
                        <!--changed listings-->
                        <div class="products-list row nopadding-xs so-filter-grid    list">
                    
                          @foreach($news as $n)
                            <div class="product-layout col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container item--static">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a  target="_self" title="Volup tatem accu">
                                                <img src="{{URL::to('/')}}/news_img/{{ $n->news_image}}" class="img-1 img-responsive" alt="image1" onclick="window.location='/Users/News/Newsdetails/{{ $n->news_id }}';">
                                                <img src="{{URL::to('/')}}/news_img/{{ $n->news_image}}" onclick="window.location='/Users/News/Newsdetails/{{ $n->news_id }}';" class="img-2 img-responsive" alt="image2">
                                            </a>
                                        </div>
                                        <!-- <span class="label-product label-new">New</span> -->
                                        <!--quickview--> 
                                        <div class="so-quickview">
                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-search"></i><span>Quick view</span></a>
                                        </div>                                                     
                                        <!--end quickview-->
                                    </div>
                                    <div class="right-block">
                                        <div class="button-group cartinfo--static hidden">
                                            
                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button>
                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                <span>Add to cart </span>   
                                            </button>
                                            <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button>                                                    
                                        </div>
                                        <h4><a onclick="window.location='/Users/News/Newsdetails/{{ $n->news_id }}';" title="Volup tatem accu" target="_self">{{ $n->news_title }}</a></h4>
                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="description item-desc">
                                            <p>{{ $n->description }}</p>
                                        </div>
                                    </div>                                            
                                </div>
                            </div>
                            @endforeach                           
                        </div>
                        <!--// End Changed listings-->
                        
                        <!-- Filters -->
                        <div class="product-filter product-filter-bottom filters-panel">
                            <div class="row">
                                <div class="col-lg-3 text-left"></div>
                                <!-- <div class="col-sm-6 text-right">Showing 1 to 12 of 12 (1 Pages)</div> -->
                            </div>
                        </div>
                        <!-- //end Filters -->
                        
                    </div>
                    
                </div>
                

                <!--Middle Part End-->

                <!--Right Part Start -->
                <aside class="col-sm-4 col-md-3 content-aside" id="column-left"></aside>
                    
                    <div class="module">
    </div>
</div>



@endsection
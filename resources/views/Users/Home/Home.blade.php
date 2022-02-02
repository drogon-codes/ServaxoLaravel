@extends('Users.Layout.base')

@section('title')
Home
@endsection

@section('css-section')
<link rel="shortcut icon" type="image/png" href="{{URL::to('/')}}/Userassets/ico/favicon-16x16.png"/>
    

         <!-- <link id="color_scheme" href="{{URL::to('/')}}/Userassets/css/home7.css" rel="stylesheet">  -->
    <!-- <link href="{{URL::to('/')}}/Userassets/css/responsive.css" rel="stylesheet"> -->

   
    <!-- <link id="color_scheme" href="{{URL::to('/')}}/Userassets/css/theme.css" rel="stylesheet">  -->
    <link href="{{URL::to('/')}}/Userassets/css/responsive.css" rel="stylesheet">

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
    <style type="text/css">
         body{font-family:'Rubik', sans-serif;}
         .coupon-popup-sec { margin: 30px auto;color: #fff; padding: 0; width: 550px; position: relative;font-family: 'Montserrat', sans-serif;text-transform: uppercase;}
.coupon-popup-sec h1,h2,h3,h4,h5 {margin: 0;}
.coupon-popup-sec .coupon-content { margin: 0px; padding: 38px 0; float: left; width: 100%; box-sizing: border-box; border-radius: 10px;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec1 {width: 40%;float: left; padding: 36.5px 0;box-sizing: border-box;text-align: center;background: #ff0022;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec2 {padding: 56.2px 0;background: #332d27;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec1 h2 {font-size: 68px;font-weight: 800;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec1 h3 {font-size: 29px;}
.coupon-popup-sec .coupon-content p {font-size: 17px;font-weight: 600;letter-spacing: 0.5px}
.coupon-popup-sec .coupon-content h4 {font-size: 25px;font-weight: 600;padding-bottom: 30px;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec1 h5 {font-size: 18px;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec2 .code-now-btn {cursor: pointer;font-size: 27px;text-transform: uppercase;font-weight: 600;color: #fff;margin: 0 0 10px 0;padding: 15px 25px; clear: both;border: 0px;background: #ff0022;font-family: 'Montserrat', sans-serif;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec2 .code-now-btn:hover { background: #00ae4d; }
.coupon-popup-sec .coupon-content .coupon-brdr-sec2 .code-now-btn:focus, .coupon-popup-sec .coupon-cls-btn:focus { outline: none; }
.coupon-popup-sec .coupon-cls-btn { font-size: 14px; line-height: 18px; width: 28px; height: 28px; -webkit-border-radius: 50%; border-radius: 50%; color: black; background: #ffffff; position: absolute; right: -14px; top: -14px; border: 0px; -webkit-box-shadow: 0 0 2px 0 rgba(0,0,0,0.27); box-shadow: 0 0 2px 0 rgba(0,0,0,0.27); cursor: pointer;}
.popup-graybox {position: fixed;width: 100%;top: 0;left: 0;height: 75vh;z-index: 99999;text-align: center;align-items: center;display: flex;box-sizing: border-box;overflow: auto;}
.coupon-popup-sec .coupon-cls-btn:hover {background: #ff0000;color: white;}
.coupon-popup-sec .coupon-content {background: #000;-webkit-box-shadow: 0px 10px 20px 0px rgba(50, 50, 50, 0.52);-moz-box-shadow: 0px 10px 20px 0px rgba(50, 50, 50, 0.52);box-shadow: 0px 10px 20px 0px rgba(50, 50, 50, 0.52);}
.coupon-popup-sec .coupon-content .main_content{width: 100%;float: left; margin-bottom: 30px;}
@media only screen and (max-width:640px) {
.coupon-popup-sec { width: 90%; }
}
@media only screen and (max-width:480px) {
.coupon-popup-sec .coupon-content .coupon-brdr-sec1 h2 {font-size: 42px;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec1 h3 {font-size: 19px;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec1 h5 {font-size: 16px;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec2 .code-now-btn {font-size: 16px;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec2 {padding: 54px 0;}
.coupon-popup-sec .coupon-content {padding: 45px 0 30px 0;}
.coupon-popup-sec .coupon-content h4 {font-size: 18px;letter-spacing: 0.5px;}
}
@media only screen and (max-width:425px) {
.coupon-popup-sec .coupon-content .coupon-brdr-sec1 {width: 45%;padding: 23.5px 0;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec2 {padding: 46px 0;}
.coupon-popup-sec .coupon-content p {font-size: 12px;}
.coupon-popup-sec .coupon-content h4 {font-size: 16px;padding-bottom: 15px;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec2 .code-now-btn {font-size: 14px;letter-spacing: 0.5px;padding: 10px 15px;}
.coupon-popup-sec .coupon-content {padding: 30px 0 20px 0;}
}
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

@section("main-section")

        <div class="slider-container"> 
            <div class="module sohomepage-slider ">
                <div class="yt-content-slider"  data-rtl="yes" data-autoplay="yes" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                    <div class="yt-content-slide">
                        <a href="#"><img src="{{URL::to('/')}}/Userassets/image/catalog/slideshow/home5/item-9.jpg" alt="slider1" class="img-responsive"></a>
                    </div>
                    <div class="yt-content-slide">
                        <a href="#"><img src="{{URL::to('/')}}/Userassets/image/catalog/slideshow/home5/item-10.jpg" alt="slider2" class="img-responsive"></a>
                    </div>
                    <div class="yt-content-slide">
                        <a href="#"><img src="{{URL::to('/')}}/Userassets/image/catalog/slideshow/home5/item-6.jpg" alt="slider3" class="img-responsive"></a>
                    </div>
                   
                </div>
                
                <div class="loadeding"></div>
            </div>            
        </div>
            <br/>
                
        <div class="row-color-content">
            <div class="container">
                <div class="module listingtab-layout2">
                    <div class="modcontent">
                      
                    </div>
                </div>
                <!-- Listing tabs -->
                <div class="module listingtab-layout2">
                    <div class="pre_content">
                        <div class="banners banners1">
                         
                            <div><a href="/Users/Catagories/homecata"><img src="{{URL::to('/')}}/Userassets/image/catalog/banners/cate1.jpg" alt="banner"></a></div>
                       
                        </div>
                    </div>
                    <div class="modcontent">
                        <div id="so_listing_tabs_1" class="so-listing-tabs first-load">
                            <div class="loadeding"></div>
                            <div class="ltabs-wrap">
                                <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="none" data-ajaxurl="" data-type_source="0" data-lg="3" data-md="3" data-sm="3" data-xs="1" data-margin="30">
                                    <!--Begin Tabs-->
                                    <div class="ltabs-tabs-wrap"> 
                                    <span class="ltabs-tab-selected">Brake Parts</span> <span class="ltabs-tab-arrow">▼</span>
                                        <div class="item-sub-cat">
                                            <ul class="ltabs-tabs cf">
                                                <li class="ltabs-tab tab-sel" data-category-id="31" data-active-content=".items-category-31"> <span class="ltabs-tab-label">Latest Products</span> </li>
                                                <!-- <li class="ltabs-tab " data-category-id="18" data-active-content=".items-category-18"> <span class="ltabs-tab-label">Lighting & Electical</span> </li>
                                                <li class="ltabs-tab " data-category-id="25" data-active-content=".items-category-25"> <span class="ltabs-tab-label">Shock & Suspension</span> </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End Tabs-->
                                </div>
                                <div class="wap-listing-tabs products-list grid">
                                    <div class="ltabs-items-container">                                    
                                        <!--Begin Items-->
                                        <div class="ltabs-items ltabs-items-selected items-category-31" data-total="16">
                                            <div class="ltabs-items-inner ltabs-slider">
                                            @foreach($partdata as $item)   
                                                <div class="item">         
                                                    <div class="product-layout product-grid">
                                                        <div class="product-item-container item--static">
                                                            <div class="left-block">
                                                                <div class="product-image-container second_img">
                                                                    <a onclick="window.location='/Users/Catagories/Products/{{ $item->part_id }}'" target="_self" title="{{ $item->part_name }}">
                                                <img src="{{URL::to('/')}}/part_img/{{ $item->img1 }}" class="img-1 img-responsive" alt="image1">
                                                <img src="{{URL::to('/')}}/part_img/{{ $item->img2 }}" class="img-2 img-responsive" alt="image2">
                                                <!-- <img src="{{URL::to('/')}}/part_img/{{ $item->img3 }}" class="img-2 img-responsive" alt="image2"> -->
                                                <!-- <img src="{{ $item->img3 }}" class="img-2 img-responsive" alt="image3"> -->
                                            </a>
                                                                </div>
                                                                <!-- <span class="label-product label-new">New </span> -->
                                                                <!--quickview--> 
                                                                <!-- <div class="so-quickview">
                                                                  <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="{{URL::to('/')}}/Userassets/quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-search"></i><span>Quick view</span></a>
                                                                </div> -->                                                     
                                                                <!--end quickview-->
                                                            </div>
                                                            <div class="right-block">
                                                                <div class="button-group cartinfo--static">
                                                                    
                                                                    <!-- <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button>
                                                                     -->@if(Session::has('id'))
                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 '); window.location='/Users/Cart/{{ $item->part_id }}';">
                                                <span>Add to cart </span> 
                                            </button>
                                        @else
                                            <button type="button" class="addToCart" data-toggle="modal" data-target="#myModal1" title="Add to cart" >
                                                <span>Add to cart </span> 
                                            </button>
                                        @endif  
                                                                   <!--  <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button> -->                                                    
                                                                </div>
                                                                <h4><a href="product.html" title="Volup tatem accu" target="_self">{{ $item->part_name }}</a></h4>
                                                                <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>
                                                                <div class="price">
                                                                  <span class="price">Rs.{{ $item->price }}</span>
                                                                </div>
                                                            </div>                                            
                                                        </div>                                            
                                                    </div>      
                                                </div>
                                                @endforeach
                                                                                                                            
                                            </div>
                                            
                                        </div>
                                        <div class="ltabs-items items-category-18 grid" data-total="16">
                                            <div class="ltabs-loading"></div>
                                            
                                        </div>
                                        <div class="ltabs-items  items-category-25 grid" data-total="16">
                                            <div class="ltabs-loading"></div>
                                        </div>
                                        <!--End Items-->
                                    </div>
                                </div>
                                
                                
                            </div>   
                        </div>
                    </div>
                    <!-- model -->
                    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!-- <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h2 class="modal-title" id="myModalLabel">New to Servaxo?</h2>
                        </div> -->
                        <!-- <div class="modal-body"> -->
                            <section class="popup-graybox">
                            <div class="coupon-popup-sec" >
                              <div class="coupon-content" style="background-color: #fff;">
                                <h4 style="color: #332d27;">New To Servaxo??</h4>
                                  <div class="main_content">
                                     <div class="coupon-brdr-sec1">
                                      <h3 data-edit="text">Be a</h3>
                                       <h3 data-edit="text" style="color: #332d27;font-size: 67px;font-weight: 800;">User</h3>
                                       <!-- <h6>&emsp;</h6> -->
                                     </div>
                                     <div class="coupon-brdr-sec2">

                                       <button class="code-now-btn" data-edit="button" onclick="window.location='/Users/Login/Register'">Sign-up </button>
                                     </div>
                                  </div>
                                <button class="coupon-cls-btn" data-dismiss="modal">
                                    <i class="fa fa-times"></i>
                                </button>
                                <p style="color: #332d27;">And get exciting offers on our products, enable towing service and many more....</p>
                              </div>
                            </div>
                            </section>
                        <!-- </div> -->
                        <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger">Log in</button>
                        </div> -->
                    </div>
                </div>
            </div>
                </div>

                <div class="module listingtab-layout2">
                    <div class="pre_content">
                        <div class="banners banners1">
                            <div><a href="#"><img src="{{URL::to('/')}}/Userassets/image/catalog/banners/cate2.jpg" alt="banner" ></a></div>
                        </div>
                    </div>
                    <div class="modcontent">
                        <div id="so_listing_tabs_2" class="so-listing-tabs first-load">
                            <div class="loadeding"></div>
                            <div class="ltabs-wrap">
                                <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="none" data-ajaxurl="" data-type_source="0" data-lg="3" data-md="3" data-sm="3" data-xs="1" data-margin="30">
                                    
                                    <div class="ltabs-tabs-wrap"> 
                                    <span class="ltabs-tab-selected">Packages</span> <span class="ltabs-tab-arrow">▼</span>
                                        <div class="item-sub-cat">
                                            <ul class="ltabs-tabs cf">
                                                <li class="ltabs-tab tab-sel" data-category-id="20" data-active-content=".items-category-20"> <span class="ltabs-tab-label"> Packages</span> </li>
                                                <!-- <li class="ltabs-tab " data-category-id="18" data-active-content=".items-category-18"> <span class="ltabs-tab-label"></span> </li>
                                                <li class="ltabs-tab " data-category-id="25" data-active-content=".items-category-25"> <span class="ltabs-tab-label"></span> </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                
                                </div>

                            
                                <div class="wap-listing-tabs products-list grid">
                                    <div class="ltabs-items-container">                                    
                                  
                                        <div class="ltabs-items ltabs-items-selected items-category-20" data-total="16">
                                            <div class="ltabs-items-inner ltabs-slider">
                                                @foreach($packagedata as $p)
                                                <div class="item">         
                                                    <div class="product-layout product-grid">                                               
                                                        <div class="product-item-container item--static">
                                                            <div class="left-block">
                                                                <div class="product-image-container second_img">
                                                                    <a href="product.html" target="_self" title="{{ $p->pkg_title }}">
                                                                       <img src="{{URL::to('/')}}/pkg_img/{{ $p->pkg_image }}" alt="banner" style="height: 264px;">
                                                                        <!-- <img src="{{URL::to('/')}}/Userassets/image/catalog/demo/product/wheel_tires/2.jpg" class="img-2 img-responsive" alt="image2"> -->
                                                                    </a>
                                                                </div>
                                                                <!-- <span class="label-product label-new">New </span> -->
                                                             
                                                               <!--  <div class="so-quickview">
                                                                  <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-search"></i><span>Quick view</span></a>
                                                                </div>       -->                                               
                                                            
                                                            </div>
                                                            <div class="right-block">
                                                                <div class="button-group cartinfo--static">
                                                                    
                                                                   <!--  <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button> -->
                                                                   @if(!Session::has('id'))
                                                                    <button type="button" class="addToCart"  data-toggle="modal" data-target="#myModal1" title="Book Now">
                                                                        <span>Book Now </span>   
                                                                    </button>
                                                                    @else
                                                                    <button type="button" class="addToCart" title="Book Now" onclick="window.location='/Users/Packages/SelectPackage/{{$p->pkg_id}}'">
                                                                        <span>Book Now </span>   
                                                                    </button>
                                                                    @endif
                                                                    <!-- <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button>  -->                                                   
                                                                </div>
                                                                <h4><a href="product.html" title="{{ $p->pkg_title }}" target="_self">{{ $p->pkg_title }}</a></h4>
                                                                <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>
                                                                <div class="price">
                                                                  <span class="price">Rs.{{ $p->price }}</span>
                                                                </div>
                                                            </div>                                            
                                                        </div>                                            
                                                    </div>      
                                                </div>
                                                @endforeach
                    
                                            </div>
                                            
                                        </div>
                                        <div class="ltabs-items items-category-18 grid" data-total="16">
                                            <div class="ltabs-loading"></div>
                                            
                                        </div>
                                        <div class="ltabs-items  items-category-25 grid" data-total="16">
                                            <div class="ltabs-loading"></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>   
                        </div>
                    </div>
                </div>

                <div class="module listingtab-layout2">
                    <div class="pre_content">
                        <div class="banners banners1">
                            <div><a href="#"><img src="{{URL::to('/')}}/Userassets/image/catalog/banners/cate3.jpg" alt="banner"></a></div>
                        </div>
                    </div>
                    <div class="modcontent">
                        <div id="so_listing_tabs_3" class="so-listing-tabs first-load">
                            <div class="loadeding"></div>
                            <div class="ltabs-wrap">
                                <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="none" data-ajaxurl="" data-type_source="0" data-lg="3" data-md="3" data-sm="3" data-xs="1" data-margin="30">
                                    <!--Begin Tabs-->

                                    <div class="ltabs-tabs-wrap"> 
                                    <span class="ltabs-tab-selected">Latest News</span> <span class="ltabs-tab-arrow">▼</span>
                                        <div class="item-sub-cat">
                                            <ul class="ltabs-tabs cf">
                                                <li class="ltabs-tab tab-sel" data-category-id="32" data-active-content=".items-category-32"> <span class="ltabs-tab-label">Latest News</span> </li>
                                               <!--  <li class="ltabs-tab " data-category-id="18" data-active-content=".items-category-18"> <span class="ltabs-tab-label">Dash Cam</span> </li>
                                                <li class="ltabs-tab " data-category-id="25" data-active-content=".items-category-25"> <span class="ltabs-tab-label">Usb connect</span> </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End Tabs-->
                                </div>
                            
                                <div class="wap-listing-tabs products-list grid">
                                    <div class="ltabs-items-container">                                    
                                        <!--Begin Items-->
                                        <div class="ltabs-items ltabs-items-selected items-category-32" data-total="16">
                                            <div class="ltabs-items-inner ltabs-slider">
                                                 @foreach($news as $d)
                                                <div class="item">         
                                                    <div class="product-layout product-grid" >                                               
                                                        <div class="product-item-container item--static" style="height: 375px;">
                                                            <div class="left-block">
                                                                <div class="product-image-container second_img">
                                                                    <!-- <a href="{{URL::to('/')}}/Userassets/product.html" target="_self" title="Venison porchett"> -->
                                                                        <img src="{{URL::to('/')}}/news_img/{{ $d->news_image}}" class="img-1 img-responsive" alt="image1" onclick="window.location='/Users/News/Newsdetails/{{ $d->news_id }}';" >
                                                <img src="{{URL::to('/')}}/news_img/{{ $d->news_image}}" onclick="window.location='/Users/News/Newsdetails/{{ $d->news_id }}';" class="img-2 img-responsive" alt="image2">
                                                                    </a>
                                                                </div>                                                          
                                                                <!--quickview--> 
                                                                <div class="so-quickview">
                                                                  <!-- <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="{{URL::to('/')}}/Userassets/quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-search"></i><span>Quick view</span></a> -->
                                                                </div>                                                     
                                                                <!--end quickview-->
                                                            </div>
                                                            <div class="right-block">
                                                                <div class="button-group cartinfo--static">
                                                                    
                                                                    <!-- <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button> -->
                                                                    <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                                        <span>View  </span>   
                                                                    </button>
                                                                    <!-- <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button>  -->                                                   
                                                                </div>
                                                                <h4><a href="{{URL::to('/')}}/Userassets/product.html" title="{{ $d->news_title }}" target="_self">{{ $d->news_title }}</a></h4>
                                                                <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>
                                                                <!-- <div class="price">
                                                                  <span class="price">$56.00</span>
                                                                </div> -->
                                                            </div>                                            
                                                        </div>                                            
                                                    </div>      
                                                </div>
                                                @endforeach
                                                                                                              
                                            </div>
                                            
                                        </div>
                                        <div class="ltabs-items items-category-18 grid" data-total="16">
                                            <div class="ltabs-loading"></div>
                                            
                                        </div>
                                        <div class="ltabs-items  items-category-25 grid" data-total="16">
                                            <div class="ltabs-loading"></div>
                                        </div>
                                        <!--End Items-->
                                    </div>
                                </div>
                                
                            </div>   
                        </div>
                    </div>
                </div>
                <!-- end Listing tabs -->
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 col_slla  box-advanced-search">
                    <div class="so_advanced_search">
                        <div class="sas_wrap">
                            
                        </div>
                    </div> 
                </div>

        <div class="container">
            <!-- So Categories -->           
            <div id="so_categories_21" class="so-categories module theme2 cates-layout1 container preset01-3 preset02-2 preset03-2 preset04-2 preset05-1">
                <div class="pre_text">
                    Top Categories           
                </div>
                <h3 class="modtitle"><span>CATEGORIES</span></h3>
                <div class="modcontent">
                    <div class="cat-wrap theme2">
                         @foreach($catdata as $s)
                        <div class="content-box">
                            <div class="inner">

                                <div class="parent-cat">
                                    <div class="image-cat">
                                         <img src="{{URL::to('/')}}/category_img/{{ $s->catagory_img}}" class="img- img-responsive" alt="image1" style="height: 150px ; width: 300px;" onclick="window.location='/Users/Catagories/'">
                                    </div>
                                </div>
                                
                                                              
                                <div class="cat-title"><a href="#">{{$s->catagory_name}}</a></div>
                                <div class="child-cat">                  
                                    <div class="child-cat-title"><a >{{$s->catagory_description}}</a></div>   
                                    <a class="viewmore" onclick="window.location='/Users/Catagories/{{$s->catagory_id}}'">View More</a>                                                        
                                </div>
                            
                            </div>
                            
                        </div>
                            @endforeach
                        
                    </div>
                </div>
            </div>          
            <!-- end So Categories -->
            
            <div class="slider-brands module">
                <div class="pre_text">Top quality partners</div>
                <h3 class="modtitle"><span> Brands</span></h3>  
                              
                <div class="yt-content-slider contentslider modcontent" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="6" data-items_column0="6" data-items_column1="5" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                   @foreach($brand as $b) 
                    <div class="item"><a href="#"><img src="{{URL::to('/')}}/company_img/{{ $b->company_logo}}" alt="brand" style="height: 100px;"    ></a></div>
                    <!-- <div class="item"><a href="#"><img src="{{URL::to('/')}}/Userassets/image/catalog/brands/b2.jpg" alt="brand"></a></div>
                    <div class="item"><a href="#"><img src="{{URL::to('/')}}/Userassets/image/catalog/brands/b3.jpg" alt="brand"></a></div>
                    <div class="item"><a href="#"><img src="{{URL::to('/')}}/Userassets/image/catalog/brands/b4.jpg" alt="brand"></a></div>
                    <div class="item"><a href="#"><img src="{{URL::to('/')}}/Userassets/image/catalog/brands/b5.jpg" alt="brand"></a></div>
                    <div class="item"><a href="#"><img src="{{URL::to('/')}}/Userassets/image/catalog/brands/b6.jpg" alt="brand"></a></div>
                    <div class="item"><a href="#"><img src="{{URL::to('/')}}/Userassets/image/catalog/brands/b3.jpg" alt="brand"></a></div> -->
                    @endforeach 
                </div>
                  
            </div>
         
        </div>
    </div>
</div>
@endsection


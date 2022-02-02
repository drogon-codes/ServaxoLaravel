@extends('Users.Layout.base')

@section('title')
Product Details
@endsection

@section('css-section')
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
    <link href="{{URL::to('/')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

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

     <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,600,700' rel='stylesheet' type='text/css'>     
    <style type="text/css">
         body{font-family:'Rubik', sans-serif;}
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
    
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/lightslider/lightslider.js"></script>
    <!-- Theme files
    ============================================ -->
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/homepage.js"></script>
    
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/addtocart.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/application.js"></script>
<!--         -->
@endsection


@section('main-section')
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
    <!-- Main Container  -->
     <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="/Users/Home"><i class="fa fa-home"></i></a></li>
            <li><a href="/Users/Products">Products</a></li>
            <!-- <li><a href="#">Chicken swinesha</a></li> -->
            
        </ul>
        
        <div class="row">
    
            <!--Left Part Start -->
            <aside class="col-sm-4 col-md-3 content-aside" id="column-left">
                <div class="module product-simple">
                    <h3 class="modtitle">
                        <span>Latest products</span>
                    </h3>
                    <div class="modcontent">
                        <div class="so-extraslider" >
                            <!-- Begin extraslider-inner -->
                            <div class=" extraslider-inner">
                                  @foreach($partdata1 as $item) 
                                <div class="item ">
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a onclick="window.location='/Users/Catagories/Products/{{ $item->part_id }}'" target="_self" title="Mandouille short ">
                                                    <a onclick="window.location='/Users/Catagories/Products/{{ $item->part_id }}'" target="_self" title="{{ $item->part_name }}">
                                                <img src="{{URL::to('/')}}/part_img/{{ $item->img1 }}" class="img-1 img-responsive" alt="image1">
                                                    </a>
                                            </div>
                                            
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a onclick="window.location='/Users/Catagories/Products/{{ $item->part_id }}'" target="_self" title="Mandouille short"><h4>{{ $item->part_name }}</h4></a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price">Rs.{{ $item->price }} </span>&nbsp;&nbsp;

                                                <!-- <span class="price-old">Rs.76.00 </span> --><!--     -->

                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                     @endforeach
                                   
            </aside>

            <!--Left Part End -->
            @foreach($partdata as $d)
            <!--Middle Part Start-->
            <div id="content" class="col-md-9 col-sm-8">
                
                <div class="product-view row">
                    <div class="left-content-product">
                
                        <div class="content-product-left class-honizol col-md-5 col-sm-12 col-xs-12">
                            <div class="large-image  ">
                                <img itemprop="image" class="product-image-zoom" src="{{URL::to('/')}}/part_img/{{ $d->img1 }}" title="Chicken swinesha" alt="Chicken swinesha">
                            </div>
                            <a class="thumb-video pull-left" href="https://www.youtube.com/watch?v=HhabgvIIXik"><i class="fa fa-youtube-play"></i></a>
                            
                            <div id="thumb-slider" class="yt-content-slider full_slider owl-drag" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column00="4" data-items_column0="4" data-items_column1="3" data-items_column2="4"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                <a data-index="0" class="img thumbnail " data-image="image/catalog/demo/product/replacement/1.jpg" title="">
                                    <img src="{{URL::to('/')}}/part_img/{{ $d->img2 }}" title="Chicken swinesha" alt="Chicken swinesha">
                                </a>
                                <a data-index="1" class="img thumbnail " data-image="image/catalog/demo/product/replacement/2.jpg" title="Chicken swinesha">
                                    <img src="{{URL::to('/')}}/part_img/{{ $d->img3 }}" title="Chicken swinesha" alt="Chicken swinesha">
                                </a>
                            </div>
                            
                        </div>

                        <div class="content-product-right col-md-7 col-sm-12 col-xs-12">
                            <div class="title-product">
                                <h1>{{$d->part_name}}</h1>
                            </div>
                            <!-- Review ---->
                            
                            <div class="product-label form-group">
                                <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                    <span class="price-new" itemprop="price">Rs.{{ $d->price }}</span>
                                    <!-- <span class="price-old">$122.00</span> -->
                                </div>
                                <div class="stock"><span>Availability:</span> <span class="status-stock">In Stock</span></div>
                            </div>

                            <div class="product-box-desc">
                                <div class="inner-box-desc">
                                    <div class="brand"><span>Model:</span><a href="#">{{ $d->model_name }}</a>     </div>
                                    <div class="model"><span>Manual:</span><a href="/downloadpart/{{$d->part_manual_pdf}}"><span  style="font-size: 15px; color:green;"> <i class="bx bx-download"></i>&nbsp;Download</span></a></div>
                                </div>
                            </div>


                            <div id="product">
                                <!-- <h4>Available Options</h4>
                                <div class="image_option_type form-group required">
                                    <label class="control-label">Colors</label>
                                    <ul class="product-options clearfix"id="input-option231">
                                        <li class="radio">
                                            <label>
                                                <input class="image_radio" type="radio" name="option[231]" value="33"> 
                                                <img src="{{URL::to('/')}}/Userassets/image/demo/colors/blue.jpg" data-original-title="blue +$12.00" class="img-thumbnail icon icon-color">             <i class="fa fa-check"></i>
                                                <label> </label>
                                            </label>
                                        </li>
                                        <li class="radio">
                                            <label>
                                                <input class="image_radio" type="radio" name="option[231]" value="34"> 
                                                <img src="{{URL::to('/')}}/Userassets/image/demo/colors/brown.jpg" data-original-title="brown -$12.00" class="img-thumbnail icon icon-color">               <i class="fa fa-check"></i>
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
                                <!-- <div class="box-checkbox form-group required">
                                    <label class="control-label">Checkbox</label>
                                    <div id="input-option232">
                                        <div class="checkbox">
                                            <label for="checkbox_1"><input type="checkbox" name="option[232][]" value="36" id="checkbox_1"> Checkbox 1 (+$12.00)</label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="checkbox_2"><input type="checkbox" name="option[232][]" value="36" id="checkbox_2"> Checkbox 2 (+$36.00)</label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="checkbox_3"><input type="checkbox" name="option[232][]" value="36" id="checkbox_3"> Checkbox 3 (+$24.00)</label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="checkbox_4"><input type="checkbox" name="option[232][]" value="36" id="checkbox_4"> Checkbox 4 (+$48.00)</label>
                                        </div>
                                    </div>
                                </div>
 -->                            <form method="post" action="/AddToCart2">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <div class="form-group box-info-product">
                                    <div class="option quantity">
                                        <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
                                            <label>Qty</label>
                                            <input class="form-control" type="text" name="txtqty"
                                            value="1">
                                            <input type="hidden" name="txtpartid" value="{{$d->part_id}}">
                                            <span class="input-group-addon product_quantity_down">−</span>
                                            <span class="input-group-addon product_quantity_up">+</span>
                                        </div>
                                    </div>

                                    <div class="cart">
                                        @if(Session::has('id'))
                                        <input type="submit" data-toggle="tooltip" title="" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" onclick="cart.add('42', '1');" data-original-title="Add to Cart">
                                        @else
                                        <input type="button" data-toggle="modal" data-target="#myModal1" title="" value="Add to Cart" data-loading-text="Loading..." class="btn btn-mega btn-lg"data-original-title="Add to Cart">
                                        @endif
                                    </div>
                                    </form>
<!--                                     <div class="add-to-links wish_comp">
                                        <ul class="blank list-inline">
                                            <li class="wishlist">
                                                <a class="icon" data-toggle="tooltip" title=""
                                                onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a class="icon" data-toggle="tooltip" title=""
                                                onclick="compare.add('50');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div> -->

                                </div>

                            </div>
                            <!-- end box info product -->

                        </div>
                    </div>
                </div>
                <!-- Product Tabs -->
                <div class="producttab ">
                    <div class="tabsslider  vertical-tabs col-xs-12">
                        <ul class="nav nav-tabs col-lg-2 col-sm-3">
                            <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                            <li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Reviews (1)</a></li>
                            <!-- <li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Tags</a></li>
                            <li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Custom Tab</a></li> -->
                        </ul>
                        <div class="tab-content col-lg-10 col-sm-9 col-xs-12">
                            <div id="tab-1" class="tab-pane fade active in">
                                <p>{{ $d->part_description }}</p>
                                <h3>
                                    Features:</h3>
                                <p>
                                    Unrivaled display performance</p>
                                <ul>
                                    <li>
                                        30-inch (viewable) active-matrix liquid crystal display provides breathtaking image quality and vivid, richly saturated color.</li>
                                    <li>
                                        Support for 2560-by-1600 pixel resolution for display of high definition still and video imagery.</li>
                                    <li>
                                        Wide-format design for simultaneous display of two full pages of text and graphics.</li>
                                    <li>
                                        Industry standard DVI connector for direct attachment to Mac- and Windows-based desktops and notebooks</li>
                                    <li>
                                        Incredibly wide (170 degree) horizontal and vertical viewing angle for maximum visibility and color performance.</li>
                                    <li>
                                        Lightning-fast pixel response for full-motion digital video playback.</li>
                                    <li>
                                        Support for 16.7 million saturated colors, for use in all graphics-intensive applications.</li>
                                </ul>
                                <p>
                                    Simple setup and operation</p>
                                <ul>
                                    <li>
                                        Single cable with elegant breakout for connection to DVI, USB and FireWire ports</li>
                                    <li>
                                        Built-in two-port USB 2.0 hub for easy connection of desktop peripheral devices.</li>
                                    <li>
                                        Two FireWire 400 ports to support iSight and other desktop peripherals</li>
                                </ul>
                                <p>
                                    Sleek, elegant design</p>
                                <ul>
                                    <li>
                                        Huge virtual workspace, very small footprint.</li>
                                    <li>
                                        Narrow Bezel design to minimize visual impact of using dual displays</li>
                                    <li>
                                        Unique hinge design for effortless adjustment</li>
                                    <li>
                                        Support for VESA mounting solutions (Apple Cinema Display VESA Mount Adapter sold separately)</li>
                                </ul>
                                
                                
                            </div>
                            <div id="tab-review" class="tab-pane fade">
                                <form>
                                    <div id="review">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 50%;"><strong>Super Administrator</strong></td>
                                                    <td class="text-right">29/07/2015</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p>Best this product opencart</p>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="text-right"></div>
                                    </div>
                                    <h2 id="review-title">Write a review</h2>
                                    <div class="contacts-form">
                                        <div class="form-group"> <span class="icon icon-user"></span>
                                            <input type="text" name="name" class="form-control" value="Your Name" onblur="if (this.value == '') {this.value = 'Your Name';}" onfocus="if(this.value == 'Your Name') {this.value = '';}"> 
                                        </div>
                                        <div class="form-group"> <span class="icon icon-bubbles-2"></span>
                                            <textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
                                        </div> 
                                        <span style="font-size: 11px;"><span class="text-danger">Note:</span>                       HTML is not translated!</span>
                                        
                                        <div class="form-group">
                                         <b>Rating</b> <span>Bad</span>&nbsp;
                                        <input type="radio" name="rating" value="1"> &nbsp;
                                        <input type="radio" name="rating"
                                        value="2"> &nbsp;
                                        <input type="radio" name="rating"
                                        value="3"> &nbsp;
                                        <input type="radio" name="rating"
                                        value="4"> &nbsp;
                                        <input type="radio" name="rating"
                                        value="5"> &nbsp;<span>Good</span>
                                        
                                        </div>
                                        <div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a></div>
                                    </div>
                                </form>
                            </div>
                            <div id="tab-4" class="tab-pane fade">
                                <a href="#">Monitor</a>,
                                <a href="#">Apple</a>               
                            </div>
                            <div id="tab-5" class="tab-pane fade">
                                <h3 class="custom-color">Take a trivial example which of us ever undertakes</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur
                                    sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore
                                    magna aliquyam erat, sed diam voluptua.
                                    At vero eos et accusam et justo duo
                                    dolores et ea rebum. Stet clita kasd
                                    gubergren, no sea takimata sanctus est
                                    Lorem ipsum dolor sit amet. Lorem ipsum
                                    dolor sit amet, consetetur sadipscing
                                    elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam
                                    erat, sed diam voluptua. </p>
                                <p>At vero eos et accusam et justo duo dolores
                                    et ea rebum. Stet clita kasd gubergren,
                                    no sea takimata sanctus est Lorem ipsum
                                    dolor sit amet. Lorem ipsum dolor sit
                                    amet, consetetur sadipscing elitr.</p>
                                    <ul class="marker-simple-list two-columns">
                        <li>Nam liberempore</li>
                        <li>Cumsoluta nobisest</li>
                        <li>Eligendptio cumque</li>
                        <li>Nam liberempore</li>
                        <li>Cumsoluta nobisest</li>
                        <li>Eligendptio cumque</li>
                        </ul>
                                <p>Sed diam nonumy eirmod tempor invidunt
                                    ut labore et dolore magna aliquyam erat,
                                    sed diam voluptua. At vero eos et accusam
                                    et justo duo dolores et ea rebum. Stet
                                    clita kasd gubergren, no sea takimata
                                    sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Product Tabs -->
                @endforeach
                <!-- Related Products -->
                <div class="related titleLine products-list grid module  ">
                    <h3 class="modtitle">Related Products  </h3>
            
                    <div class="releate-products yt-content-slider products-list" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                            @foreach($partdata1 as $d)                
                            <div class="product-layout product-grid">
                                <div class="product-item-container item--static">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a onclick="window.location='/Users/Catagories/Products/{{ $d->part_id }}'" target="_self"   >
                                                <img src="{{URL::to('/')}}/part_img/{{ $d->img1 }}" class="img-1 img-responsive" alt="image1">
                                                <img src="{{URL::to('/')}}/part_img/{{ $d->img2 }}" class="img-2 img-responsive" alt="image2">
                                            </a>
                                        </div>
                                        <span class="label-product label-new">New </span>
                                        <!--quickview--> 
                                        <div class="so-quickview">
                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-search"></i><span>Quick view</span></a>
                                        </div>                                                     
                                        <!--end quickview-->
                                    </div>
                                    <div class="right-block">
                                        <div class="button-group cartinfo--static">
                                            
                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button>
                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                <span>Add to cart </span>   
                                            </button>
                                            <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button>                                                    
                                        </div>
                                        <h4><a onclick="window.location='/Users/Catagories/Products/{{ $item->part_id }}'" title="Volup tatem accu" target="_self">{{$d->part_name}}</a></h4>
                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                          <span class="price">Rs.{{$d->price}}</span>
                                        </div>
                                    </div>                                            
                                </div>  
                            </div>

                           <!--  <div class="product-layout product-grid">                                                 
                                <div class="product-item-container item--static">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="DPicanha porkcho">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/demo/product/270/2.jpg" class="img-1 img-responsive" alt="image1">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/demo/product/270/3.jpg" class="img-2 img-responsive" alt="image2">
                                            </a>
                                        </div>
                                        
                                        
                                        <div class="so-quickview">
                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-search"></i><span>Quick view</span></a>
                                        </div>                                                     
                                        
                                    </div>
                                    <div class="right-block">
                                        <div class="button-group cartinfo--static">                                                
                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button>
                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                <span>Add to cart </span>   
                                            </button>
                                            <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button>                                                    
                                        </div>
                                        <h4><a href="product.html" title="Picanha porkcho" target="_self">Picanha porkcho</a></h4>
                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                          <span class="price">$89.00</span>
                                        </div>
                                    </div>
                                </div> -->
                                @endforeach                                        
                            </div>  
                    </div>
                </div>

                <!-- end Related  Products-->
            </div>
       
            </div>
            
            
        </div>
        <!--Middle Part End-->
    </div>
    <!-- //Main Container -->
@endsection



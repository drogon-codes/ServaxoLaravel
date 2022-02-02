@extends('Users.Layout.base')

@section('title')
Shop
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
    <!-- Main Container  -->
    <div class="main-container container">
            <ul class="breadcrumb">
                <li><a href="/Users/Home"><i class="fa fa-home"></i></a></li>
                <li><a href="/Users/Catagories">Catagories</a></li>
            </ul>
            
            <div class="row">

                
                <!--Middle Part Start-->
                <div id="content" class="col-md-9 col-sm-8">
                    <div class="products-category">
                        <h3 class="title-category ">Accessories</h3>
                        <div class="category-desc">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="banners">
                                        <div>
                                            <a  href="#"><img src="{{URL::to('/')}}/Userassets/image/catalog/demo/category/img.jpg" alt="img cate"><br></a>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <!-- Filters -->
                        <div class="product-filter product-filter-top filters-panel">
                            <div class="row">
                                <div class="col-md-5 col-sm-3 col-xs-12 view-mode">
                                    
                                        <div class="list-view">
                                            <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip"  data-original-title="Grid"><i class="fa fa-th"></i></button>
                                            <button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                                        </div>
                            
                                </div>
                                <div class="short-by-show form-inline text-right col-md-7 col-sm-9 col-xs-12">
                                    <form method="post" action="/searchdata">
                                     <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                                    <div class="form-group ">
                                         <div id="sosearchpro" class="sosearchpro-wrapper so-search" >
                                       
                                          <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search..." name="txtsearch">
                                
                                       <button type="submit" class=" btn btn-primary" name="submit_search" style="height: 40px; width: 40px;"><i class="fa fa-search" style="color:red;"></i></button>    
                                    </div>
                                    </div>
                                </form>
                                </div>
                                <!-- <div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
                                    <ul class="pagination">
                                        <li class="active"><span>1</span></li>
                                        <li><a href="">2</a></li><li><a href="">&gt;</a></li>
                                        <li><a href="">&gt;|</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <!-- //end Filters -->
                        <!--changed listings-->
                        <div class="products-list row nopadding-xs so-filter-gird">

                            @foreach($partdata1 as $item)
                            <div class="product-layout col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container item--static">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a onclick="window.location='/Users/Catagories/Products/{{ $item->part_id }}'" target="_self" title="Volup tatem accu">
                                                <img src="{{URL::to('/')}}/part_img/{{ $item->img1 }}" class="img-1 img-responsive" alt="image1">
                                                <img src="{{URL::to('/')}}/part_img/{{ $item->img2 }}" class="img-2 img-responsive" alt="image2">
                                                <!-- <img src="{{URL::to('/')}}/part_img/{{ $item->img3 }}" class="img-2 img-responsive" alt="image2"> -->
                                                <!-- <img src="{{ $item->img3 }}" class="img-2 img-responsive" alt="image3"> -->
                                            </a>
                                        </div>
                                        <!-- <span class="label-product label-new">New</span> -->
                                        <!--quickview--> 
                                        <div class="so-quickview">
                                         <!--  <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-search"></i><span>Quick view</span></a> -->
                                        </div>                                                     
                                        <!--end quickview-->
                                    </div>
                                    <div class="right-block">
                                        @if(Session::has('id'))
                                            <div class="button-group cartinfo--static">
                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 '); window.location='/Users/Cart/{{ $item->part_id }}';">
                                                <span>Add to cart </span> 
                                            </button>
                                        </div>
                                        @else
                                            <div class="button-group cartinfo--static">
                                            <button type="button" class="addToCart" data-toggle="modal" data-target="#myModal1" title="Add to cart" >
                                                <span>Add to cart </span> 
                                            </button>
                                        </div>
                                        @endif  
                                        <h4><a onclick="window.location='/Users/Catagories/Products/{{ $item->part_id }}'" target="_self">{{ $item->part_name }}</a></h4>
                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                          <span class="price">Rs.{{ $item->price }}</span>
                                        </div>
                                        <div class="description item-desc">
                                            <p>{{ $item->part_description }}</p>
                                        </div>
                                        <div class="list-block">
                                            <button class="addToCart btn-button" type="button" title="Add to Cart" onclick="cart.add('101', '1');window.location='/Users/Cart/{{ $item->part_id }}';"><i class="fa fa-shopping-basket"></i>
                                            </button>
                                        </div>
                                    </div>                                            
                                </div>
                            </div>
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
                                       <h2 data-edit="text" style="color: #332d27;">User</h2>
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
                            @endforeach
                        </div>
                        <!--// End Changed listings-->
                        
                        <!-- Filters -->
                        <div class="product-filter product-filter-bottom filters-panel">
                            <div class="row">
                                <div class="col-sm-6 text-left"></div>
                                <div class="col-sm-6 text-right">Showing 1 to 12 of 12 (1 Pages)</div>
                            </div>
                        </div>
                        <!-- //end Filters -->
                        
                    </div>
                    
                </div>
                

                <!--Middle Part End-->

                <!--Right Part Start -->
                <aside class="col-sm-4 col-md-3 content-aside" id="column-left">
                    
                    <div class="module">
      <!--  <h3 class="modtitle">Filter </h3>
       <div class="modcontent ">
            <form class="type_2">

            <div class="table_layout filter-shopby">
                <div class="table_row">
                     - - - - - - - - - - - - - Category filter - - - - - - - - - - - - - - - - 
                    <div class="table_cell" style="z-index: 103;">
                        <legend>Search</legend>
                        <input class="form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">
                    </div .table_cell -->
                    <!-- - - - - - - - - - - - - - End of category filter - - - - - - - - - - - - - - - - -->
                    <!-- - - - - - - - - - - - - - SUB CATEGORY - - - - - - - - - - - - - - - - 
                    <div class="table_cell">
                        <fieldset>
                            <legend>Sub Category</legend>
                            <ul class="checkboxes_list">
                                <li>
                                    <input type="checkbox" checked="" name="category" id="category_1">
                                    <label for="category_1">Smartphone & Tablets</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="category" id="category_2">
                                    <label for="category_2">Electronics</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="category" id="category_3">
                                    <label for="category_3">Shoes</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="category" id="category_4">
                                    <label for="category_4">Watches</label>
                                </li>

                            </ul>

                        </fieldset>

                    </div .table_cell -->
                    <!-- - - - - - - - - - - - - - End SUB CATEGORY - - - - - - - - - - - - - - - - -->
                    <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - 
                    <div class="table_cell">
                        <fieldset>
                            <legend>Manufacturer</legend>
                            <ul class="checkboxes_list">
                                <li>
                                    <input type="checkbox" checked="" name="manufacturer" id="manufacturer_1">
                                    <label for="manufacturer_1">Manufacturer 1</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="manufacturer" id="manufacturer_2">
                                    <label for="manufacturer_2">Manufacturer 2</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="manufacturer" id="manufacturer_3">
                                    <label for="manufacturer_3">Manufacturer 3</label>
                                </li>

                            </ul>

                        </fieldset>

                    </div .table_cell -->
                    <!-- - - - - - - - - - - - - - End manufacturer - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - 
                    <div class="table_cell">
                        <fieldset>
                            <legend>Price</legend>
                            <div class="range">
                                Range :
                                <span class="min_val">$188.73</span> - 
                                <span class="max_val">$335.15</span>
                                <input type="hidden" name="" class="min_value" value="188.73">
                                <input type="hidden" name="" class="max_value" value="335.15">
                            </div>
                            <div id="slider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" ></span>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" ></span>
                            </div>
                        </fieldset>
                    </div> .table_cell -->

                    <!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - 
                    <div class="table_cell">

                        <fieldset>

                            <legend>Color</legend>

                            <div class="row">

                                <div class="col-sm-6">
                                    
                                    <ul class="simple_vertical_list">

                                        <li>
                                            
                                            <input type="checkbox" name="" id="color_btn_1">
                                            <label for="color_btn_1" class="color_btn green">Green</label>

                                        </li>

                                        <li>

                                            <input type="checkbox" name="" id="color_btn_2">
                                            <label for="color_btn_2" class="color_btn yellow">Yellow</label>

                                        </li>

                                        <li>
                                            <input type="checkbox" name="" id="color_btn_3">
                                            <label for="color_btn_3" class="color_btn red">Red</label>

                                        </li>

                                    </ul>

                                </div>

                                <div class="col-sm-6">
                                    
                                    <ul class="simple_vertical_list">

                                        <li>
                                            <input type="checkbox" name="" id="color_btn_4">
                                            <label for="color_btn_4" class="color_btn blue">Blue</label>
                                        </li>

                                        <li>
                                            <input type="checkbox" name="" id="color_btn_5">
                                            <label for="color_btn_5" class="color_btn grey">Grey</label>
                                        </li>

                                        <li>
                                            <input type="checkbox" name="" id="color_btn_6">
                                            <label for="color_btn_6" class="color_btn orange">Orange</label>
                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </fieldset>

                    </div> .table_cell -->

                    <!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - 

                </div> .table_row 
                <footer class="bottom_box">
                    <div class="buttons_row">
                        <button type="submit" class="button_grey button_submit">Search</button>
                        <button type="reset" class="button_grey filter_reset">Reset</button>
                    </div>
                        Back To Top
            <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
        </footer>
            </div> --><!--/ .table_layout -->

            

       <!--  </form>
       </div> -->
       
    </div>

        <div class="module product-simple">
            <h3 class="modtitle">
                <span>Latest products</span>
            </h3>
            <div class="modcontent">
                <!--foreach-->
                <div id="so_extra_slider_1" class="so-extraslider" >
                    <!-- Begin extraslider-inner -->
                    <div class="extraslider-inner">
                        @foreach($partdata2 as $item)
                        <div class="item ">
                            <div class="product-layout item-inner style1 ">
                                <div class="item-image">
                                    <div class="item-img-info">
                                        <a href="#" target="_self">
                                            <img src="{{URL::to('/')}}/part_img/{{ $item->img2 }}" alt="Mandouille short">
                                            </a>
                                    </div>
                                    
                                </div>
                                <div class="item-info">
                                    <div class="item-title">
                                        <a onclick="window.location='/Users/Catagories/Products/{{ $item->part_id }}'" target="_self" style="font-size: 17px;">{{ $item->part_name }}</a>
                                    </div>
                                    <!-- <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div> -->
                                    &nbsp;
                                    <div class="content_price price">
                                        <span class="price-new product-price">$55.00 </span>&nbsp;&nbsp;

                                        <span class="price-old">$76.00 </span>&nbsp;

                                    </div>
                                </div>
                                <!-- End item-info -->
                                <hr>
                                <!-- End item-wrap-inner -->
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>                <!-- End item-wrap -->
        </div>
    </div>
                    <!--End extraslider-inner -->
                </div>
            </div>
        </div>
        <br/>
        <div class="module tags-product">
       <!-- <h3 class="modtitle">Tags</h3> -->
       <!-- <div class="modcontent ">
            <ul class="tags_cloud">
                <li><a href="#" class="button_grey">allergy</a></li>
                <li><a href="#" class="button_grey">baby</a></li>
                <li><a href="#" class="button_grey">beauty</a></li>
                <li><a href="#" class="button_grey">ear care</a></li>
                <li><a href="#" class="button_grey">for her</a></li>
                <li><a href="#" class="button_grey">for him</a></li>
                <li><a href="#" class="button_grey">first aid</a></li>
                <li><a href="#" class="button_grey">gift sets</a></li>
                <li><a href="#" class="button_grey">spa</a></li>
                <li><a href="#" class="button_grey">hair care</a></li>
                <li><a href="#" class="button_grey">herbs</a></li>
                <li><a href="#" class="button_grey">medicine</a></li>
                <li><a href="#" class="button_grey">natural</a></li>
                <li><a href="#" class="button_grey">oral care</a></li>
                <li><a href="#" class="button_grey">pain</a></li>
                <li><a href="#" class="button_grey">pedicure</a></li>
                <li><a href="#" class="button_grey">personal care</a></li>
                <li><a href="#" class="button_grey">probiotics</a></li>
            </ul>
            
       </div>
        -->
    </div>
                </aside>
                <!--Right Part End -->  
            </div>
            <!--Middle Part End-->
        </div>
        <!-- //Main Container -->
@endsection



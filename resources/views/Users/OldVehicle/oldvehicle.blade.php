@extends('Users.Layout.base')

@section('title')
Old Vehicle
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
            view = 'list';
        }
        if(view) display(view);
    //--></script>
@endsection

@section('main-section')
    <!-- Main Container  -->
    <div class="main-container container">
            <ul class="breadcrumb">
                <li><a href="/Users/Home"><i class="fa fa-home"></i></a></li>
                           <li><a href="/Users/OldVehicle">Buy/Sell Used Vehicle</a></li>

            </ul>
            
            <div class="row">

                
                <!--Middle Part Start-->
                <div id="content" class="col-md-12 col-sm-8">
                    <div class="products-category">
                        <h2 class="title-category">Buy Used Car </h2>
                        <!-- <div class="category-desc">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="banners">
                                        <div>
                                            <a  href="#"><img src="{{URL::to('/')}}/Userassets/image/catalog/demo/category/img.jpg" alt="img cate"><br></a>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div> -->
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
                                    <!-- <div class="form-group short-by">
                                        <label class="control-label" for="input-sort">Sort By:</label>
                                        <select id="input-sort" class="form-control"
                                        onchange="location = this.value;">
                                            <option value="" selected="selected">Default</option>
                                            <option value="">Name (A - Z)</option>
                                            <option value="">Name (Z - A)</option>
                                            <option value="">Price (Low &gt; High)</option>
                                            <option value="">Price (High &gt; Low)</option>
                                            <option value="">Rating (Highest)</option>
                                            <option value="">Rating (Lowest)</option>
                                            <option value="">Model (A - Z)</option>
                                            <option value="">Model (Z - A)</option>
                                        </select>
                                    </div> -->

                                    <!-- <div class="form-group">
                                        <label class="control-label" for="input-limit">Show:</label>
                                        <select id="input-limit" class="form-control" onchange="location = this.value;">
                                            <option value="" selected="selected">15</option>
                                            <option value="">25</option>
                                            <option value="">50</option>
                                            <option value="">75</option>
                                            <option value="">100</option>
                                        </select>
                                    </div> -->
                     @if(Session::has('id'))
                                    <div class="buttons_row">
                   <a href="/Users/OldVehicle/oldvehicleform"> <button type="button" class="button_grey button_submit btn-lg">Sell Used Car</button></a>
                    @endif
                    
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

                            @foreach($oldvehicle as $item)

                            <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container item--static">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a onclick="window.location='/Users/OldVehicle/oldvehicledetail/{{ $item->o_id }}'" target="_self" title="">
                                                <img src="{{URL::to('/')}}/oldvehicle_img/{{ $item->img1 }}" class="img-1 img-responsive" alt="image1" >
                                                <img src="{{URL::to('/')}}/oldvehicle_img/{{ $item->img2 }}" class="img-2 img-responsive" alt="image2">
                                                <!-- <img src="{{URL::to('/')}}/oldvehicle_img/{{ $item->img3 }}" class="img-2 img-responsive" alt="image2"> -->
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

                                        <div class="button-group cartinfo--static">
                                            
                                            <button type="button" class="addToCart" title="" onclick="window.location='/Users/OldVehicle/oldvehicledetail/{{ $item->o_id }}'">
                                                <span>Get  Information </span>   
                                            </button>
                                                                                               
                                        </div>
                                       
                                        <h4><a onclick="window.location='/Users/OldVehicle/oldvehicledetail/{{ $item->o_id }}'" title="{{ $item->model_name }}" target="_self">{{ $item->model_name }} - {{$item->company_name}}</a></h4>
                                        <h4><a onclick="window.location='/Users/OldVehicle/oldvehicledetail/{{ $item->o_id }}'" title="{{ $item->year }}" target="_self">{{ $item->year }}</a></h4>
                                         <h4><a onclick="window.location='/Users/OldVehicle/oldvehicledetail/{{ $item->o_id }}'" title="{{ $item->vehicle_numbers }}" target="_self">{{ $item->vehicle_numbers }}</a></h4>
                                          <h4><a onclick="window.location='/Users/OldVehicle/oldvehicledetail/{{ $item->o_id }}'" title="{{ $item->city_name }}" target="_self">{{ $item->city_name }}</a></h4>
                                          
                                         

                                        <div class="price">
                                          <span class="price">Rs.{{ $item->price }}</span>
                                        </div>
                                        <div class="description item-desc">
                                            <p></p>
                                        </div>
                                        <div class="list-block">
                                            <button class="addToCart btn-button" type="button" title="Get Details" onclick="window.location='/Users/OldVehicle/oldvehicledetail/{{ $item->o_id }}'">Get  Information
                                            </button>
                                            <!-- <button class="wishlist btn-button" type="button" title="Add to Wish List" onclick="wishlist.add('101');"><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="compare btn-button" type="button" title="Compare this Product" onclick="compare.add('101');"><i class="fa fa-refresh"></i>
                                            </button>
                                             --><!--quickview-->                                                      
                                            <!-- <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"> </i></a>                                                        
                                            end quickview-->
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



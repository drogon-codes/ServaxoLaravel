    @extends('Users.Layout.base')

@section('title')
Old Vehicle Details
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
    <!-- Main Container  -->
     <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="/Users/Home"><i class="fa fa-home"></i></a></li>
            <li><a href="/Users/OldVehicle">Old Vehicle</a></li>
            <li><a href="/Users/OldVehicle/">Old Vehicle Detail</a></li>

            <!-- <li><a href="#">Chicken swinesha</a></li> -->
            
        </ul>
        <div class="row">
    
            @foreach($olddata as $item)
            <div id="content" class="col-md-9 col-sm-8">
                
                <div class="product-view row">
                    <div class="left-content-product">
                  <div class="content-product-left class-honizol col-md-8 col-sm-12 col-xs-12">
                            <div class="large-image">
                                <img  itemprop="image" class="product-image-zoom" src="{{URL::to('/')}}/oldvehicle_img/{{ $item->img1 }}" title="{{$item->model_name}}" alt="Chicken swinesha">
                            </div>
                            <a class="thumb-video pull-left" href="{{$item->video_url}}"><i class="fa fa-youtube-play"></i></a>
                            
                            <div id="thumb-slider" class="yt-content-slider full_slider owl-drag" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column00="4" data-items_column0="4" data-items_column1="3" data-items_column2="4"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                <a data-index="0" class="img thumbnail " data-image="{{URL::to('/')}}/oldvehicle_img/{{ $item->img1 }}" title="">
                                    <img src="{{URL::to('/')}}/oldvehicle_img/{{ $item->img1 }}" title="{{$item->model_name}}" alt="Chicken swinesha">
                                </a>
                                <a data-index="1" class="img thumbnail " data-image="{{URL::to('/')}}/oldvehicle_img/{{ $item->img2 }}" title="Chicken swinesha">
                                    <img src="{{URL::to('/')}}/oldvehicle_img/{{ $item->img2 }}" title="{{$item->model_name}}" alt="Chicken swinesha">
                                </a>
                                 <a data-index="2" class="img thumbnail " data-image="{{URL::to('/')}}/oldvehicle_img/{{ $item->img3 }}" title="Chicken swinesha">
                                    <img src="{{URL::to('/')}}/oldvehicle_img/{{ $item->img3 }}" title="{{$item->model_name}}" alt="Chicken swinesha">
                                </a>
                            </div>
                            
                        </div>

                        <div class="content-product-right col-md-4 col-sm-12 col-xs-12">
                            <div class="title-product">
                                <br/>
                                <h1>{{$item->model_name}}</h1>
                            </div>
                            <!-- Review ---->
                            <div class="box-review form-group">
                                <!-- <div class="ratings">
                                    <div class="rating-box">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    </div>
                                </div> -->

                              <!--   <a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a>  | 
                                <a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a> -->
                            </div>

                           <div class="product-label form-group">
                                    <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                        <span class="price-new" itemprop="price">Rs.{{ $item->price }}</span>
                                        <!-- <span class="price-old">$122.00</span> -->
                                    </div>
                                    <!-- <div class="stock"><span>Availability:</span> <span class="status-stock">In Stock</span></div> -->
                                </div>
                            <h3>Vehicle Details</h3>
                            <div class="product-box-desc">
                                    <div class="inner-box-desc">
                                        <div class="brand"><span>Model:&nbsp;&nbsp;&nbsp;  </span>{{$item->model_name}} - {{$item->company_name}}     </div>
                                         <div class="model"><span>Vehicle Number :&nbsp;&nbsp;</span>&nbsp;{{$item->vehicle_numbers}}</div>
                                          <div class="model"><span>Year:&nbsp;&nbsp;</span>&nbsp;{{$item->year}}</div>
                                           <div class="model"><span>Kilometer Driven :&nbsp;&nbsp;</span>&nbsp;{{$item->km}}</div>

                                        </div>
                            </div>
                            <br/>
                            <h3>Seller Details</h3>
                       
                                        <div class="product-box-desc">
                                    <div class="inner-box-desc">
                                         <div class="model"><span>Owner Name :&nbsp;&nbsp;</span>&nbsp;{{$item->name}}</div>
                                            <div class="model"><span>Address :&nbsp;&nbsp;</span>&nbsp;{{$item->addressline1}}&nbsp;&nbsp;{{$item->addressline2}}</div>
                                            <div class="model"><span>Landmark :&nbsp;&nbsp;</span>&nbsp;{{$item->landmark}}</div>
                                            <div class="model"><span>Pincode :</span>&nbsp;{{$item->pincode}}</div>
                                            <!-- <div class="model"><span></span>&nbsp;</div> -->
                                        <div class="model"><span>Contact No:&nbsp;&nbsp;</span>&nbsp;{{$item->contact}}</div>
                                    </div>
                                </div>



                            <div id="product">
                               
                                
                               

                                <div class="form-group box-info-product">
                                    
                                   <!--  <div class="cart">
                                        <input type="button" data-toggle="tooltip" title="" value="Details" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg"  data-original-title="Get Owner Information">
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
                            
                        </ul>
                        <div class="tab-content col-lg-10 col-sm-9 col-xs-12">
                            <div id="tab-1" class="tab-pane fade active in">
                                <p>{{ $item->About_vehicle }}</p>
                            </div>
                            <div id="tab-review" class="tab-pane fade">
                                <form>
                                    <div id="review">
                                        
                                        <div class="text-right"></div>
                                    </div>
                                    
                                </form>
                            </div>
                            
                            <div id="tab-5" class="tab-pane fade">
                                <!--  -->
                        </div>
                    </div>
                </div>
                <!-- //Product Tabs -->
 @endforeach
            </div>
        </div>
    </div>
</div>


    
@endsection



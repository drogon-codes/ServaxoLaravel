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
                                    <div class="form-group short-by">
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
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-limit">Show:</label>
                                        <select id="input-limit" class="form-control" onchange="location = this.value;">
                                            <option value="" selected="selected">15</option>
                                            <option value="">25</option>
                                            <option value="">50</option>
                                            <option value="">75</option>
                                            <option value="">100</option>
                                        </select>
                                    </div>
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

                            @foreach($hpartdata as $item)
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
                                        <div class="button-group cartinfo--static">
                                            
                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                <span>Add to cart </span>   
                                            </button>
                                                                                               
                                        </div>
                                        <h4><a onclick="window.location='/Users/Catagories/Products/{{ $item->part_id }}'" title="Volup tatem accu" target="_self">{{ $item->part_name }}</a></h4>
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
                                            <button class="addToCart btn-button" type="button" title="Add to Cart" onclick="cart.add('101', '1');"><i class="fa fa-shopping-basket"></i>
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

        <div class="module product-simple">
            <h3 class="modtitle">
                <span>Latest products</span>
            </h3>
            <div class="modcontent">
                <div id="so_extra_slider_1" class="so-extraslider" >
                    <!-- Begin extraslider-inner -->
                    <div class="extraslider-inner">
                        @foreach($hpartdata as $p)
                        <div class="item ">
                            <div class="product-layout item-inner style1 ">
                                <div class="item-image">
                                    <div class="item-img-info">
                                        <a onclick="window.location='/Users/Catagories/Products/{{ $p->part_id }}'" target="_self" title="Volup tatem accu">
                                                <img src="{{URL::to('/')}}/part_img/{{ $p->img1 }}" class="img-1 img-responsive" alt="image1">
                                               <!--  <img src="{{URL::to('/')}}/part_img/{{ $p->img2 }}" class="img-2 img-responsive" alt="image2"> -->
                                    </div>
                                    
                                </div>
                                <div class="item-info">
                                    <div class="item-title">
                                        <a href="#" target="_self" title="Mandouille short"> {{$p->part_name}}</a>
                                    </div>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <div class="content_price price">
                                        <span class="price-new product-price">Rs.{{ $p->price}} </span>&nbsp;&nbsp;

                                        <!-- <span class="price-old">$76.00 </span>&nbsp; -->

                                    </div>
                                </div>
                                <!-- End item-info -->
                                <!-- End item-wrap-inner -->
                            </div>
                            <!-- End item-wrap -->
                            <!-- End item-wrap -->
                        </div>
                        @endforeach
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



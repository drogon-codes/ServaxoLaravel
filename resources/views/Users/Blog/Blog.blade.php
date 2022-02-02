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
@endsection

@section('main-section')
 <!-- Main Container  -->
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="/user/Home"><i class="fa fa-home"></i></a></li>
            <li><a href="/user/Blog">News</a></li>
            
        </ul>
        
        <div class="row">
            <!--Left Part Start -->
            <aside class="col-md-3 col-sm-4 col-xs-12 content-aside left_column " id="column-left">
                <div class="module blog-category titleLine">
                    <h3 class="modtitle">News Category</h3>
                    <div class="modcontent">
                        <ul class="list-group ">
                            <li class="list-group-item"> <a href="blog-page.html"class="group-item active">Our News</a></li>
                            <li class="list-group-item"><a href="blog-page.html" class="group-item">Demo Category 2</a></li>
                            <li class="list-group-item"><a href="blog-page.html" class="group-item">Demo Category 3</a></li>
                            <li class="list-group-item"><a href="blog-page.html" class="group-item">Demo Category 4</a></li>
                            <li class="list-group-item"><a href="blog-page.html" class="group-item">Demo Category 5</a></li>
                        </ul>
                        
                    </div>
                </div>

                <div class="module product-simple">
                    <h3 class="modtitle">
                        <span>Latest products</span>
                    </h3>
                    <div class="modcontent">
                        <div class="so-extraslider" >
                            <!-- Begin extraslider-inner -->
                            <div class="yt-content-slider extraslider-inner">
                                <div class="item ">
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="#" target="_self" title="Mandouille short ">
                                                    <img src="{{URL::to('/')}}/Userassets/image/catalog/demo/product/80/1.jpg" alt="Mandouille short">
                                                    </a>
                                            </div>
                                            
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" title="Mandouille short">Mandouille short </a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price">$55.00 </span>&nbsp;&nbsp;

                                                <span class="price-old">$76.00 </span>&nbsp;

                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="#" target="_self" title="Xancetta bresao ">
                                                        <img src="{{URL::to('/')}}/Userassets/image/catalog/demo/product/80/2.jpg" alt="Xancetta bresao">
                                                        </a>
                                            </div>
                                            
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" title="Xancetta bresao">
                                                            Xancetta bresao 
                                                        </a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price">$80.00 </span>&nbsp;&nbsp;

                                                <span class="price-old">$89.00 </span>&nbsp;



                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="#" target="_self" title="Sausage cowbee ">
                                                            <img src="image/catalog/demo/product/80/3.jpg" alt="Sausage cowbee">
                                                            </a>
                                            </div>
                                           
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" title="Sausage cowbee">
                                                            Sausage cowbee 
                                                        </a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                           
                                            <div class="content_price price">
                                                <span class="price product-price">
                                                                $66.00 
                                                            </span>
                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="#" target="_self" title="Chicken swinesha ">
                                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/demo/product/80/4.jpg" alt="Chicken swinesha">
                                                                </a>
                                            </div>
                                           
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" title="Chicken swinesha">
                                                            Chicken swinesha 
                                                        </a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                </span>
                                                <span class="fa fa-stack">
                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                </span>
                                                <span class="fa fa-stack">
                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                </span>
                                                <span class="fa fa-stack">
                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                </span>
                                                <span class="fa fa-stack">
                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                </span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price">$45.00 </span>&nbsp;&nbsp;

                                                <span class="price-old">$56.00 </span>&nbsp;



                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                </div>
                            </div>
                            <!--End extraslider-inner -->
                        </div>
                    </div>
                </div>
                
                <div class="module banner-left hidden-xs ">
                    <div class="banner-sidebar banners">
                      <div>
                        <a title="Banner Image" href="#"> 
                          <img src="{{URL::to('/')}}/Userassets/image/catalog/banners/banner-sidebar.jpg" alt="Banner Image"> 
                        </a>
                      </div>
                    </div>
                </div>  
            </aside>
            <!--Left Part End -->
            
            <!--Middle Part Start-->
            <div id="content" class="col-md-9 col-sm-8">
                <div class="blog-header">
                    <h3>Our News</h3>
                    
                </div>
                <div class="blog-category clearfix">
              
                    <!-- <div class="product-filter product-filter-top filters-panel hidden-sm hidden-xs">
                        <div class="row">
                            <div class="col-sm-4 view-mode">
                                <div class="list-view ">
                                    <button type="button" id="grid-view" class="btn btn-view hidden-sm hidden-xs">1</button>
                                    <button type="button" id="grid-view-2" class="btn btn-view ">2</button>
                                    <button type="button" id="grid-view-3" class="btn btn-view hidden-sm hidden-xs ">3</button>
                                    <button type="button" id="grid-view-4" class="btn btn-view hidden-sm hidden-xs">4</button>
                                    <button type="button" id="list-view" class="btn btn-view list "><i class="fa fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="blog-listitem row">
                        <div class="blog-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item-inner clearfix">
                                <div class="itemBlogImg clearfix">
                                    <div class="article-image">
                                        <div>
                                            <a class="popup-gallery" href="{{URL::to('/')}}/Userassets/image/catalog/blog/4.jpg">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/blog/4.jpg" alt="Duis autem vel eum irure sed diam nonumy" />
                                            </a>
                                        </div>
                                        <div class="article-date">
                                            <div class="date">  <span class="article-date">
                                                <b>04</b> Dec
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="itemBlogContent clearfix ">
                                    <div class="blog-content">
                                        <div class="article-title font-title">
                                            <h4><a href="/Users/Blogsingle">Duis autem vel eum irure sed diam nonumy</a></h4>
                                        </div>
                                        <div class="blog-meta"> <span class="author"><i class="fa fa-user"></i><span>Post by </span>Wash upito</span>
                                        </div>
                                        <p class="article-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lore...</p>
                                        <div class="readmore">  <a class="btn-readmore font-title" href="/Users/Blogsingle"><i class="fa fa-caret-right"></i>Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item-inner clearfix">
                                <div class="itemBlogImg clearfix">
                                    <div class="article-image">
                                        <div>
                                            <a class="popup-gallery" href="{{URL::to('/')}}/Userassets/image/catalog/blog/2.jpg">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/blog/2.jpg" alt="Biten demons lector in henderit in vulp" />
                                            </a>
                                        </div>
                                        <div class="article-date">
                                            <div class="date">  <span class="article-date">
                                                                                                                                               <b>04</b> Dec
                                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="itemBlogContent clearfix ">
                                    <div class="blog-content">
                                        <div class="article-title font-title">
                                            <h4><a href="/Users/Blogsingle">Biten demons lector in henderit in vulp</a></h4>
                                        </div>
                                        <div class="blog-meta"> <span class="author"><i class="fa fa-user"></i><span>Post by </span>Wash upito</span>
                                        </div>
                                        <p class="article-description">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, c...</p>
                                        <div class="readmore">  <a class="btn-readmore font-title" href="/Users/Blogsingle"><i class="fa fa-caret-right"></i>Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item-inner clearfix">
                                <div class="itemBlogImg clearfix">
                                    <div class="article-image">
                                        <div>
                                            <a class="popup-gallery" href="{{URL::to('/')}}/Userassets/image/catalog/blog/7.jpg">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/blog/7.jpg" alt="Duis autem vel eum tempor invidunt ut labore et " />
                                            </a>
                                        </div>
                                        <div class="article-date">
                                            <div class="date">  <span class="article-date">
                                                                                                                                               <b>15</b> Nov
                                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="itemBlogContent clearfix ">
                                    <div class="blog-content">
                                        <div class="article-title font-title">
                                            <h4><a href="/Users/Blogsingle">Duis autem vel eum tempor invidunt ut labore et </a></h4>
                                        </div>
                                        <div class="blog-meta"> <span class="author"><i class="fa fa-user"></i><span>Post by </span>Wash upito</span>   <span class="comment_count"><i class="fa fa-comment-o"></i><a href="#">0 Comments</a></span>
                                        </div>
                                        <p class="article-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lore...</p>
                                        <div class="readmore">  <a class="btn-readmore font-title" href="/Users/Blogsingle"><i class="fa fa-caret-right"></i>Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item-inner clearfix">
                                <div class="itemBlogImg clearfix">
                                    <div class="article-image">
                                        <div>
                                            <a class="popup-gallery" href="{{URL::to('/')}}/Userassets/image/catalog/blog/6.jpg">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/blog/6.jpg" alt="enim ad minim veniam  justo duo dolores et ea" />
                                            </a>
                                        </div>
                                        <div class="article-date">
                                            <div class="date">  <span class="article-date">
                                                                                                                                               <b>15</b> Nov
                                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="itemBlogContent clearfix ">
                                    <div class="blog-content">
                                        <div class="article-title font-title">
                                            <h4><a href="/Users/Blogsingle">Enim ad minim veniam justo</a></h4>
                                        </div>
                                        <div class="blog-meta"> <span class="author"><i class="fa fa-user"></i><span>Post by </span>Wash upito</span>   <span class="comment_count"><i class="fa fa-comment-o"></i><a href="#">1 Comment</a></span>
                                        </div>
                                        <p class="article-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lore...</p>
                                        <div class="readmore">  <a class="btn-readmore font-title" href="/Users/Blogsingle"><i class="fa fa-caret-right"></i>Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item-inner clearfix">
                                <div class="itemBlogImg clearfix">
                                    <div class="article-image">
                                        <div>
                                            <a class="popup-gallery" href="{{URL::to('/')}}/Userassets/image/catalog/blog/5.jpg">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/blog/5.jpg" alt="Kire tuma feugiat " />
                                            </a>
                                        </div>
                                        <div class="article-date">
                                            <div class="date">  <span class="article-date">
                                                                                                                                               <b>15</b> Nov
                                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="itemBlogContent clearfix ">
                                    <div class="blog-content">
                                        <div class="article-title font-title">
                                            <h4><a href="/Users/Blogsingle">Kire tuma feugiat </a></h4>
                                        </div>
                                        <div class="blog-meta"> <span class="author"><i class="fa fa-user"></i><span>Post by </span>Wash upito</span>   <span class="comment_count"><i class="fa fa-comment-o"></i><a href="#">0 Comments</a></span>
                                        </div>
                                        <p class="article-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lore...</p>
                                        <div class="readmore">  <a class="btn-readmore font-title" href="/Users/Blogsingle"><i class="fa fa-caret-right"></i>Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item-inner clearfix">
                                <div class="itemBlogImg clearfix">
                                    <div class="article-image">
                                        <div>
                                            <a class="popup-gallery" href="{{URL::to('/')}}/Userassets/image/catalog/blog/3.jpg">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/blog/3.jpg" alt="Lorem ipsum dolor sit amet" />
                                            </a>
                                        </div>
                                        <div class="article-date">
                                            <div class="date">  <span class="article-date">
                                                                                                                                               <b>15</b> Nov
                                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="itemBlogContent clearfix ">
                                    <div class="blog-content">
                                        <div class="article-title font-title">
                                            <h4><a href="/Users/Blogsingle">Lorem ipsum dolor sit amet</a></h4>
                                        </div>
                                        <div class="blog-meta"> <span class="author"><i class="fa fa-user"></i><span>Post by </span>Wash upito</span>   <span class="comment_count"><i class="fa fa-comment-o"></i><a href="#">0 Comments</a></span>
                                        </div>
                                        <p class="article-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lore...</p>
                                        <div class="readmore">  <a class="btn-readmore font-title" href="/Users/Blogsingle"><i class="fa fa-caret-right"></i>Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item-inner clearfix">
                                <div class="itemBlogImg clearfix">
                                    <div class="article-image">
                                        <div>
                                            <a class="popup-gallery" href="{{URL::to('/')}}/Userassets/image/catalog/blog/10.jpg">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/blog/10.jpg" alt="Commodo laoreet semper tincidun   sit" />
                                            </a>
                                        </div>
                                        <div class="article-date">
                                            <div class="date">  <span class="article-date">
                                                                                                                                               <b>15</b> Nov
                                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="itemBlogContent clearfix ">
                                    <div class="blog-content">
                                        <div class="article-title font-title">
                                            <h4><a href="/Users/Blogsingle">Commodo laoreet semper tincidun   sit</a></h4>
                                        </div>
                                        <div class="blog-meta"> <span class="author"><i class="fa fa-user"></i><span>Post by </span>Wash upito</span>
                                        </div>
                                        <p class="article-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lore...</p>
                                        <div class="readmore">  <a class="btn-readmore font-title" href="/Users/Blogsingle"><i class="fa fa-caret-right"></i>Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item-inner clearfix">
                                <div class="itemBlogImg clearfix">
                                    <div class="article-image">
                                        <div>
                                            <a class="popup-gallery" href="{{URL::to('/')}}/Userassets/image/catalog/blog/1.jpg">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/blog/1.jpg" alt="Kire tuma demons vel eum iriure dolor" />
                                            </a>
                                        </div>
                                        <div class="article-date">
                                            <div class="date">  <span class="article-date">
                                                                                                                                               <b>15</b> Nov
                                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="itemBlogContent clearfix ">
                                    <div class="blog-content">
                                        <div class="article-title font-title">
                                            <h4><a href="/Users/Blogsingle">Kire tuma demons vel eum iriure dolor</a></h4>
                                        </div>
                                        <div class="blog-meta"> <span class="author"><i class="fa fa-user"></i><span>Post by </span>Wash upito</span>
                                        </div>
                                        <p class="article-description">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, c...</p>
                                        <div class="readmore">  <a class="btn-readmore font-title" href="/Users/Blogsingle"><i class="fa fa-caret-right"></i>Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-filter product-filter-bottom filters-panel clearfix">
                        <div class="row">
                            <div class="col-md-12">
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Middle Part End-->
    </div>
    <!-- //Main Container -->
@endsection
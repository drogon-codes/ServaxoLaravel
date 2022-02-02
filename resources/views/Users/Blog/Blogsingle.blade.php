@extends('Users.Layout.base')

@section('title')
News Detail
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
            <li><a href="#">Kire tuma demonstraverunt lector</a></li>
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
                                                            <img src="{{URL::to('/')}}/Userassets/image/catalog/demo/product/80/3.jpg" alt="Sausage cowbee">
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
                <div class="article-info">
                    <div class="blog-header">
                        <h3>Kire tuma demonstraverunt lector</h3>
                    </div>
                    <div class="article-sub-title">
                        <span class="article-author">Post by: <a href="#"> Admin</a></span>
                        <span class="article-date">Created Date: Tue, Feb 16, 2016</span>
                        <span class="article-comment">0  Comments</span>
                    </div>
                    <div class="form-group">
                        <a href="{{URL::to('/')}}/Userassets/image/catalog/blog/1.jpg" class="image-popup"><img src="{{URL::to('/')}}/Userassets/image/catalog/blog/1.jpg" alt="Kire tuma demonstraverunt lector"></a>
                    </div>
                    
                    <div class="article-description">
                        <p>Morbi tempus, non ullamcorper euismod, erat odio suscipit purus, nec ornare lacus turpis ac purus. Mauris cursus in mi vel dignissim. Morbi mollis elit ipsum, a feugiat lectus gravida non. Aenean molestie justo sed aliquam euismod. Maecenas laoreet bibendum laoreet. Morbi tempor massa sit amet purus lobortis, non porta tellus dignissim. </p>
                        <p>Proin dictum justo a nisl pellentesque egestas.Nulla commodo euismod nisi ac bibendum. Mauris in pellentesque tellus, in cursus magna. Sed volutpat dui bibendum mi molestie, at volutpat nunc dictum. Fusce sagittis massa id eros scelerisque, eget accumsan magna lacinia. Nullam posuere neque at neque dictum interdum</p>
                        <p> Mauris cursus in mi vel dignissim. Morbi mollis elit ipsum, a feugiat lectus gravida non. Aenean molestie justo sed aliquam euismod. Maecenas laoreet bibendum laoreet. Morbi tempor massa sit amet purus lobortis, non porta tellus dignissim. Proin dictum justo a nisl pellentesque egestas.Nulla commodo euismod nisi ac bibendum. Mauris in pellentesque tellus, in cursus magna. Sed volutpat dui bibendum mi molestie, at volutpat nunc dictum. Fusce sagittis massa id eros scelerisque, eget accumsan magna lacinia. Nullam posuere neque at neque dictum interdum</p>
                    </div>
                    
                    <div class="panel panel-default related-comment">
                        <div class="panel-body">
                            <div class="form-group">
                                <div id="comments" class="blog-comment-info">
                                    
                                    <h3 id="review-title">Leave your comment  </h3>
                                    <input type="hidden" name="blog_article_reply_id" value="0" id="blog-reply-id">
                                    <div class="comment-left contacts-form row">
                                        <div class="col-md-6">
                                            <b>Your Name:</b>
                                            <br>
                                            <input type="text" name="name" value="" class="form-control">
                                            <br>
                                        </div>
                                        <div class="col-md-12">
                                            <b>Your Comment:</b>
                                            <br>
                                            <textarea rows="6" cols="50" name="text" class="form-control"></textarea>
                                            <span style="font-size: 11px;">Note: HTML is not translated!</span>
                                            <br>
                                            <br>
                                        </div>
                                        <div class="col-md-4">
                                            <b>Enter the code in the box below:</b>
                                            <br>
                                            <input type="text" name="captcha" style=""
                                            value="" class="form-control">
                                            <br>
                                            <div class="form-group">
                                                <img src="{{URL::to('/')}}/Userassets/image/demo/content/captcha.jpg" alt=""
                                                id="captcha">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="text-left"><a id="button-comment"
                                        class="btn buttonGray"><span>Submit</span></a>
                                    </div>
                                </div>
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
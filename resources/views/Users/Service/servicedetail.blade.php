@extends('Users.Layout.base')

@section('title')
Service Detail
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
            <li><a href="/Users/Home"><i class="fa fa-home"></i></a></li>
            <li><a href="/Users/Service/servicedisplay">Services</a></li>
            @foreach($servicedata as $item)
            <li><a href="#">{{ $item->service_name }}</a></li>
            @endforeach
        </ul>
        
        <div class="row">
            <!--Left Part Start -->
            <aside class="col-md-3 col-sm-4 col-xs-12 content-aside left_column " id="column-left">

                <div class="module product-simple">
                    <h3 class="modtitle">
                        <span>Latest products</span>
                    </h3>
                    <div class="modcontent">
                        <div class="so-extraslider" >
                            <!-- Begin extraslider-inner -->
                            <div class="yt-content-slider extraslider-inner">
                                @foreach($partdata2 as $item)
                                <a><div class="item" onclick="window.location='/Users/Catagories/Products/{{ $item->part_id }}';">
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="#" target="_self" title="{{ $item->part_name }}">
                                                    <img src="{{URL::to('/')}}/part_img/{{ $item->img1}}" alt="{{ $item->part_name }}">
                                                    </a>
                                            </div>
                                            
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" style="font-size: 17px;" title="{{ $item->part_name }}">{{ $item->part_name }}</a>
                                            </div>
                                            <br>
                                            <!-- <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div> -->
                                            <div class="content_price price">
                                                <span class="price-new product-price">Rs.{{ $item->price }} </span>&nbsp;
                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                  </div>
                              </a>
                                  <hr>
                                  @endforeach
                            </div>
                            <!--End extraslider-inner -->
                        </div>
                    </div>
                </div>
            </aside>
            <!--Left Part End -->
            
            <!--Middle Part Start-->
            <div id="content" class="col-md-9 col-sm-8">
                @foreach($servicedata as $item)

                <div class="article-info">
                    <div class="blog-header">
                        <h3>{{ $item->service_name}}</h3>
                    </div>
                    <div class="article-sub-title">
                        <span class="article-author" style="font-size: 18px;">For vehicle type:&nbsp;<a href="#" style="font-size: 18px;"><b>
                            @if(($item->type)=="car")
                                <i class="fa fa-car card-title" aria-hidden="true" style="font-size: 25px;"></i>
                            @elseif(($item->type)=="bike")
                                <i class="fa fa-motorcycle card-title" aria-hidden="true" style="font-size: 25px;"></i>
                            @endif
                        </b></a></span>
                    </div>
                    <div class="form-group">
                        <a href="{{URL::to('/')}}/Userassets/image/catalog/blog/1.jpg" class="image-popup"><img src="{{URL::to('/')}}/serv_img/{{ $item->service_img}}" alt="{{ $item->service_name }}" style="height: 450px; width: 950px;"></a>
                    </div>
                    
                    <div class="article-description">
                        <p style="font-size: 18px;">{{ $item->service_description }}</p>
                    </div>
                    <div class="panel panel-default related-comment">
                        <div class="panel-body">
                            <form>
                            <div class="form-group">
                                <button class="btn btn-primary" style="float: left;">Buy</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!--Middle Part End-->
    </div>
    <!-- //Main Container -->
    @endsection

    
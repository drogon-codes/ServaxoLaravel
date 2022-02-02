@extends('Users.Layout.base')

@section('title')
Insurance Company Details
@endsection

@section('css-section')
    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/png" href="{{URL::to('/')}}/Userassets/ico/favicon-16x16.png"/>
  

        <!-- Bootstrap Css -->
        
       

        <!-- Responsive datatable examples -->
       
        <link href="{{URL::to('/')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
      
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


@section('main-section')       
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="/Users/Home"><i class="fa fa-home"></i></a></li>
            <!-- <li><a href="#">Home</a></li> -->
            <li><a href="/Users/InsuranceCompany">Insurance company</a></li>
        </ul>
        
        <div class="row">

            <!--Middle Part Start-->
            @foreach($plandata as $d)
            <div id="content" class="col-md-9 col-sm-8">
                
                <div class="product-view">
                    <div class="left-content-product">
                        <div class="row">
                            <div class="content-product-left col-md-6 col-sm-12 col-xs-12">
                               <div class="large-image  vertical">
                                    <img itemprop="image" class="product-image-zoom" src="{{URL::to('/')}}/inscomp_img/{{ $d->logo }}" data-zoom-image="{{URL::to('/')}}/inscomp_img/{{ $d->logo }}" title="Chicken swinesha" alt="Chicken swinesha">
                                </div>
                            </div>

                            <div class="content-product-right col-md-6 col-sm-12 col-xs-12">
                                <div class="title-product">
                                   <a href="#"> <h1>{{ $d->plan_title }}</h1></a>
                                </div>
                                <div class="product-label form-group">
                                </div>

                                <div class="product-box-desc">
                                    <div class="inner-box-desc">
                                        <div class="price-tax"><span>Plan Price :</span>{{ $d->price }}</div>
                                        <div class="reward"><span>Validity :</span> {{ $d->validity }}</div>
                                        <div class="brand"><span>Email:</span>{{ $d->email }}</div>

                                     <div class="brand"><span> PDF :</span><a href="/download/{{$d->pdf_file}}"><span  style="font-size: 20px; color:red;"> <i class="bx bx-download"></i>&nbsp;Download</span></div></a>
                                       
                                        <div class="model"><span>Description :</span> {{ $d->plan_desc }} </div>
                                        
                                        




                                    </div>
                                </div>

                               
                                </div>
                                <!-- end box info product -->

                            </div>
                        </div>
                    </div>
                    
                
                </div>
                @endforeach
            </div>
           
    </div>
        
</div>
        

    
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



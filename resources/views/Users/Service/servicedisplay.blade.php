@extends('Users.Layout.base')

@section('title')
Services 
@endsection

@section('css-section')
    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/png" href="{{URL::to('/')}}/Userassets/ico/favicon-16x16.png"/>
    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="{{URL::to('/')}}/Userassets/css/bootstrap/css/bootstrap.min.css">
    <link href="{{URL::to('/')}}/Userassets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/lib.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/js/minicolors/miniColors.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/c1.css" rel="stylesheet">
    
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
<div class="main-container container">
            <ul class="breadcrumb">
                <li><a href="/Users/Home"><i class="fa fa-home"></i></a></li>
                <li><a href="/Users/Service/servicedisplay">Services</a></li>
            </ul>
            
            <div class="row">
                
                    <h3 class="title-category">Our Serivces</h3>
                    <a href="/servicesortcar"><i class="fa fa-car card-title" aria-hidden="true" style="font-size: 25px;"></i></a>
                    &emsp;&emsp;
                    |
                    &emsp;&emsp;
                    <a href="/servicesortbike"><i class="fa fa-motorcycle card-title" aria-hidden="true" style="font-size: 25px;"></i></a>
                    <br/>
                    <br/>
                     <div class="products-list row nopadding-xs so-filter-grid">        
                
                    </div>
                   
 <form action="/checkedServices" method="post"> 
<div class="grid">
                @foreach($servicedis as $s)
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  <label class="card">
    <input class="card__input" type="checkbox" name="services[]" value="{{ $s->service_id }}" />
    <div class="card__body">
      <div class="card__body-cover">
        <a target="_self" title="{{$s->service_name}}">
                                         
                                            <img src="{{URL::to('/')}}/serv_img/{{ $s->service_img}}"  onclick="window.location='/Users/Service/servicedetail/{{ $s->service_id }}'" class="img- img-responsive" alt="image1" style="height: 250px; width: 400px;">
                                        </a><span class="card__body-cover-checkbox"> 
          <svg class="card__body-cover-checkbox--svg" viewBox="0 0 12 10">
            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
          </svg></span></div>
      <header class="card__body-header">
        <br/>
        <h2 class="card__body-header-title">{{ $s->service_name }}</h2>
        <p class="card__body-header-subtitle">{{$s->service_description}}</p>
        <p class="card__body-header-subtitle1">Rs.{{ $s->service_price }}</p>
        <div>
                                        @if(($s->type)=="car")
                                        <i class="fa fa-car card-title" aria-hidden="true" style="font-size: 25px;"></i>
                                        @elseif(($s->type)=="bike")
                                        <i class="fa fa-motorcycle card-title" aria-hidden="true" style="font-size: 25px;"></i>
                                        @endif
                                    </div>

      </header>
    </div>
  </label>
 
   @endforeach
</div>
<br/>
<button type="submit" style="height: 50px; width: 180px; border-radius: 5px; font-size: 25px;" class="btn btn-danger">Proceed</button>
</form> 

             </div>
</div>

   
  
@endsection
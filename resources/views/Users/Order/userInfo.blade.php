@extends('Users.Layout.base')

@section('title')
Get User Info
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
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so-categories.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so_advanced_search.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so-categories.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so-category-slider.html" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so-newletter-popup.css" rel="stylesheet">
     <link href="{{URL::to('/')}}/Userassets/css/themecss/so-latest-blog.css" rel="stylesheet">

    <link href="{{URL::to('/')}}/Userassets/css/footer/footer1.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/header/header1.css" rel="stylesheet">
    <link id="color_scheme" href="{{URL::to('/')}}/Userassets/css/home2.css" rel="stylesheet"> 
    <link id="color_scheme" href="{{URL::to('/')}}/Userassets/css/theme.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/responsive.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/js/lightslider/lightslider.css" rel="stylesheet">

     <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,600,700' rel='stylesheet' type='text/css'>
    <style type="text/css">
         body{font-family:'Rubik', sans-serif}
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
<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/modernizr/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/minicolors/jquery.miniColors.min.js"></script>

<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/lightslider/lightslider.js"></script>

<!-- Theme files
============================================ -->

<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/application.js"></script>

<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/homepage.js"></script>

<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/toppanel.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/addtocart.js"></script>  

<script>
  $(document).on("click",".open-dialog",function(){
      var id = $(this).attr("data-id");
      $("#deleteid").val(id);
    document.getElementById("deletepartform").submit();
  });
</script>
@endsection


@section("main-section")

<div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">User Info.</a></li>
        </ul>
        @if(Session::get('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <i class="fa fa-check mr-2"></i>
                 {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        <div class="row">
            <!--Middle Part Start-->
            <form action="/placeOrder" method="post">
             <div id="content" class="col-sm-12">
              <div class="so-onepagecheckout row">
                <div class="col-left col-sm-3">
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">     
                        <div class="modal-body">
                            <button type="button" style="" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h2 style="color : red;">Are you sure?</h2>
                            <hr>
                            <h3>This product will be deleted from your cart.</h3>
                        </div>
                        <div class="modal-footer">
                        <form method="post" name="deletepartform">
                          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                          <input type="hidden" name="deleteid" id="deleteid"/>
                          <button class="btn btn-secondary" style="border-radius: 5px; font-size: 18px;" data-dismiss="modal">Cancel</button>
                          &nbsp;
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <form method="post" action="/getInfo">
              <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                  <div>
                    <div>
                      <h4><i class="fa fa-book"></i> Your Address</h4>
                    </div>
                      <div>
                            <fieldset id="address" class="required">
                              <div class="form-group required">
                                <label for="input-payment-address-1" class="control-label">Addressline 1</label>
                                <input type="text" class="form-control" id="input-payment-address-1" placeholder="Address 1" value="" name="txtaddress1">
                              </div>
                              <div class="form-group">
                                <label for="input-payment-address-2" class="control-label">Addressline 2</label>
                                <input type="text" class="form-control" id="input-payment-address-2" placeholder="Address 2" value="" name="txtaddress2">
                              </div>
                              <div class="form-group">
                                <label for="input-payment-landmark" class="control-label">Landmark</label>
                                <input type="text" class="form-control" id="input-payment-landmark" placeholder="Landmark" value="" name="txtlandmark">
                              </div>
                              <div class="form-group required">
                                <label for="input-payment-city" class="control-label">City</label>
                                <select class="form-control" name="txtcity">
                                  @foreach($citydata as $index => $row)
                                  <option value="{{ $row->city_name }}">{{ $row->city_name }}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group required">
                                <label for="input-payment-postcode" class="control-label">Pin Code</label>
                                <input type="text" class="form-control" id="input-payment-postcode" placeholder="Pin Code" value="" name="txtpincode">
                              </div>
                              <div class="form-group">
                                <button type="submit" style="float:right; border-radius:5px;" class="btn btn-primary">Submit</button>
                              </div>
                            </fieldset>
                          </div>
                  </div>
            </form>
                </div>
          </div>
        </div>
    </div>
        <!--Middle Part End -->
            
        </div>
    </div>
  </form>
    
@endsection
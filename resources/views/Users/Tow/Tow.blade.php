@extends('Users.Layout.base')

@section('title')
Tow Services
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
         .coupon-popup-sec { margin: 30px auto;color: #fff; padding: 0; width: 550px; position: relative;font-family: 'Montserrat', sans-serif;text-transform: uppercase;}

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

 <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyClJ7bohWjfhtUsd71UVKXfsu48-Wq5O5s"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-locationpicker/0.1.12/locationpicker.jquery.min.js"></script>





       
        <script src="{{URL::to('/')}}/assets/js/jquery.validate.min.js"></script>
        <script src="{{URL::to('/')}}/assets/js/additional-methods.min.js"></script>
         
        
        
    
<script>

     $('#divmap').locationpicker({
    location: {latitude: 21.1702, longitude: 72.8311},
    radius: 0,
    inputBinding: {
          latitudeInput: $('#latitude'),
          longitudeInput: $('#longitude'),
          locationNameInput: $('#address1')
      },
    mapTypeId: google.maps.MapTypeId.TERRAIN,
    enableAutocomplete: true,
     onchanged: function (currentLocation, radius, isMarkerDropped) {
          var addressComponents = $(this).locationpicker('map').location.addressComponents;
          //console.log(addressComponents.city);

          $('select#txtcity option').each(function () {
                if ($(this).text().toLowerCase() == addressComponents.city.toLowerCase()) {
                    $(this).prop('selected','selected');
                    return;
                }
            });
          //$("#txtcity").val(addressComponents.city);
          //$('select[name^="txtcity"] option[value="'+addressComponents.city+'"]').attr("selected","selected");
      },
    });
</script> 

<script>

     $('#divmap1').locationpicker({
    location: {latitude: 21.1702, longitude: 72.8311},
    radius: 0,
    inputBinding: {
          latitudeInput: $('#deslatitude'),
          longitudeInput: $('#deslongitude'),
          locationNameInput: $('#desaddress1')
      },
    mapTypeId: google.maps.MapTypeId.TERRAIN,
    enableAutocomplete: true,
     onchanged: function (currentLocation, radius, isMarkerDropped) {
          var addressComponents = $(this).locationpicker('map').location.addressComponents;
          //console.log(addressComponents.city);

          $('select#txtcity option').each(function () {
                if ($(this).text().toLowerCase() == addressComponents.city.toLowerCase()) {
                    $(this).prop('selected','selected');
                    return;
                }
            });
          //$("#txtcity").val(addressComponents.city);
          //$('select[name^="txtcity"] option[value="'+addressComponents.city+'"]').attr("selected","selected");
      },
    });
</script>
<script src="{{URL::to('/')}}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script>
      $("#form1").validate({
        rules:
        {
            address_1:
            {
                required:true
            },
            landmark:
            {
                required:true
            },
            latitude:
            {
                required:true
            },
            longitude:
            {
                required:true
            },
            pincode:
            {
                required:true,
                number:true
            },
            desaddress_1:
            {
                required:true
            },
            deslandmark:
            {
                required:true
            },
            deslatitude:
            {
                required:true
            },
            deslongitude:
            {
                required:true
            },
            despincode:
            {
                required:true,
                number:true
            },
            txtmodel:
            {
                required:true
            },
            txtvehicleno:
            {
                required:true
            }
        },
        messages:
        {
            address_1:
            {
                required:"Please Enter Address Line 1 "
            },
            landmark:
            {
                required:"Please Enter landmark"
            },
            latitude:
            {
                required:"Please Enter latitude"
            },
            longitude:
            {
                required:"Please Enter longitude"
            },
            pincode:
            {
                required:"Please Enter Pincode",
                number:"Allowed only numbers"
            },
            desaddress_1:
            {
                required:"Please Enter Destination Address"
            },
            deslandmark:
            {
                required:"Please Enter Destination Landmark "
            },
            deslatitude:
            {
                required:"Please Enter latitude"
            },
            deslongitude:
            {
                required:"Please Enter longitude"
            },
            deslongitude:
            {
                required:"Please Enter longitude"
            },
            despincode:
            {
                required:"Please Enter Pincode",
                number:"Allowed only numbers"
            },
            txtmodel:
            {
                required:"Please Select Model"
            },
            txtvehicleno:
            {
                required:"Please Enter Vehicle Number"
            }
        }
    });
</script>
</script> 

@endsection

@section("main-section")
<div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="/Users/Home"><i class="fa fa-home"></i></a></li>
            <li><a href="/Users/Tow">Tow Services</a></li>
        </ul>


    
        <div class="row">
            <div id="content" class="col-sm-12">
                @if(Session::get('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <i class="mdi mdi-check-all mr-2"></i>
                                             {{ Session::get('success') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        @endif
                                         @if(Session::get('message'))
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <i class="mdi mdi-alert-outline mr-2"></i>
                                             {{ Session::get('message') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        @endif
                <h2 class="title">Vehicle Tow Service</h2>
                <!-- <p>If you already have an account with us, please login at the <a href="#">login page</a>.</p> -->
                <form action="/inserttow" method="post" enctype="multipart/form-data" class="form-horizontal account-register clearfix" id="form1"> 
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <fieldset id="account">
                        <legend>Your Personal Details</legend>
                        <div class="form-group required" style="display: none;">
                            <label class="col-sm-2 control-label">Customer Group</label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="customer_group_id" value="1" checked="checked"> Default
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-firstname">User Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="txtmodel" value="{{ Session::get('name') }}" placeholder="First Name" id="input-firstname" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" value="{{ Session::get('email') }}" placeholder="E-Mail" id="input-email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
                            <div class="col-sm-10">
                                <input type="tel" name="telephone" value="{{ Session::get('contact') }}" placeholder="Telephone" id="input-telephone" class="form-control">
                            </div>
                        </div>
                       </fieldset>
                    <fieldset id="address">
                         <legend>Your Current Address</legend>
                        <div class="col-md-12">
                              <div id="divmap" style="height: 200px;"></div>
                         </div>
                     </fieldset>
                     <br/>
                         <fieldset id="address">
                       
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-address-1">Address 1</label>
                            <div class="col-sm-10">
                                <input type="text" name="address_1" value=""   placeholder="Address 1" id="address1" class="form-control">
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label class="col-sm-2 control-label" for="input-address-2">Address 2</label>
                            <div class="col-sm-10">
                                <input type="text" name="address_2" value="" placeholder="Address 2" id="address2" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-city">Landmark</label>
                            <div class="col-sm-10">
                                <input type="text" name="landmark" value=""  placeholder="Landmark" id="city" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-city">Latitude</label>
                            <div class="col-sm-4">
                                <input type="text" name="latitude" value=""  placeholder="Latitude" id="latitude" class="form-control">
                            </div>
                       
                            <label class="col-sm-2 control-label" for="input-city">Longitude</label>
                            <div class="col-sm-4">
                                <input type="text" name="longitude" value=""  placeholder="Longitude" id="longitude" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-postcode">Pin Code</label>
                            <div class="col-sm-10">
                                <input type="text" name="pincode" value=""  placeholder="Pin Code" id="pincode" class="form-control">
                            </div>
                        </div>
                       
                    </fieldset>
                    <fieldset id="address">
                         <legend>Your Destination Address</legend>
                        <div class="col-lg-12">
                             <div id="divmap1" style="height: 200px;"></div>
                        </div>
                    </fieldset>
                    <br/>
                        <fieldset id="address">
                        
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-address-1">Address 1</label>
                            <div class="col-sm-10">
                                <input type="text" name="desaddress_1" value="" placeholder="Address 1" id="desaddress1" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-address-2">Address 2</label>
                            <div class="col-sm-10">
                                <input type="text" name="desaddress_2" value=""   placeholder="Address 2" id="desaddress2" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-city">Landmark</label>
                            <div class="col-sm-10">
                                <input type="text" name="deslandmark" value=""  placeholder="City" id="deslandmark" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-city">Latitude</label>
                            <div class="col-sm-4">
                                <input type="text" name="deslatitude" value=""  placeholder="Latitude" id="deslatitude" class="form-control">
                            </div>
                       
                            <label class="col-sm-2 control-label" for="input-city">Longitude</label>
                            <div class="col-sm-4">
                                <input type="text" name="deslongitude" value=""  placeholder="Longitude" id="deslongitude" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-postcode">Pin Code</label>
                            <div class="col-sm-10">
                                <input type="text" name="despincode" value=""  placeholder="Pin Code" id="despincode" class="form-control">
                            </div>
                        </div>
                       
                    </fieldset>
                    <fieldset id="address">
                        
                        <legend>Your Vehicle Detail</legend>
                       
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-country">Model Name</label>
                            <div class="col-sm-10">
                                <select name="txtmodel" id="model" class="form-control">
                                    <option value=""> --- Please Select --- </option>
                                    @foreach($model as $m)
                                    <option value="{{$m->model_id}}">{{$m->model_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-address-2">Vehicle Number</label>
                            <div class="col-sm-10">
                                <input type="text" name="txtvehicleno" value=""  placeholder="Vehicle Number" id="input-address-2" class="form-control">
                            </div>
                        </div>
                        
                        </div>
                       
                    </fieldset>
                    
                    <fieldset>
                        <legend></legend>
                        </fieldset>
                    <div class="buttons text-right">
                        <!-- <div class="pull-right">I have read and agree to the <a href="#" class="agree"><b>Pricing Tables</b></a>
                         -->   
                          <!-- <input class="box-checkbox" type="checkbox" name="agree" value="1"> &nbsp; -->
                            <input type="submit" value="&nbsp;&nbsp;Send&nbsp;&nbsp;" class="btn btn-danger ">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
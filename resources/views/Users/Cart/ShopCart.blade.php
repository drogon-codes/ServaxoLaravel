@extends('Users.Layout.base')

@section('title')
Shopping Cart
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
            <li><a href="#">Shopping Cart</a></li>
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
                    <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"><i class="fa fa-user"></i> Your Personal Details</h4>
                    </div>
                  @foreach($userdata as $d)
                      <div class="panel-body">
                            <fieldset id="account">
                              <div class="form-group required">
                                <label for="input-payment-firstname" class="control-label">Name</label>
                                <input type="text" class="form-control" id="input-payment-firstname" placeholder="First Name" name="txtname" value="{{ $d->name }}" disabled="true">
                              </div>
                              <div class="form-group required">
                                <label for="input-payment-email" class="control-label">E-Mail</label>
                                <input type="text" class="form-control" id="input-payment-email" placeholder="E-Mail" value="{{ $d->email }}" name="txtemail" disabled="true">
                              </div>
                              <div class="form-group required">
                                <label for="input-payment-telephone" class="control-label">Contact No.</label>
                                <input type="text" class="form-control" id="input-payment-telephone" placeholder="Telephone" value="{{ $d->contact }}" name="txtcontact">
                              </div>
                              <!-- <div class="form-group">
                                <button type="button" style="float:right; border-radius:5px;" class="btn btn-primary">Change</button>
                              </div> -->
                            </fieldset>
                          </div>
                        @endforeach
                  </div>
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
                          
                          <button type="button" class="btn btn-danger" style="border-radius: 5px; font-size: 18px;" @foreach($cartdata as $item) onclick="window.location='/deletepart/{{ $item->cart_id }}'"@endforeach>Delete</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"><i class="fa fa-book"></i> Your Address</h4>
                    </div>
                      <div class="panel-body">
                            <fieldset id="address" class="required">
                              <div class="form-group required">
                                <label for="input-payment-address-1" class="control-label">Addressline 1</label>
                            <input type="text" class="form-control" id="input-payment-address-1" placeholder="Address 1" value="{{Session::get('address1')}}" name="txtaddress1">
                              </div>
                              <div class="form-group">
                                <label for="input-payment-address-2" class="control-label">Addressline 2</label>
                            <input type="text" class="form-control" id="input-payment-address-2" placeholder="Address 2" value="{{Session::get('address2')}}" name="txtaddress2">
                              </div>
                              <div class="form-group">
                                <label for="input-payment-landmark" class="control-label">Landmark</label>
                            <input type="text" class="form-control" id="input-payment-landmark" placeholder="Landmark" value="{{Session::get('landmark')}}" name="txtlandmark">
                              </div>
                              <div class="form-group required">
                                <label for="input-payment-city" class="control-label">City</label>
                                <select class="form-control" name="city">
                                  @foreach($citydata as $index => $row)
                                  <option value="{{ $row->city_id }}">{{ Session::get('city') }}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group required">
                                <label for="input-payment-postcode" class="control-label">Pin Code</label>
                                <input type="text" class="form-control" id="input-payment-postcode" placeholder="Pin Code" value="{{ Session::get('pincode') }}" name="txtpincode">
                              </div>
                              <!-- <div class="form-group">
                                <button type="button" style="float:right; border-radius:5px;" class="btn btn-primary">Change</button>
                              </div> -->
                            </fieldset>
                          </div>
                  </div>
                </div>
        <div class="col-sm-9">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h2 class="panel-title"><i class="fa fa-shopping-cart"></i> Your cart</h2>
                      </div>
                        <!-- <h2 class="title">Your Cart</h2> -->
                          <div class="panel-body">
                            <div class="table-responsive form-group">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <td class="text-center">Image</td>
                    <td class="text-left">Product Name</td>
                    <td class="text-left">Model</td>
                    <td class="text-left">Quantity</td>
                    <td class="text-right">Unit Price</td>
                    <td class="text-right">Total</td>
                    <td class="text-center">Remove</td>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $total=0;
                    ?>
                @foreach($cartdata as $item)

                <?php $total=$total + ($item->price *  $item->qty); ?>
                <tr>
                    <td class="text-center"><a href="product.html"><img width="70px" src="{{URL::to('/')}}/part_img/{{ $item->img1 }}" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" class="img-thumbnail" /></a></td>
                    <td class="text-left"><a href="product.html">{{ $item->part_name }}</a><br />
                     </td>
                    <td class="text-left">{{ $item->model_name }}</td>
                    <td class="text-left" width="200px">
                      <div class="input-group btn-block quantity">
                        <input type="text" name="quantity" value="{{ $item->qty }}" size="1" class="form-control" disabled="disabled" />
                        <span class="input-group-btn">
                        <form method="post" action="/increaseQty">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                        <input type="hidden" name="incpartid" value="{{$item->cart_id}}" />
                        <button type="submit" data-toggle="tooltip" title="Increase Quantity" class="btn btn-primary" onclick="window.location='/increaseQty'" style="border-top-right-radius: 4px;"><i class="fa fa-plus"></i></button>
                        </form>

                        <form method="post" action="/decreaseQty">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                        <input type="hidden" name="decpartid" value="{{$item->cart_id}}"/>
                        @if($item->qty==1)
                        <button type="submit" disabled="true" data-toggle="tooltip" title="Decrease Quantity" class="btn btn-danger" onClick="/decreaseQty" style="border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;"><i class="fa fa-minus"></i></button>
                        @else
                        <button type="submit" data-toggle="tooltip" title="Decrease Quantity" class="btn btn-danger" onClick="/decreaseQty" style="border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;"><i class="fa fa-minus"></i></button>
                        @endif
                        </form>
                        </span>
                      </div>
                    </td>
                    <td class="text-right">₹ {{ $item->price }}</td>
                    <td class="text-right">₹ {{ $item->price *  $item->qty }}</td>
                    <td class="text-center">
                        <button type="button" data-id="{{ $item->cart_id }}" data-toggle="modal" data-target="#myModal" title="Remove" class="btn btn-danger open-dialog" style=" border-radius: 4px;"><i class="fa fa-times-circle" style="font-size: 20px; padding-top: 2px;"></i></button>
                    </td>
                  </tr>
                  @endforeach
                  <tr>
                        <td class="text-right" colspan="5">
                            <strong>Sub-Total:</strong>
                            </td>
                            <td class="text-center" colspan="2"><strong>₹ <?php echo $total; ?><strong></td>
                        </tr>
                </tbody>
              </table>
            </div>
                @if($cartdata->count() != 0)
                    <input type="submit" class="btn btn-primary" id="button-confirm" value="Place Order" style="border-radius: 5px; float: right;">
                     Place Order&nbsp;
                      <i class="fa fa-share"></i>
                @endif
                      </div>
                      </div>
                      <div class="buttons">
            <button class="btn btn-primary" onclick="window.location='/Users/Catagories'">
                <i class="fa fa-angle-double-left">
                </i>
                &nbsp;
                Back To Shopping
            </button>
            </div>    
                    </div>
          </div>
        </div>
    </div>
        <!--Middle Part End -->
            
        </div>
    </div>
  </form>
    
@endsection
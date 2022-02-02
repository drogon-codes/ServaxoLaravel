@extends('Users.Layout.base')

@section('title')
Checkout
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
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Checkout</a></li>
            
        </ul>
        
        <div class="row">
            <!--Middle Part Start-->
            <div id="content" class="col-sm-12">
              <h2 class="title">Checkout</h2>
              <div class="so-onepagecheckout row">
                <div class="col-left col-sm-3">
                  <!-- <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"><i class="fa fa-sign-in"></i> Create an Account or Login</h4>
                    </div>
                      <div class="panel-body">
                            <div class="radio">
                              <label>
                                <input type="radio" value="register" name="account">
                                Register Account</label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" checked="checked" value="guest" name="account">
                                Guest Checkout</label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" value="returning" name="account">
                                Returning Customer</label>
                            </div>
                      </div>
                  </div> -->
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"><i class="fa fa-user"></i> Your Personal Details</h4>
                    </div>
                  @foreach($userdata as $d)
                    <form>
                      <div class="panel-body">
                            <fieldset id="account">
                              <div class="form-group required">
                                <label for="input-payment-firstname" class="control-label">Name</label>
                                <input type="text" class="form-control" id="input-payment-firstname" placeholder="First Name" value="{{ $d->name }}">
                              </div>
                              <div class="form-group required">
                                <label for="input-payment-email" class="control-label">E-Mail</label>
                                <input type="text" class="form-control" id="input-payment-email" placeholder="E-Mail" value="{{ $d->email }}" name="email">
                              </div>
                              <div class="form-group required">
                                <label for="input-payment-telephone" class="control-label">Contact No.</label>
                                <input type="text" class="form-control" id="input-payment-telephone" placeholder="Telephone" value="{{ $d->contact }}" name="telephone">
                              </div>
                              <div class="form-group">
                                <button style="float:right; border-radius:5px;" class="btn btn-primary">Change</button>
                              </div>
                            </fieldset>
                          </div>
                        </form>
                        @endforeach
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"><i class="fa fa-book"></i> Your Address</h4>
                    </div>
                  <form>
                      <div class="panel-body">
                            <fieldset id="address" class="required">
                              <div class="form-group required">
                                <label for="input-payment-address-1" class="control-label">Addressline 1</label>
                                <input type="text" class="form-control" id="input-payment-address-1" placeholder="Address 1" value="{{ $orderhistorydata->addressline1 }}" name="address_1">
                              </div>
                              <div class="form-group">
                                <label for="input-payment-address-2" class="control-label">Addressline 2</label>
                                <input type="text" class="form-control" id="input-payment-address-2" placeholder="Address 2" value="{{ $orderhistorydata->addressline2 }}" name="address_2">
                              </div>
                              <div class="form-group">
                                <label for="input-payment-landmark" class="control-label">Landmark</label>
                                <input type="text" class="form-control" id="input-payment-landmark" placeholder="Landmark" value="{{ $orderhistorydata->landmark }}" name="address_2">
                              </div>
                              <div class="form-group required">
                                <label for="input-payment-city" class="control-label">City</label>
                                <select class="form-control">
                                  @foreach($citydata as $index => $row)
                                  <option @if($orderhistorydata->city_id==$row->city_id) selected @endif value="{{ $row->city_id }}">{{ $row->city_name }}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group required">
                                <label for="input-payment-postcode" class="control-label">Pin Code</label>
                                <input type="text" class="form-control" id="input-payment-postcode" placeholder="Pin Code" value="{{ $orderhistorydata->pincode }}" name="postcode">
                              </div>
                              <div class="form-group">
                                <button style="float:right; border-radius:5px;" class="btn btn-primary">Change</button>
                              </div>
                            </fieldset>
                          </div>
                        </form>
                  </div>
                </div>
                <div class="col-right col-sm-9">
                  <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default no-padding">
                            <!-- <div class="col-sm-6 checkout-shipping-methods">
                                <div class="panel-heading">
                                  <h4 class="panel-title"><i class="fa fa-truck"></i> Delivery Method</h4>
                                </div>
                                <div class="panel-body ">
                                    <p>Please select the preferred shipping method to use on this order.</p>
                                    <div class="radio">
                                      <label>
                                        <input type="radio" checked="checked" name="Free Shipping">
                                        Free Shipping - $0.00</label>
                                    </div>
                                    <div class="radio">
                                      <label>
                                        <input type="radio" name="Flat Shipping Rate">
                                        Flat Shipping Rate - $7.50</label>
                                    </div>
                                    
                                </div>
                            </div> -->
                            <div class="col-sm-6  checkout-payment-methods">
                                <div class="panel-heading">
                                  <h4 class="panel-title"><i class="fa fa-credit-card"></i> Payment Method</h4>
                                </div>
                                <div class="panel-body">
                                    <p>Please select the preferred payment method to use on this order.</p>
                                    <div class="radio">
                                      <label>
                                        <input type="radio" checked="checked" name="Cash On Delivery">Cash On Delivery</label>
                                    </div>
                                    
                                    <div class="radio">
                                      <label>
                                        <input type="radio" name="Paypal">Paypal</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                            
                        </div>
                    
                    
                    
                    <!-- <div class="col-sm-12">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title"><i class="fa fa-ticket"></i> Do you Have a Coupon or Voucher?</h4>
                        </div>
                          <div class="panel-body row">
                            <div class="col-sm-6 ">
                            <div class="input-group">
                              <input type="text" class="form-control" id="input-coupon" placeholder="Enter your coupon here" value="" name="coupon">
                              <span class="input-group-btn">
                              <input type="button" class="btn btn-primary" data-loading-text="Loading..." id="button-coupon" value="Apply Coupon">
                              </span></div>
                            </div>
                            
                            <div class="col-sm-6">
                            <div class="input-group">
                              <input type="text" class="form-control" id="input-voucher" placeholder="Enter your gift voucher code here" value="" name="voucher">
                              <span class="input-group-btn">
                              <input type="submit" class="btn btn-primary" data-loading-text="Loading..." id="button-voucher" value="Apply Voucher">
                              </span> </div>
                            </div>
                          </div>
                      </div>
                    </div> -->
                    
                    <div class="col-sm-12">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Your cart</h4>
                        </div>
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
                    <td class="text-left">{{ $item->model_id }}</td>
                    <td class="text-left" width="200px"><div class="input-group btn-block quantity">
                        <input type="text" name="quantity" value="{{ $item->qty }}" size="1" class="form-control" />
                        <span class="input-group-btn">
                        <button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa fa-clone"></i></button>
                        <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
                        </span></div></td>
                    <td class="text-right">{{ $item->price }}</td>
                    <td class="text-right">{{ $item->price *  $item->qty }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
                            <input type="button" class="btn btn-primary" id="button-confirm" value="Confirm Order" style="border-radius: 5px; float: right;">
                          </div>
                      </div>
                    </div>
                    <!-- <div class="col-sm-12">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title"><i class="fa fa-pencil"></i> Add Comments About Your Order</h4>
                        </div>
                          <div class="panel-body">
                            <textarea rows="4" class="form-control" id="confirm_comment" name="comments"></textarea>
                            <br>
                            <label class="control-label" for="confirm_agree">
                              <input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
                              <span>I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a></span> </label>
                            <div class="buttons">
                              <div class="pull-right"> -->
                                
                              <!-- </div>
                            </div>
                          </div>
                      </div> -->
                    <!-- </div> -->
                  </div>
                </div>
              </div>
            </div>
            <!--Middle Part End -->
            
        </div>
    </div>
    <!-- //Main Container -->
@endsection
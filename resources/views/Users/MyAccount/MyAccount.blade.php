@extends('Users.Layout.base')

@section('title')
My Account
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


@section('main-section')

<!-- Main Container  -->
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Account</a></li>
            <li><a href="#">My Account</a></li>
        </ul>
        
        <div class="row">
            <!--Middle Part Start-->
            <div class="col-sm-9" id="content">
                <h2 class="title">My Account</h2>
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <fieldset id="personal-details">
                                <legend>Personal Details</legend>
                                <div class="form-group required">
                                    <label for="input-firstname" class="control-label">First Name</label>
                                    <input type="text" class="form-control" id="input-firstname" placeholder="First Name" value="" name="firstname">
                                </div>
                                <div class="form-group required">
                                    <label for="input-lastname" class="control-label">Last Name</label>
                                    <input type="text" class="form-control" id="input-lastname" placeholder="Last Name" value="" name="lastname">
                                </div>
                                <div class="form-group required">
                                    <label for="input-email" class="control-label">E-Mail</label>
                                    <input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="" name="email">
                                </div>
                                <div class="form-group required">
                                    <label for="input-telephone" class="control-label">Telephone</label>
                                    <input type="tel" class="form-control" id="input-telephone" placeholder="Telephone" value="" name="telephone">
                                </div>
                                <div class="form-group">
                                    <label for="input-fax" class="control-label">Fax</label>
                                    <input type="text" class="form-control" id="input-fax" placeholder="Fax" value="" name="fax">
                                </div>
                            </fieldset>
                            <br>
                        </div>
                        <div class="col-sm-6">
                            <fieldset>
                                <legend>Change Password</legend>
                                <div class="form-group required">
                                    <label for="input-password" class="control-label">Old Password</label>
                                    <input type="password" class="form-control"  placeholder="Old Password" value="" name="old-password">
                                </div>
                                <div class="form-group required">
                                    <label for="input-password" class="control-label">New Password</label>
                                    <input type="password" class="form-control"  placeholder="New Password" value="" name="new-password">
                                </div>
                                <div class="form-group required">
                                    <label for="input-confirm" class="control-label">New Password Confirm</label>
                                    <input type="password" class="form-control" id="input-confirm" placeholder="New Password Confirm" value="" name="new-confirm">
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Newsletter</legend>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-3 control-label">Subscribe</label>
                                    <div class="col-md-10 col-sm-9 col-xs-9">
                                        <label class="radio-inline">
                                            <input type="radio" value="1" name="newsletter"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" checked="checked" value="0" name="newsletter"> No
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <fieldset id="address">
                                <legend>Payment Address</legend>
                                <div class="form-group">
                                    <label for="input-company" class="control-label">Company</label>

                                    <input type="text" class="form-control"  placeholder="Company" value="" name="company">

                                </div>
                                <div class="form-group required">
                                    <label for="input-address-1" class="control-label">Address 1</label>
                                    <input type="text" class="form-control"  placeholder="Address 1" value="" name="address_1">
                                </div>
                                <div class="form-group required">
                                    <label for="input-city" class="control-label">City</label>
                                    <input type="text" class="form-control" placeholder="City" value="" name="city">
                                </div>
                                <div class="form-group required">
                                    <label for="input-postcode" class="control-label">Post Code</label>
                                    <input type="text" class="form-control"  placeholder="Post Code" value="" name="postcode">
                                </div>
                                <div class="form-group required">
                                    <label for="input-country" class="control-label">Country</label>
                                    <select class="form-control" name="country_id">
                                        <option value=""> --- Please Select --- </option>
                                        <option value="244">Aaland Islands</option>
                                        <option value="1">Afghanistan</option>
                                        <option value="2">Albania</option>
                                        <option value="3">Algeria</option>
                                        <option value="4">American Samoa</option>
                                        <option value="5">Andorra</option>
                                        <option value="6">Angola</option>
                                        <option value="7">Anguilla</option>
                                        <option value="8">Antarctica</option>
                                        <option value="9">Antigua and Barbuda</option>
                                        <option value="10">Argentina</option>
                                        <option value="11">Armenia</option>
                                        <option value="12">Aruba</option>
                                   
                                    </select>
                                </div>
                                <div class="form-group required">
                                    <label for="input-zone" class="control-label">Region / State</label>
                                    <select class="form-control" name="zone_id">
                                        <option value=""> --- Please Select --- </option>
                                        <option value="3513">Aberdeen</option>
                                        <option value="3514">Aberdeenshire</option>
                                        <option value="3515">Anglesey</option>
                                        <option value="3516">Angus</option>
                                        <option value="3517">Argyll and Bute</option>
                                        <option value="3518">Bedfordshire</option>
                                        <option value="3519">Berkshire</option>
                                 
                                    </select>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-sm-6">
                            <fieldset id="shipping-address">
                                <legend>Shipping Address</legend>
                                <div class="form-group">
                                    <label for="input-company" class="control-label">Company</label>
                                    <input type="text" class="form-control" id="input-company" placeholder="Company" value="" name="company">
                                </div>
                                <div class="form-group required">
                                    <label for="input-address-1" class="control-label">Address 1</label>
                                    <input type="text" class="form-control" id="input-address-1" placeholder="Address 1" value="" name="address_1">
                                </div>
                                <div class="form-group required">
                                    <label for="input-city" class="control-label">City</label>
                                    <input type="text" class="form-control" id="input-city" placeholder="City" value="" name="city">
                                </div>
                                <div class="form-group required">
                                    <label for="input-postcode" class="control-label">Post Code</label>
                                    <input type="text" class="form-control" id="input-postcode" placeholder="Post Code" value="" name="postcode">
                                </div>
                                <div class="form-group required">
                                    <label for="input-country" class="control-label">Country</label>
                                    <select class="form-control" id="input-country" name="country_id">
                                        <option value=""> --- Please Select --- </option>
                                        <option value="244">Aaland Islands</option>
                                        <option value="1">Afghanistan</option>
                                        <option value="2">Albania</option>
                                        <option value="3">Algeria</option>
                                        <option value="4">American Samoa</option>
                                        <option value="5">Andorra</option>
                                        <option value="6">Angola</option>
                                        <option value="7">Anguilla</option>
                                        <option value="8">Antarctica</option>
                                        <option value="9">Antigua and Barbuda</option>
                                        <option value="10">Argentina</option>
                                        <option value="11">Armenia</option>
                                        <option value="12">Aruba</option>
                                    
                                    </select>
                                </div>
                                <div class="form-group required">
                                    <label for="input-zone" class="control-label">Region / State</label>
                                    <select class="form-control" id="input-zone" name="zone_id">
                                        <option value=""> --- Please Select --- </option>
                                        <option value="3513">Aberdeen</option>
                                        <option value="3514">Aberdeenshire</option>
                                        <option value="3515">Anglesey</option>
                                        <option value="3516">Angus</option>
                                        <option value="3517">Argyll and Bute</option>
                                        <option value="3518">Bedfordshire</option>
                                        <option value="3519">Berkshire</option>
                                       
                                    </select>
                                </div>
                            </fieldset>
                        </div>
                    </div>



                    <div class="buttons clearfix">
                        <div class="pull-right">
                            <input type="submit" class="btn btn-md btn-primary" value="Save Changes">
                        </div>
                    </div>
                </form>
            </div>
            <!--Middle Part End-->
            <!--Right Part Start -->
            <aside class="col-sm-3 hidden-xs content-aside col-md-3" id="column-right">
                <h2 class="subtitle">Account</h2>
                <div class="list-group">
                    <ul class="list-item">
                        <li><a href="login.html">Login</a>
                        </li>
                        <li><a href="register.html">Register</a>
                        </li>
                        <li><a href="#">Forgotten Password</a>
                        </li>
                        <li><a href="/user/MyAccount">My Account</a>
                        </li>
                        <li><a href="#">Address Books</a>
                        </li>
                        <li><a href="wishlist.html">Wish List</a>
                        </li>
                        <li><a href="/user/Order/orderhistory">Order History</a>
                        </li>
                        <li><a href="#">Downloads</a>
                        </li>
                        <li><a href="#">Reward Points</a>
                        </li>
                        <li><a href="#">Returns</a>
                        </li>
                        <li><a href="#">Transactions</a>
                        </li>
                        <li><a href="#">Newsletter</a>
                        </li>
                        <li><a href="#">Recurring payments</a>
                        </li>
                    </ul>
                </div>
            </aside>
            <!--Right Part End -->
        </div>
    </div>
<!-- //Main Container -->

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

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.smartaddons.com/templates/html/autoparts/home2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Mar 2021 08:06:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    
    <!-- Basic page needs
    ============================================ -->
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
    <meta name="description" content="
     is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <meta name="csrf-token2" content="{{ csrf_token() }}">

    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Favicon
    ============================================ -->
    <style type="text/css">
         body{font-family:'Rubik', sans-serif;}
         .coupon-popup-sec { margin: 30px auto;color: #fff; padding: 0; width: 550px; position: relative;font-family: 'Montserrat', sans-serif;text-transform: uppercase;}
.coupon-popup-sec h1,h2,h3,h4,h5 {margin: 0;}
.coupon-popup-sec .coupon-content { margin: 0px; padding: 38px 0; float: left; width: 100%; box-sizing: border-box; border-radius: 10px;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec1 {width: 40%;float: left; padding: 36.5px 0;box-sizing: border-box;text-align: center;background: #ff0022;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec2 {padding: 56.2px 0;background: #332d27;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec1 h2 {font-size: 68px;font-weight: 800;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec1 h3 {font-size: 29px;}
.coupon-popup-sec .coupon-content p {font-size: 17px;font-weight: 600;letter-spacing: 0.5px}
.coupon-popup-sec .coupon-content h4 {font-size: 25px;font-weight: 600;padding-bottom: 30px;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec1 h5 {font-size: 18px;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec2 .code-now-btn {cursor: pointer;font-size: 27px;text-transform: uppercase;font-weight: 600;color: #fff;margin: 0 0 10px 0;padding: 15px 25px; clear: both;border: 0px;background: #ff0022;font-family: 'Montserrat', sans-serif;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec2 .code-now-btn:hover { background: #00ae4d; }
.coupon-popup-sec .coupon-content .coupon-brdr-sec2 .code-now-btn:focus, .coupon-popup-sec .coupon-cls-btn:focus { outline: none; }
.coupon-popup-sec .coupon-cls-btn { font-size: 14px; line-height: 18px; width: 28px; height: 28px; -webkit-border-radius: 50%; border-radius: 50%; color: black; background: #ffffff; position: absolute; right: -14px; top: -14px; border: 0px; -webkit-box-shadow: 0 0 2px 0 rgba(0,0,0,0.27); box-shadow: 0 0 2px 0 rgba(0,0,0,0.27); cursor: pointer;}
.popup-graybox {position: fixed;width: 120%;top: 0;left: 0;height: 75vh;z-index: 99999;text-align: center;align-items: center;display: flex;box-sizing: border-box;overflow: auto;}
.coupon-popup-sec .coupon-cls-btn:hover {background: #ff0000;color: white;}
.coupon-popup-sec .coupon-content {background: #000;-webkit-box-shadow: 0px 10px 20px 0px rgba(50, 50, 50, 0.52);-moz-box-shadow: 0px 10px 20px 0px rgba(50, 50, 50, 0.52);box-shadow: 0px 10px 20px 0px rgba(50, 50, 50, 0.52);}
.coupon-popup-sec .coupon-content .main_content{width: 100%;float: left; margin-bottom: 30px;}
@media only screen and (max-width:640px) {
.coupon-popup-sec { width: 90%; }
}
@media only screen and (max-width:480px) {
.coupon-popup-sec .coupon-content .coupon-brdr-sec1 h2 {font-size: 42px;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec1 h3 {font-size: 19px;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec1 h5 {font-size: 16px;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec2 .code-now-btn {font-size: 16px;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec2 {padding: 54px 0;}
.coupon-popup-sec .coupon-content {padding: 45px 0 30px 0;}
.coupon-popup-sec .coupon-content h4 {font-size: 18px;letter-spacing: 0.5px;}
}
@media only screen and (max-width:425px) {
.coupon-popup-sec .coupon-content .coupon-brdr-sec1 {width: 45%;padding: 23.5px 0;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec2 {padding: 46px 0;}
.coupon-popup-sec .coupon-content p {font-size: 12px;}
.coupon-popup-sec .coupon-content h4 {font-size: 16px;padding-bottom: 15px;}
.coupon-popup-sec .coupon-content .coupon-brdr-sec2 .code-now-btn {font-size: 14px;letter-spacing: 0.5px;padding: 10px 15px;}
.coupon-popup-sec .coupon-content {padding: 30px 0 20px 0;}
}
    </style> 
   <style>
       .float{
        position:fixed;
        width:200px;
        height:50px;
        bottom:40px;
        right:40px;
        background-color:#002e37;
        color:#FFF;
        border-radius:7px;
        text-align:center;
        z-index: 100;
        }

        .my-float{
        margin-top:14px;
        }
    </style>

 @yield('css-section')
 <?php 
    $conn = mysqli_connect("localhost","root","","vehicle_db");
    $uid = Session::get("id");
    $query = "select * from catagories";
    $query1 = "select * from tbl_cart c, parts p where c.part_id=p.part_id and c.user_id=$uid";
    $query2 = "select count(cart_id) from tbl_cart where user_id=$uid";
    $res = mysqli_query($conn,$query);
    $res1 = mysqli_query($conn,$query1);
?>

</head>

<body class="common-home res layout-2">
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">     
                        <div class="modal-body">
                            <button type="button" style="" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h2 style="color : green;">Success!!</h2>
                           <!-- <center><img src="{{URL::to('/')}}/Userassets/image/check-circle.gif" height="50" width="50"><center> -->
                            <br/>
                            <h3>User Successfully Logged Out....</h3>
                            <h5></h5>
                        </div>
                    </div>
                </div>
            </div>
    
    <div id="wrapper" class="wrapper-fluid banners-effect-8">
    

    <!-- Header Container  -->
    <header id="header" class=" typeheader-1">
        
        <!-- Header Top -->
        <div class="header-top hidden-compact"> 
            <div class="container">
                <div class="row">
                    <div class="header-top-left col-lg-3 col-md-4 col-sm-5 hidden-xs">           
                        <div class="telephone " >
                            <ul class="socials">
                                <li class="facebook"><a href="https://www.facebook.com/smartaddons.page" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="https://twitter.com/smartaddons" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li class="google_plus"><a href="https://plus.google.com/u/0/+Smartaddons/posts" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li class="pinterest"><a href="https://www.pinterest.com/smartaddons/" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="instagram"><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li class="linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>             
                        
                        
                    </div>
                    <div class="header-top-right col-lg-9 col-md-8 col-sm-7 col-xs-12">
                        <ul class="top-link list-inline lang-curr">
                            <li class="currency">
                                <div class="btn-group currencies-block">
                                    <form action="https://demo.smartaddons.com/templates/html/autoparts/index.html" method="post" enctype="multipart/form-data" id="currency">
                                       <!--  <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                            <span class="icon icon-credit "></span> $ US Dollar  <span class="fa fa-angle-down"></span>
                                        </a>
                                        --> <!-- <ul class="dropdown-menu btn-xs">
                                            <li> <a href="#">(€)&nbsp;Euro</a></li>
                                            <li> <a href="#">(£)&nbsp;Pounds    </a></li>
                                            <li> <a href="#">($)&nbsp;US Dollar </a></li>
                                        </ul> -->
                                    </form>
                                </div>
                            </li>   
                            <!-- <li class="language">
                                <div class="btn-group languages-block ">
                                    <form action="https://demo.smartaddons.com/templates/html/autoparts/index.html" method="post" enctype="multipart/form-data" id="bt-language">
                                        <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                            <img src="{{URL::to('/')}}/Userassets/image/catalog/flags/gb.png" alt="English" title="English">
                                            <span class="eng">English</span>
                                            <span class="fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index-2.html"><img class="image_flag" src="{{URL::to('/')}}/Userassets/image/catalog/flags/gb.png" alt="English" title="English" /> English </a></li>
                                            <li> <a href="html_with_RTL/index.html"> <img class="image_flag" src="{{URL::to('/')}}/Userassets/image/catalog/flags/ar.png" alt="Arabic" title="Arabic" /> Arabic </a> </li>
                                        </ul>
                                    </form>
                                </div>
                                
                            </li> -->
                        </ul>
                        <ul class="top-log list-inline"> 
                            @if(Session::has('id'))     
                               <li><p>Welcome<strong> {{ Session::get("name") }}</strong> !</p></li>
                                <li><i class="fa fa-sign-out"></i><a onclick="window.location='/logout'" data-toggle="modal" data-target="#myModal2">Logout</a></li>
                                <?php
                                        $res2 = mysqli_query($conn,$query2);
                                        $row2 = mysqli_fetch_array($res2);
                                        $prod_count = $row2[0];
                                ?>
                            @else                   
                                <li><i class="fa fa-lock"></i><a href="/Users/Login">Login</a></li> /<li><a href="/Users/Login/Register">Register</a></li>
                            @endif 
                        </ul>
                    </div>
                </div>
            </div>      
        </div>
        <div class="header-middle">
            <div class="container">
                <div class="row">           
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <div class="logo">
                            <a href="/Users/Home"><img src="{{URL::to('/')}}/Userassets/image/catalog/logo.png" title="Your Store" alt="Your Store" /></a>
                        </div>
                        
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 middle-right">
                        <div class="search-header-w">
                            <div class="icon-search hidden-lg hidden-md"><i class="fa fa-search"></i></div>                                
                              
                            <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                                <form method="GET" action="https://demo.smartaddons.com/templates/html/autoparts/index.html">
                                    <!-- <div id="search0" class="search input-group form-group"> -->
                                        <!-- <div class="select_category filter_type  icon-select hidden-sm hidden-xs">
                                            <select class="no-border" name="category_id">
                                                <option value="0">All Categories</option>
                                                <option value="78">Apparel</option>
                                                <option value="77">Cables &amp; Connectors</option>
                                                <option value="82">Cameras &amp; Photo</option>
                                                <option value="80">Flashlights &amp; Lamps</option>
                                                <option value="81">Mobile Accessories</option>
                                                <option value="79">Video Games</option>
                                                <option value="20">Jewelry &amp; Watches</option>
                                                <option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earings</option>
                                                <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding Rings</option>
                                                <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men Watches</option>
                                            </select>
                                        </div>
 -->
                                       <!--  <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search..." name="search">
                                
                                        <button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button> -->
                                    
                                   <!--  </div> -->
                                    <input type="hidden" name="route" value="product/search" />
                                </form>
                            </div>
                        </div>
                    @if(Session::has('id'))
                        <div class="shopping_cart">
                            <div id="cart" class="btn-shopping-cart">

                                <a data-loading-text="Loading... " class="btn-group top_cart " data-toggle="dropdown" aria-expanded="true" onclick="window.location='/Users/Cart'">
                                    <div class="shopcart">
                                        <span class="icon-c">
                                            <i class="fa fa-shopping-basket"></i>
                                        </span>
                                        <div class="shopcart-inner">
                                            <p class="text-shopping-cart" >
                                                My cart
                                            </p>

                                            <span class="total-shopping-cart cart-total-full">
                                            <span class="items_cart"><?php echo $prod_count; ?></span><span class="items_cart2"> item(s)</span>
                                            <?php 
    $conn = mysqli_connect("localhost","root","","vehicle_db");
    $uid = Session::get("id");
    $query = "select * from catagories";
    $query1 = "select * from tbl_cart c, parts p where c.part_id=p.part_id and c.user_id=$uid";
    $query2 = "select count(cart_id) from tbl_cart where user_id=$uid";
    $res = mysqli_query($conn,$query);
    $res1 = mysqli_query($conn,$query1);
?>
                                                 <?php 
                                                 $total=0;
                                                // if(mysqli_num_rows($res>0))
                                                 // {
                                                        while($row1=mysqli_fetch_array($res1))
                                                        {
                                                             $total=$total + ($row1["price"]*$row1["qty"]);
                                                        }
                                                            ?>
                                            <span class="items_carts">₹<?php echo $total;?></span>
                                            </span>
                                        </div>
                                    </div>
                                </a>

                                <ul class="dropdown-menu pull-right shoppingcart-box" role="menu">
                                    <li>
                                        <table class="table table-striped">
                                            <tr>
                                                <td><strong>Image</strong></td>
                                                <td><strong>Part</strong></td>
                                                <td><strong>Quantity</strong></td>
                                                <td><strong>Price</strong></td>
                                                <td><strong>Amount</strong></td>
                                            </tr>
                                            <tbody>
                                                 <?php 
    $conn = mysqli_connect("localhost","root","","vehicle_db");
    $uid = Session::get("id");
    $query = "select * from catagories";
    $query1 = "select * from tbl_cart c, parts p where c.part_id=p.part_id and c.user_id=$uid";
    $query2 = "select count(cart_id) from tbl_cart where user_id=$uid";
    $res = mysqli_query($conn,$query);
    $res1 = mysqli_query($conn,$query1);
?>
                                            <?php 
                                            $total=0;
                                                // if(mysqli_num_rows($res>0))
                                                 // {
                                                        while($row1=mysqli_fetch_array($res1))
                                                        {
                                                              $total=$total + ($row1["price"]*$row1["qty"]);
                                                            ?>

                                                <tr>
                                                    <td class="text-center" style="width:100px">
                                                        <a href="product.html">
                                                            <img src="{{URL::to('/')}}/part_img/<?php echo $row1["img2"];?>" style="width:100px;" class="preview">
                                                        </a>
                                                    </td>
                                                    <td class="text-left"> <a class="cart_product_name"><?php echo $row1['part_name']; ?></a> 
                                                    </td>
                                                    <td class="text-center">x<?php echo $row1['qty']; ?></td>
                                                    <td class="text-center">₹<?php echo $row1['price']; ?></td>
                                                    <td class="text-center">₹<?php echo $row1['price']*$row1['qty']; ?></td>
                                                </tr>
                                                <?php
                                                    } 
                                                ?>
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <div>
                                            <table class="table table-bordered">
                                                <tbody>
                                                   
                                                    <tr>
                                                        <td class="text-left"><strong>Total</strong>
                                                        </td>
                                                        <td class="text-right">₹ <?php echo $total; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="text-right"> <a class="btn view-cart" href="/Users/Cart"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <!-- <a class="btn btn-mega checkout-cart" href="/Users/Checkout"><i class="fa fa-share"></i>Checkout</a>  -->
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @else
                        @endif
                        <!-- <div class="wishlist hidden-md hidden-sm hidden-xs"><a href="#" id="wishlist-total" class="top-link-wishlist" title="Wish List (0) "><i class="fa fa-heart"></i></a></div> -->
                                         
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom hidden-compact"> 
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="menu-vertical-w">   
                            <div class="responsive so-megamenu megamenu-style-dev ">
                                <div class="so-vertical-menu ">
                                    <nav class="navbar-default">    
                                        
                                        <div class="container-megamenu vertical">
                                            <div id="menuHeading">
                                                <div class="megamenuToogle-wrapper">
                                                    <div class="megamenuToogle-pattern">
                                                        <div class="container">
                                                            <div>
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </div>
                                                            All Categories                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         
                                            <div class="navbar-header">
                                                <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">      
                                                    <i class="fa fa-bars"></i>
                                                    <span>  All Categories     </span>
                                                </button>
                                            </div>
                                            <div class="vertical-wrapper" >
                                                <span id="remove-verticalmenu" class="fa fa-times"></span>
                                                <div class="megamenu-pattern">
                                                    <div class="container-mega">
                                                        
                                                        <ul class="megamenu">
                                                            <?php 
                                                                // if(mysqli_num_rows($res>0))
                                                                // {
                                                                    while($row=mysqli_fetch_assoc($res))
                                                                    {

                                                            ?>
                                                            <li class="item-vertical  with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                                                <input type="hidden" name="catid" value="<?php echo $row['catagory_id'] ?>"/>
                                                             <a  href="/Users/Catagories/<?php echo $row['catagory_id'] ?>" class="clearfix">     
                                                             
                                                                    <span><?php echo $row['catagory_name']; ?></span>

                                                                    <!-- <b class="fa-angle-right"></b> -->
                                                                </a>
                                                               
                                                                </li>
                                                                <?php }
                                                                ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </nav>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
                        <div class="main-menu-w">
                            <div class="responsive so-megamenu megamenu-style-dev">
                                <nav class="navbar-default">
                                    <div class=" container-megamenu  horizontal open ">
                                        <div class="navbar-header">
                                            <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        
                                        <div class="megamenu-wrapper">
                                            <span id="remove-megamenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container-mega">
                                                    <ul class="megamenu" data-transition="slide" data-animationtime="250">
                                                        <li class="">
                                                            <a href="/Users/Home">Home <!-- <b class="caret"></b> --></a>
                                                          </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="/Users/Catagories" class="clearfix">
                                                                <strong>SHOP</strong>         
                                                                <!-- <b class="caret"></b> -->
                                                            </a>
                                                           
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="/Users/Packages" class="clearfix">
                                                                <strong>SERVICES</strong>
                                                                <b class="caret"></b>
                                                            </a>
                                                           
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>PARTNERS</strong>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 23%;">
                                                                <div class="content" >
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <ul class="row-list">
                                                                                
                                                                                <li><a class="subcategory_item" href="/Users/InsuranceCompany">Insurance&nbsp;Companies</a></li>
                                                                                <li><a class="subcategory_item" href="/Users/RTOAgent">RTO&nbsp;Agents</a></li>
                                                                                <li><a class="subcategory_item" href="/Users/TrainingSchool"> Training&nbsp;Schools</a></li>
                                                                                <!-- <li><a class="subcategory_item" href="/Users/Packages"> Subscription</a></li>
                                                                             -->
                                                                            </ul>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                
                                                        
                                                        
                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="/Users/Mechanic" class="clearfix">
                                                                <strong>MECHANICS</strong>
                                             
                                                            </a>
                                                @if(Session::has('id'))
                                                <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>MY ACCOUNT</strong>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 23%; ">
                                                                <div class="content" >
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <ul class="row-list">
                                                                                
                                                                                <li><a class="subcategory_item" href="/Users/Track/track"> Track&nbsp;Order</a></li>
                                                                                <li><a class="subcategory_item" href="/Users/Order/OrderHistory"> Order&nbsp;History</a></li>
                                                                                <li><a class="subcategory_item" href="/Users/Tow/towHistory">Previous&nbsp;Tow&nbsp;Requests</a></li>
                                                                                <!-- <li><a class="subcategory_item" href="banner-effect.html"> Product&nbsp;Returns</a></li> -->
                                                                                <li><a class="subcategory_item" href="/Users/Service/serviceHistory">Previous&nbsp;Services</a></li>
                                                                                <li><a class="subcategory_item" href="/Users/OldVehicle/myads"> My Ads</a></li>
                                                                                <!-- <li><a class="subcategory_item" href="banner-effect.html"> Subscription</a></li> -->
                                                                            
                                                                            </ul>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                </li>
                                                       
                                                <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="/Users/Tow" class="clearfix">
                                                                <strong>TOW</strong>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 30%; ">
                                                                <div class="content" >
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <ul class="row-list">
                                                                                
                                                                                <li><a class="subcategory_item" href="/Users/Tow"> New&nbsp;Request</a></li>
                                                                                <li><a class="subcategory_item" href="/Users/Tow/track">Tow&nbsp;Status</a></li>        
                                                                               <!--  <li><a class="subcategory_item" href="contact.html">Estimate&nbsp;Towing&nbsp;Charges</a></li>  -->       
                                                                            </ul>
                                                                        </div> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                </li>
                                                @endif
                                               
                                                        </li>
                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="/Users/News" class="clearfix">
                                                                <strong>News</strong>
                                                                <span class="label"></span>
                                                            </a>
                                                        </li>
                                                        
                                                        
                                                    </ul>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  

        </div>

    </header>
    <!-- //Header Container  -->
    
   
<!-- Main Container  -->
                                            <?php 
    $conn = mysqli_connect("localhost","root","","vehicle_db");
    $uid = Session::get("id");
    $query = "select * from catagories";
    $query1 = "select * from tbl_cart c, parts p where c.part_id=p.part_id and c.user_id=$uid";
    $query2 = "select count(cart_id) from tbl_cart where user_id=$uid";
    $res = mysqli_query($conn,$query);
    $res1 = mysqli_query($conn,$query1);
?>
<div class="main-container">


    @if(Session::has('id'))
    <div id="content">
<a href="/Users/OldVehicle" class="subcategory_item float"  onclick="window.location='/Users/OldVehicle/oldvehicle/{{ Session::get('id') }}';">
    <p class="my-float"><strong>BUY / SELL USED VEHICLE</strong></p>
    </a>
</div>
   @else
  
    <div id="content">
    <a  class="subcategory_item float" data-toggle="modal" data-target="#myModal1" >
    <p class="my-float"><strong>BUY / SELL USED VEHICLE</strong></p>
    </a>
</div>
@endif
@yield('main-section')
<!-- //Main Container -->

    <!-- Footer Container -->
 <footer class="footer-container typefooter-1">
        <!-- Footer Top Container -->
        <br/>
        <div class="row-top">
            <div class="block-services container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-margin1">
                        <div class="icon-service">
                            <div class="icon"><i class="pe-7s-car">&nbsp;</i></div>
                            <div class="text">
                                <h6>Free shipping</h6>
                                <p class="no-margin">On all orders over $99.00</p>
                            </div>
                        </div>
                    </div>        
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-margin1">
                        <div class="icon-service">
                            <div class="icon"><i class="pe-7s-refresh-2">&nbsp;</i></div>
                            <div class="text">
                                <h6>30 days return</h6>
                                <p class="no-margin">You have 30 days to return</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-margin">
                        <div class="icon-service">
                            <div class="icon"><i class="pe-7s-door-lock">&nbsp;</i></div>
                            <div class="text">
                                <h6>Safe Shopping<br></h6>
                                <p class="no-margin">Payment 100% secure</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="icon-service">
                            <div class="icon"><i class="pe-7s-users">&nbsp;</i></div>
                            <div class="text">
                                <h6>Online support</h6>
                                <p class="no-margin">Contact us 24 hours a day</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /Footer Top Container -->

        <!-- Footer middle Container -->
        <div class="container">
            <div class="row footer-middle">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-style">
                    <div class="box-footer box-infos">
                        <div class="module">
                            <h3 class="modtitle">Contact us</h3>
                            <div class="modcontent">
                                <ul class="list-icon">
                                    <li><span class="icon pe-7s-map-marker"></span>5611 Wellington Road, Suite 115, Gainesville, VA 20155</li>
                                    <li><span class="icon pe-7s-call"></span> <a href="#">1800200(25)(26)(27)</a></li>
                                    <li><span class="icon pe-7s-mail"></span><a href="mailto:contact@opencartworks.com">vvkdevelopers@gmail.com</a></li>
                                    <li><span class="icon pe-7s-alarm"></span>7 Days a week from 10-00 am to 6-00 pm</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-style">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-style">
                            <div class="box-information box-footer">
                                <div class="module clearfix">
                                    <h3 class="modtitle">Information</h3>
                                    <div class="modcontent">
                                        <ul class="menu">
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">FAQ</a></li>
                                            <li><a href="#">Warranty And Services</a></li>
                                            <li><a href="#">Support 24/7 page</a></li>
                                            <li><a href="#">Product Registration</a></li>
                                            <li><a href="/Users/Feedback">Feedback</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-style">
                            <div class="box-account box-footer">
                                <div class="module clearfix">
                                    <h3 class="modtitle">My Account</h3>
                                    <div class="modcontent">
                                        <ul class="menu">
                                            <li><a href="#">Brands</a></li>
                                            <li><a href="#">Gift Certificates</a></li>
                                            <li><a href="#">Affiliates</a></li>
                                            <li><a href="#">Specials</a></li>
                                            <li><a href="#">FAQs</a></li>
                                            <li><a href="#">Custom Link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-clear">
                            <div class="box-service box-footer">
                              <div class="module clearfix">
                                <h3 class="modtitle">Categories</h3>
                                <div class="modcontent">
                                  <ul class="menu">
                                    <li><a href="#">Event & Party Supplies</a></li>
                                    <li><a href="#">Home Improvement</a></li>
                                    <li><a href="#">Lamps & Light Fixtures</a></li>
                                    <li><a href="#">Kitchen & Bath Fixtures</a></li>
                                    <li><a href="#">Customer Service</a></li>
                                    <li><a href="#">Kitchen & Dining</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-dark">
                <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12 col-socials">
                    <ul class="socials">
                        <li class="facebook"><a href="https://www.facebook.com/smartaddons.page" target="_blank"><i class="fa fa-facebook"></i></a></li>&nbsp;
                        <li class="twitter"><a href="https://twitter.com/smartaddons" target="_blank"><i class="fa fa-twitter"></i></a></li>&nbsp;
                        <li class="google_plus"><a href="https://plus.google.com/u/0/+Smartaddons/posts" target="_blank"><i class="fa fa-google-plus"></i></a></li>&nbsp;
                        <li class="pinterest"><a href="https://www.pinterest.com/smartaddons/" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>&nbsp;
                        <li class="instagram"><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <!-- <li class="Youtube"><a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a></li> -->
                    </ul>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                    <div class="module newsletter-footer1">
                        <div class="newsletter">
                            <h3 class="modtitle">Sign Up for Newsletter</h3>
                            <div class="block_content">
                                <form method="post" id="signup" name="signup" class="form-group form-inline signup send-mail">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input type="email" placeholder="Your email address..." value="" class="form-control" id="txtemail" name="txtemail" size="55">
                                        </div>
                                        <div class="subcribe">
                                            <button class="btn btn-primary btn-default font-title" type="submit" onclick="return subscribe_newsletter();" name="submit">
                                                <span>Subscribe</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>     
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /Footer middle Container -->
        
        <div class="footer-bottom">        
            <div class="container">
                <div class="row">
                    <div class="copyright col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <p>Autoparts © 2019 Demo Store. All Rights Reserved. Designed by <a href="http://www.opencartworks.com/" target="_blank">OpenCartWorks.Com</a></p>
                    </div>                 
                    <div class="payment-w col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <img src="{{URL::to('/')}}/Userassets/image/catalog/demo/payment/payment.png" alt="imgpayment">
                    </div>
                </div>
            </div>            
        </div>
        <!-- /Footer Bottom Container -->
        
        
            <!--Back To Top-->
        <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
    </footer>

    <!-- //end Footer Container -->
    </div>
   
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!-- <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h2 class="modal-title" id="myModalLabel">New to Servaxo?</h2>
                        </div> -->
                        <!-- <div class="modal-body"> -->
                            <section class="popup-graybox">
                            <div class="coupon-popup-sec" >
                              <div class="coupon-content" style="background-color: #fff;">
                                <h4 style="color: #332d27;">New To Servaxo??</h4>
                                  <div class="main_content">
                                     <div class="coupon-brdr-sec1">
                                      <h3 data-edit="text">Be a</h3>
                                       <h2 data-edit="text" style="color: #332d27;">User</h2>
                                       <!-- <h6>&emsp;</h6> -->
                                     </div>
                                     <div class="coupon-brdr-sec2">

                                       <button class="code-now-btn" data-edit="button" onclick="window.location='/Users/Login/Register'">Sign-up </button>
                                     </div>
                                  </div>
                                <button class="coupon-cls-btn" data-dismiss="modal">
                                    <i class="fa fa-times"></i>
                                </button>
                                <p style="color: #332d27;">And get exciting offers on our products, enable towing service and many more....</p>
                              </div>
                            </div>
                            </section>
                        <!-- </div> -->
                        <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger">Log in</button>
                        </div> -->
                    </div>
                </div>
            </div>


@yield('js-section')

</body>

<!-- Mirrored from demo.smartaddons.com/templates/html/autoparts/home2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Mar 2021 08:06:32 GMT -->
</html>
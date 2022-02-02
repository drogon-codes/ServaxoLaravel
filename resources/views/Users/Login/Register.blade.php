@extends('Users.Layout.base')

@section('title')
Register
@endsection

@section('css-section')
<link rel="shortcut icon" type="image/png" href="{{URL::to('/')}}/Userassets/ico/favicon-16x16.png"/>
     <link rel="stylesheet" href="{{URL::to('/')}}/log/css/style.css"> 
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
   
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
<script src="{{URL::to('/')}}/Userassets/js/assets/libs/jquery/jquery.min.js"></script>
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

<script src="{{URL::to('/')}}/log/js/jquery.min.js"></script>
<script src="{{URL::to('/')}}/log/js/popper.js"></script>
<script src="{{URL::to('/')}}/log/js/bootstrap.min.js"></script>
<script src="{{URL::to('/')}}/log/js/main.js"></script>
<script src="{{URL::to('/')}}/Userassets/js/jquery.validate.min.js"></script>
<script src="{{URL::to('/')}}/Userassets/js/additional-methods.min.js"></script>

<script>
    setTimeout(function()
    {
        $('#myModal').modal('hide')
        $('#myModal.modal-backdrop').hide() // for black background
    }, 3000);

    $("#form1").validate
    ({
        rules:
        {
            txtfirstname:
            {
                required:true,
                lettersonly:true
            },
            txtlastname:
            {
                required:true,
                lettersonly:true
            },
            txtemail:
            {
                required:true,
                email:true
            },
            txtcontactno:
            {
                required:true,
                number:true,
                maxlength:10
            },
            txtpassword:
            {
                required:true,
                minlength:8
            }
        },
        messages:
        {
            txtfirstname:
            {
                required:"Please Enter Your Name",
                lettersonly:"Please Enter a valid Name"
            },
            txtlastname:
            {
                required:"Please Enter Your Name",
                lettersonly:"Please Enter a valid Name"
            },
            txtemail:
            {
                required:"Please Enter Your Email Address",
                email:"Please Enter a valid Email Address"
            },
            txtcontactno:
            {
                required:"Please Enter Phone Number",
                number:"Please Enter Valid Phone Number",
                maxlength:"Phone Number Must Be Of 10 Characters"
            },
            txtpassword:
            {
                required:"Please Enter Password",
                minlength:"Password Must Be Of Minimum 8 Letters"
            }
        }
    });
</script>

@endsection


@section("main-section")
   <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="/Users/Home"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Account</a></li>
            <li><a href="/Users/Register">Register</a></li>
        </ul>
        
         <div class="row">
            <div id="content" class="col-sm-12">
                
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <div class="wrap d-md-flex">
                        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                            <div class="text w-100">
                                <h2>Welcome to Servaxo</h2>
                                <p>Already have an account?</p>
                                <a href="/Users/Login" class="btn btn-white btn-outline-white">Sign In</a>
                            </div>
                         </div>
                        <div class="login-wrap p-4 p-lg-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-4"><b>Register</b></h3>
                        </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                    </div>
                        <form id="form1" action="/registeruser" method="post" enctype="multipart/form-data" >
                        <div class="form-group mb-2">
                            <div class="col-sm-6">
                            <label class="label" for="name">First name</label>
                            <input type="text" id="txtfirstname" name="txtfirstname" class="form-control" placeholder="First name">
                            </div>
                            <div class="col-sm-6">
                            <label class="label" for="name">Last name</label>
                            <input type="text" id="txtlastname" name="txtlastname" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">&nbsp;
                         <div class="form-group mb-2">
                            <div class="col-sm-12">
                             <label class="label" for="email">Email</label>
                            <input type="text" id="txtemail" name="txtemail" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        &nbsp;
                        <div class="form-group mb-2">
                            <div class="col-sm-12">
                            <label class="label" for="name">Contact No</label>
                            <input type="tel" id="txtcontactno"  name="txtcontactno" class="form-control" placeholder="Contact No">
                            </div>
                        </div>
                        &nbsp;
                        <div class="form-group mb-2">
                            <div class="col-sm-12">
                            <label class="label" for="name">Password</label>
                            <input type="Password" id="txtpassword" name="txtpassword" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        &nbsp;
                       <!-- <div class="form-group mb-3">
                            <label class="label" for="name">OTP</label>
                            <input type="text"  name="txtotp" class="form-control" placeholder="OTP" required>
                        </div>
                        -->
                    <div class="form-group">
                   @if(Session::has('id'))
                        <button type="button" data-toggle="modal" data-target="#myModal" class="form-control btn btn-primary submit px-3" >Register</button>
                    @else
                        <button type="submit" class="form-control btn btn-primary submit px-3" >Register</button>
                    @endif
                    </div>
                    <div class="form-group d-md-flex">
                       <!--  <div class="w-50 text-left">
                            <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                      <input type="checkbox" >
                                      <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">Forgot Password</a>
                                    </div>
                    </div> -->
                  </form>
                </div>
              </div>
                </div>
            </div> 
        </div>

       
    </div>
     </div>
</div>
</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">     
                        <div class="modal-body">
                            <button type="button" style="" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h2 style="color : red;">Alert!</h2>
                           <!-- <center><img src="{{URL::to('/')}}/Userassets/image/check-circle.gif" height="50" width="50"><center> -->
                            <br/>
                            <h3>User Already Registered</h3>
                            <h5></h5>
                        </div>
                    </div>
                </div>
            </div>


@endsection
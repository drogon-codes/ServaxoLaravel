<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Dec 2020 08:07:58 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{URL::to('/')}}/assets/images/iconServaxo.png">

        <!-- Bootstrap Css -->
        <link href="{{URL::to('/')}}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{URL::to('/')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{URL::to('/')}}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    </head>
    <!-- <style type="text/css">
        .bgimg
        {
            background-image:url("car1.jpg");

        }

    </style>
 -->
<body>   
    <div style="background-image: url('{{URL::to('/')}}/assets/images/car2.jpg'); background-position: center; background-size: cover; position: relative; background-repeat: no-repeat; height: 690px;" >
        <div class="account-pages my-5 pt-sm-5">
            <div class="container" >
                <div class="row justify-content-right">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden" >
                            <div class="bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-danger font-size-18"><b>Welcome To SERVAXO</h5>
                                            <p class="text-secondary">Sign in to continue to vehicle zone.</b></p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <!-- <img src="{{URL::to('/')}}/assets/images/profile-img.png" alt="" class="img-fluid"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    <a href="index.html">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{URL::to('/')}}/assets/images/iconServaxo.png" alt="" class="rounded-circle" height="36">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
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
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <i class="mdi mdi-exclamation-thick mr-2"></i>
                                                {{ Session::get('message') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            </div>
                                            @endif
                                    <form class="form-horizontal" method="post" action="/checklogin" id="form1">
        
                                        <div class="form-group">
                                            <label for="username" >Username</label>
                                            <input type="text"   class="form-control text-Dark" id="username" name="username" placeholder="Enter username">
                                        </div>
                                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input type="password"    class="form-control text-dark" id="userpassword" name="userpassword" placeholder="Enter password">
                                        </div>
                
                                        <!-- <div class="custom-control custom-checkbox custom-checkbox-danger ">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label"  for="customControlInline">Remember me</label>
                                        </div> -->
                                        
                                        <div class="mt-3">
                                            <button class="btn btn-danger btn-block waves-effect waves-light"  type="submit">Log In</button>
                                        </div>
            

                                       <!--  <div class="mt-4 text-center ">
                                            <a href="/admin/ForgetPassword"  class="text-dark"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                        </div> -->
                                    </form>
                                </div>
            
                            </div>
                        </div>

                        &nbsp;
                        &nbsp;
                        <div class="mt-5 text-center">
                            <div>
                               <b> <p style="color: white;">© <script>document.write(new Date().getFullYear())</script> Vivekanand College <i class="mdi mdi-heart text-danger"></i> by Abhinav Aducation Trust</p>
                               </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- JAVASCRIPT -->
        <script src="{{URL::to('/')}}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/node-waves/waves.min.js"></script>
        <script src="{{URL::to('/')}}/assets/js/jquery.validate.min.js"></script>
        <script src="{{URL::to('/')}}/assets/js/additional-methods.min.js"></script>
       <script type="text/javascript">
            $("#form1").validate({
                rules:
                {
                    username:
                    {
                        required:true
                    },
                    userpassword:
                    {
                        required:true
                    }
                },
                messages:
                {
                    username:
                    {
                        required:"Please Enter Username"
                    },
                    userpassword:
                    {
                        required:"Please Enter Password"
                    }
                }
            });
        </script>
 <!-- App js -->
        <script src="{{URL::to('/')}}/assets/js/app.js"></script>
</body>

<!-- Mirrored from themesbrand.com/skote/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Dec 2020 08:07:58 GMT -->

</html>

@extends('Users.Layout.base')

@section('title')
Order Information
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
                <li><a href="#">Order Infomation</a></li>
            </ul>
            
            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-12">
                    <h2 class="title">Order Information</h2>

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td colspan="2" class="text-left">Order Details</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orderhistorydata as $item)
                            <tr>
                                <td style="width: 50%;" class="text-left">
                                 <b>Order ID:</b> #{{ $item->order_id }}
                                    <br>
                                    <b>Date & Time Of Order:</b>
                                     {{ $item->order_datetime }}
                                </td>
                                <td style="width: 50%;" class="text-left">
                                     <b>Customer Name:</b> {{ $item->name }}
                                    <br>
                                    <b>Payment Method:</b> {{ $item->paymode }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td style="width: 50%; vertical-align: top;" class="text-left">Address</td>
                                <td style="width: 50%; vertical-align: top;" class="text-left">Payment Details</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orderhistorydata as $item)
                            <tr>
                                <td class="text-left">{{ $item->addressline1 }}
                                    <br>
                                    {{ $item->addressline2 }}
                                    <br>
                                    Near {{ $item->landmark }}
                                    <br>
                                    {{ $item->city_name }}&nbsp;-&nbsp;{{ $item->pincode }}
                                </td>
                                <td class="text-left">
                                    <b>Total Payment:</b> ₹ {{ $item->total_payment }}
                                    <br>
                                    <b>Payment Method:</b> {{ $item->paymode }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <td class="text-left">Product Name</td>
                                    <td class="text-left">Model</td>
                                    <td class="text-right">Quantity</td>
                                    <td class="text-right">Price</td>
                                    <td class="text-right">Total</td>
                                    <td style="width: 20px;"></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orderinfodata as $item)
                                <tr>
                                    <td class="text-left">{{ $item->part_name }} </td>
                                    <td class="text-left">{{ $item->model_name }} </td>
                                    <td class="text-right">{{ $item->qty }} </td>
                                    <td class="text-right">₹ {{ $item->price }}</td>
                                    <td class="text-right">₹ {{ $item->price *  $item->qty }}</td>
                                    <td style="white-space: nowrap;" class="text-right"> <a class="btn btn-primary" title="" data-toggle="tooltip" href="#" data-original-title="Reorder"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="btn btn-danger" title="" data-toggle="tooltip" href="return.html" data-original-title="Return"><i class="fa fa-reply"></i></a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <!-- <tr>
                                    <td colspan="3"></td>
                                    <td class="text-right"><b>Shipping</b>
                                    </td>
                                    <td class="text-right"></td>
                                    <td></td>
                                </tr> -->
                                <?php $tot=0;?>
                                @foreach($orderinfodata as $item)
                                <?php $tot=$tot + ($item->price *  $item->qty)
                                ;?>
                                @endforeach
                                <tr>
                                    <td colspan="3"></td>
                                    <td class="text-right"><b>Total</b>
                                    </td>
                                    <td class="text-right">₹ <?php echo $tot;?></td>
                                    <td></td>
                                </tr>
                                
                            </tfoot>
                        </table>
                    </div>
                    
                    <div class="buttons clearfix">
                        <div class="pull-right"><a class="btn btn-primary" onclick="window.location='/Users/Order/OrderHistory'">< Back</a>
                        </div>
                    </div>



                </div>
                <!--Middle Part End-->
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



@extends('Users.Layout.base')

@section('title')
Order History
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
        <div class="col-sm-2">&nbsp;</div>
        <div class="col-sm-8">
            @if(Session::get('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <i class="fa fa-check mr-2"></i>
                 {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        </div>
        <div class="col-sm-2">&nbsp;</div>
        <div class="main-container container">
            <ul class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i></a></li>
                <li><a href="#">Order History</a></li>
            </ul>
            
            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-12">
                    <h2 class="title">Order History</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <td class="text-center">Order ID</td>
                                    <td class="text-center">Total Payment</td>
                                    <td class="text-center">Payment Mode</td>
                                    <td class="text-center">Addressline 1</td>
                                    <td class="text-center">Addressline 2</td>
                                    <td class="text-center">Landmark</td>
                                    <td class="text-center">City</td>
                                    <td class="text-center">Status</td>
                                    <td class="text-center">Order Date & Time</td>
                                    <td class="text-center" colspan="2">Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orderhistorydata as $item)
                                <tr>
                                    <td class="text-center">#{{ $item->order_id }}</td>
                                    <td class="text-center">₹{{ $item->total_payment }}</td>
                                    <td class="text-center">{{ $item->paymode }}</td>
                                    <td class="text-center">{{ $item->addressline1 }}</td>
                                    <td class="text-center">{{ $item->addressline2 }}</td>
                                    <td class="text-center">{{ $item->landmark }}</td>
                                    <td class="text-center">{{ $item->city_name }}</td>
                                    @if($item->status=="delivered")
                                    <td class="text-center">
                                        <div class="btn-success">&nbsp;{{ $item->status }}&nbsp;</div>
                                    </td>
                                    @elseif($item->status=="cancelled")
                                    <td class="text-center">
                                        <div class="btn-danger">&nbsp;{{ $item->status }}&nbsp;</div>
                                    </td>
                                    @elseif($item->status=="pending")
                                    <td class="text-center">
                                        <div class="btn-warning">&nbsp;ordered&nbsp;</div>
                                    </td>
                                    @else
                                    <td class="text-center">
                                        <div class="btn-warning">&nbsp;{{ $item->status }}&nbsp;</div>
                                    </td>
                                    @endif
                                    <td class="text-center">{{ $item->order_datetime }}</td>
                                    <td class="text-center"><button type="button" class="btn btn-info" title="Get Details" data-toggle="tooltip" data-original-title="Get Details" style=" border-radius: 4px;" onclick="window.location='/Users/Order/OrderInformation/{{ $item->order_id }}'"><i class="fa fa-eye" style="font-size: 20px; padding-top: 2px;"></i></button>
                                    </td>
                                    @if($item->status=="processing"||$item->status=="shipped"||$item->status=="pending")
                                    <td class="text-center">
                                        <button type="button" data-id="{{ $item->order_id }}" data-toggle="modal" title="Cancel Order" data-original-title="Get Details" data-target="#myModal" title="Remove" class="btn btn-danger open-dialog" style=" border-radius: 4px;">Cancel Order
                                        </button>
                                    </td>
                                    @else
                                        <td class="text-center">
                                        --
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <!--Middle Part End-->
            </div>
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
                            <h3>This order will be cancelled. This action can't be undone</h3>
                        </div>
                        <div class="modal-footer">
                        <form method="post" action="/cancelOrder">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                        <input type="hidden" name="deleteid" id="deleteid"/>
                        <button class="btn btn-secondary" style="border-radius: 5px; font-size: 18px;" data-dismiss="modal">Back</button>
                        &nbsp;
                        <button class="btn btn-danger" style="border-radius: 5px; font-size: 18px;">Cancel Order</button>
                        </form>
                    </div>
                    </div>
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
        <script>
  $(document).on("click",".open-dialog",function(){
      var id = $(this).attr("data-id");
      $("#deleteid").val(id);
  });
</script>
@endsection



@extends('admin.layout.base')

@section('title')

Dashboard

@endsection


@section('css')
<link rel="shortcut icon" href="{{URL::to('/')}}/assets/images/favicon.ico">

<!-- Bootstrap Css -->
<link href="{{URL::to('/')}}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{URL::to('/')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{URL::to('/')}}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

 <!-- DataTables -->
<link href="{{URL::to('/')}}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="{{URL::to('/')}}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{URL::to('/')}}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />     

<!-- Bootstrap Css -->
<link href="{{URL::to('/')}}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{URL::to('/')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{URL::to('/')}}/assets/css/app-dark.min.css" id="app-style" rel="stylesheet" type="text/css" />

@endsection


@section('main-content')
 <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                         <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-24">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                            <li class="breadcrumb-item active">{{ Session::get("name") }}</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- <div class="row"> -->
                            <!-- <div class="col-lg-12"> -->
                               
                            <!-- </div> -->
     
                    
                        <!-- end page title -->
                        <div class="bg-soft">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="text-primary p-3">
                                                    <h5 class="text-dark font-size-20"><b>Welcome To SERVAXO</b></h5>
                                                    <p> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                

                                            
                             <div class="row">
                            <div class="col-xl-4">
                                <div class="card overflow-hidden">
                                    <div class="bg-soft-primary">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="text-primary p-3">
                                                    <h5 class="text-primary">Welcome Back !</h5>
                                                    <p>Servaxo Dashboard</p>
                                                </div>
                                            </div>
                                            <div class="col-5 align-self-end">
                                                <img src="{{URL::to('/')}}/assets/images/profile-img.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="avatar-md profile-user-wid mb-4">
                                                    <img src="{{URL::to('/')}}/admin_img/{{ Session::get('profile') }}" alt="" class="img-thumbnail rounded-circle">
                                                </div>
                                                <h5 class="font-size-15 text-truncate">{{session::get('name')}}</h5>
                                                <p class="text-muted mb-0 text-truncate">UI/UX Designer</p>
                                            </div>

                                            <div class="col-sm-8">
                                                <div class="pt-4">

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5 class="font-size-15">125</h5>
                                                            <p class="text-muted mb-0">Projects</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5 class="font-size-15">$1245</h5>
                                                            <p class="text-muted mb-0">Revenue</p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <a href="#" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->

                            </div>

                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted font-weight-medium">Orders</p>
                                                        <h4 class="mb-0">{{$order1->count()}}</h4>
                                                    </div>

                                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                                        <span class="avatar-title">
                                                            <i class="bx bx-copy-alt font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted font-weight-medium">Total Amount</p>
                                                        <h4 class="mb-0">Rs.{{$orderdetail->sum('amount')}}</h4>
                                                    </div>

                                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bx-archive-in font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted font-weight-medium">Total Average Amount</p>
                                                        <h4 class="mb-0">Rs.{{$orderdetail->average('amount')}}</h4>
                                                    </div>

                                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted font-weight-medium">Total Qty</p>
                                                        <h4 class="mb-0">{{$orderdetail->sum('qty')}}</h4>
                                                    </div>

                                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bx-archive-in font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                               
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Social Source</h4>
                                        <div class="text-center">
                                            <div class="avatar-sm mx-auto mb-4">
                                                <span class="avatar-title rounded-circle bg-soft-primary font-size-24">
                                                        <i class="mdi mdi-facebook text-primary"></i>
                                                    </span>
                                            </div>
                                            <p class="font-16 text-muted mb-2"></p>
                                            <h5><a href="#" class="text-dark">Facebook - <span class="text-muted font-16">125 sales</span> </a></h5>
                                            <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus tincidunt.</p>
                                            <a href="#" class="text-primary font-16">Learn more <i class="mdi mdi-chevron-right"></i></a>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-4">
                                                <div class="social-source text-center mt-3">
                                                    <div class="avatar-xs mx-auto mb-3">
                                                        <span class="avatar-title rounded-circle bg-primary font-size-16">
                                                                <i class="mdi mdi-facebook text-white"></i>
                                                            </span>
                                                    </div>
                                                    <h5 class="font-size-15">Facebook</h5>
                                                    <p class="text-muted mb-0">125 sales</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="social-source text-center mt-3">
                                                    <div class="avatar-xs mx-auto mb-3">
                                                        <span class="avatar-title rounded-circle bg-info font-size-16">
                                                                <i class="mdi mdi-twitter text-white"></i>
                                                            </span>
                                                    </div>
                                                    <h5 class="font-size-15">Twitter</h5>
                                                    <p class="text-muted mb-0">112 sales</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="social-source text-center mt-3">
                                                    <div class="avatar-xs mx-auto mb-3">
                                                        <span class="avatar-title rounded-circle bg-pink font-size-16">
                                                                <i class="mdi mdi-instagram text-white"></i>
                                                            </span>
                                                    </div>
                                                    <h5 class="font-size-15">Instagram</h5>
                                                    <p class="text-muted mb-0">104 sales</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-5">Activity</h4>
                                 
                                        <ul class="verti-timeline list-unstyled">
                                                   @foreach($order as $d)
                                            @if($d->status=='pending')
                                            <li class="event-list">
                                                <div class="event-timeline-dot">
                                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                                </div>
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <h5 class="font-size-14">{{$order->count('order_id')}}<i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i></h5>
                                                    </div>
                                                    <div class="media-body">
                                                        <div>
                                                            New Order
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endif
                                             @if($d->status=='processing')
                                            <li class="event-list">
                                                <div class="event-timeline-dot">
                                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                                </div>
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <h5 class="font-size-14"> {{$order->count('order_id')}}<i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i></h5>
                                                    </div>
                                                    <div class="media-body">
                                                        <div>
                                                            Process Order
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endif
                                            @if($d->status=='shipped')
                                            <li class="event-list">
                                                <div class="event-timeline-dot">
                                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                                </div>
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <h5 class="font-size-14">{{$order->count('order_id')}}<i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i></h5>
                                                    </div>
                                                    <div class="media-body">
                                                        <div>
                                                            Shipped Order
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endif
                                            @if($d->status=='completed')
                                            <li class="event-list">
                                                <div class="event-timeline-dot">
                                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                                </div>
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <h5 class="font-size-14">{{$order->count('order_id')}}<i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i></h5>
                                                    </div>
                                                    <div class="media-body">
                                                        <div>
                                                            Complete Order
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endif
                                            @if($d->status=='cancelled')
                                            <li class="event-list">
                                                <div class="event-timeline-dot">
                                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                                </div>
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <h5 class="font-size-14">{{$order1->count('order_id')}}<i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i></h5>
                                                    </div>
                                                    <div class="media-body">
                                                        <div>
                                                            Cancel Order
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endif
                                               @endforeach
                                        </ul>
                                    
                                        <div class="text-center mt-4"><a href="/admin/Order/ViewNewOrder" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ml-1"></i></a></div>
                                    </div>
                                </div>
                            </div>

                        
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Latest Transaction</h4>
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">

                                                <thead class="thead-light">
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>Order ID</th>
                                                        <th>Billing Name</th>
                                                        <th>Date</th>
                                                        <th>Total</th>
                                                        <th>Order Status</th>
                                                        <th>Payment Method</th>
                                                        <th>Payment</th>
                                                    </tr>
                                                </thead>
                                                @foreach($order as $index => $o)
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#{{++$index}}</a> </td>
                                                        <td>{{$o->name}}</td>
                                                        <td>
                                                           {{$o->order_datetime}}
                                                        </td>
                                                        <td>
                                                            {{$o->total_payment}}
                                                        </td>
                                                        <td>
                                                            @if($o->status=="pending")
                                                            <span class="badge badge-pill badge-soft-info font-size-12">{{$o->status}}</span>
                                                            @endif

                                                             @if($o->status=="processing")
                                                            <span class="badge badge-pill badge-soft-warning font-size-12">{{$o->status}}</span>
                                                            @endif

                                                             @if($o->status=="shipped")
                                                            <span class="badge badge-pill badge-soft-primary font-size-12">{{$o->status}}</span>
                                                            @endif

                                                             @if($o->status=="completed")
                                                            <span class="badge badge-pill badge-soft-success font-size-12">{{$o->status}}</span>
                                                            @endif

                                                             @if($o->status=="cancelled")
                                                            <span class="badge badge-pill badge-soft-danger font-size-12">{{$o->status}}</span>
                                                            @endif


                                                        </td>
                                                        <td>
                                                            <i class="mr-1"></i> {{$o->paymode}}
                                                        </td>
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light " data-toggle="modal" data-target="" data-id="{{ $o->order_id }}">
                                                                {{$o->ispay}}
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                @endforeach
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    
 @foreach($order as $s)

<div class="modal fade exampleModal" tabindex="-1" id="myModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="/showmodel">
                                    <input type="hidden" name="_token" value="<?php  echo csrf_token(); ?>"/>
                                    <input type="text"  name="deleteid" id="deleteid" />
                                     <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">No</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Yes </button>
                            </form>
                            <div class="modal-body">
                                <p class="mb-2">Product id: <span class="text-primary">#{{session::get('id')}}</span></p>
                                <p class="mb-4">Billing Name: <span class="text-primary">{{session::get('name')}}</span></p>

                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($orderdetail as $d)

                                            <tr>
                                                <th scope="row">
                                                    <div>
                                                        <img src="{{URL::to('/')}}/part_img/{{ $d->img1 }}" alt="" class="avatar-sm">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div>
                                                        <h5 class="text-truncate font-size-14">{{$d->part_name}}</h5>
                                                        <p class="text-muted mb-0">{{$d->price}} x {{$d->qty}}</p>
                                                    </div>
                                                </td>
                                                <td>{{$d->total_payment}}</td>
                                            </tr>
                                            @endforeach
                                           
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Sub Total:</h6>
                                                </td>
                                                <td>
                                                  {{$d->amount}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Shipping:</h6>
                                                </td>
                                                <td>
                                                    Free
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Total:</h6>
                                                </td>
                                                <td>
                                                   {{$d->amount}}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                   @endforeach 
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <!-- Modal -->
                <!-- end modal -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © VVK
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Vivekanand Student
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

@endsection



@section('js')

 <!-- JAVASCRIPT -->
        <script src="{{URL::to('/')}}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="{{URL::to('/')}}/assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="{{URL::to('/')}}/assets/js/pages/dashboard.init.js"></script>

        <!-- Required datatable js -->
        <script src="{{URL::to('/')}}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="{{URL::to('/')}}/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/jszip/jszip.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        
        <!-- Responsive examples -->
        <script src="{{URL::to('/')}}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="{{URL::to('/')}}/assets/js/pages/datatables.init.js"></script>  
        <script type="text/javascript">  
         $(document).on("click",".exampleModal",function(){
                var id = $(this).attr("data-id");
                $("#deleteid").val(id);
            });
        </script>

        <!-- App js -->
        <script src="{{URL::to('/')}}/assets/js/app.js"></script>


@endsection
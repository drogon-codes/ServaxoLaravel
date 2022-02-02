@extends('admin.layout.base')

@section('title')

Shipped Orders

@endsection


@section('css')
<!-- App favicon -->
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
        <link href="{{URL::to('/')}}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

@endsection

@section('main-content')
           <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Manage Orders - All Orders</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Manage Orders</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Shipped Orders</h4>
                                        <!-- <div class="text-right">
                                            <button type="button" class="btn btn-dark waves-effect waves-light" onclick="window.location='/admin/state/addstate';">Add State</button>
                                        </div> -->
                                        <p class="card-title-desc">&nbsp;
                                        </p>
        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>User Name</th>
                                                <th>Total Payment</th>
                                                <th>Payment Done</th>
                                                <th>Payment Mode</th>
                                                <th>Addressline 1</th>
                                                <th>Addressline 2</th>
                                                <th>Landmark</th>
                                                <th>Pincode</th>
                                                <th>City Name</th>
                                                <th>Status</th>
                                                <th>Date of Order</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($orderdata ?? '' as  $index => $row)
                                            <tr>
                                                <td>{{ ++$index }}</td>
                                                <td>{{ $row->name  }}</td>
                                                <td>{{ $row->total_payment  }}</td>
                                                 <td>{{ $row->ispay }}</td>
                                                 <td>{{ $row->paymode }}</td>
                                                 <td>{{ $row->addressline1 }}</td>
                                                 <td>{{ $row->addressline2 }}</td>
                                                 <td>{{ $row->landmark }}</td>
                                                 <td>{{ $row->pincode }}</td>
                                                 <td>{{ $row->city_name  }}</td>
                                                 <td><button data-id="{{ $row->order_id  }}" data-status="{{ $row->status }}" type="button" class="btn btn-outline-success btn btn-sm  waves-effect waves-light open-status-dialog" data-toggle="modal" data-target="#myModalstatus" value="Send for Complete">Send for Complete</button>
                                                    <button data-id="{{ $row->order_id  }}" data-status="{{ $row->status }}" type="button" class="btn btn-outline-danger btn btn-sm  waves-effect waves-light open-status-dialog1" data-toggle="modal" data-target="#myModalstatus1">Cancel order</button>
                                                 </td>
                                                 <td>{{ $row->order_datetime }}</td>
                                                <td>
                                                    <!-- <button type="button" class="btn btn-outline-primary btn btn-sm waves-effect waves-light">Edit</button> -->
                                                    <button data-id="{{ $row->order_id  }}" type="button" class="btn btn-outline-danger btn btn-sm  waves-effect waves-light open-dialog" data-toggle="modal" data-target="#myModal">Delete</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>

                <!-- End Page-content -->
                <div id="myModalstatus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myModalLabel">Warning!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Are you sure?</h5>
                                
                            </div>
                            <div class="modal-footer">
                                <form method="post" action="/ChangeOrderStatus">
                                <input type="hidden" id="stid" name="stid"/>
                                 <input type="hidden" id="txtstatus" name="txtstatus"/>
                                 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">No</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Yes</button>
                            </form>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                
                <!-- End Page-content -->
                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myModalLabel">Warning!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Are you sure?</h5>
                             
                            </div>
                            <div class="modal-footer">
                                <form method="post" action="/deleteshippedorder">
                                <input type="hidden" id="deleteid" name="deleteid"/>
                                 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">No</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Yes</button>
                            </form>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- End Page-content -->
               <div id="myModalstatus1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myModalLabel">Warning!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Are you sure?</h5>
                             
                            </div>
                            <div class="modal-footer">
                                <form method="post" action="/cancelorder">
                                <input type="hidden" id="stid1" name="stid1"/>
                                 <input type="hidden" id="txtstatus1" name="txtstatus1"/>
                                 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">No</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Yes</button>
                            </form>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                
              
            <!-- end main content-->

        </div>
@endsection

@section('footer')
      <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Vivekakand Students
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
@endsection

@section('js')
    <script src="{{URL::to('/')}}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/node-waves/waves.min.js"></script>

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
        <script>
            $(document).on("click",".open-dialog",function(){
                var id = $(this).attr("data-id");
                $("#deleteid").val(id);
            });
            $(document).on("click",".open-status-dialog",function(){
                var id = $(this).attr("data-id");
                 var status = $(this).attr("data-status");
                $("#stid").val(id);
                $("#txtstatus").val(status);
            });
            $(document).on("click",".open-status-dialog1",function(){
                var id = $(this).attr("data-id");
                 var status = $(this).attr("data-status");
                $("#stid1").val(id);
                $("#txtstatus1").val(status);
            });
        </script>
        <script src="{{URL::to('/')}}/assets/js/app.js"></script>
@endsection
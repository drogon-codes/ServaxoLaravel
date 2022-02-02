@extends('admin.layout.base')

@section('title')

View RTO Agent

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
                                    <h4 class="mb-0 font-size-18">Manage RTO Agent - All RTO Agent</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Manage RTO Agent</li>
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
        
                                        <h4 class="card-title">All RTO Agent</h4>
                                        <div class="text-right">
                                            <button type="button" class="btn btn-dark waves-effect waves-light" onclick="window.location='/admin/rtoagent/addagent';">Add RTO Agent</button>
                                        </div>
                                        <p class="card-title-desc">&nbsp;
                                        </p>
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
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                 <th>#</th>
                                                <th>Agent Name</th>
                                                <th>Contact No</th>
                                                <th>Email ID</th>
                                                <th>Agent Photo</th>
                                                <th>Agent Work</th>
                                                <th>Is active</th>
                                                <th>Registration DateTime</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                             @foreach($agentdata as  $index => $row)
                                             <tr>
                                                <td>{{ ++$index }}</td>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->contact }}</td>
                                                <td>{{ $row->email }}</td>
                                                 <td><img src="{{URL::to('/')}}/agent_img/{{ $row->photo}}" width="100" height="100"/></td>
                                                 <td>{{ $row->agent_work }}</td>
                                                 <td>
                                                    <button data-id="{{ $row->rtoagn_id }}" data-status="{{ $row->isactive  }}" type="button" class="btn btn-outline-success btn btn-sm  waves-effect waves-light open-status-dialog" data-toggle="modal" data-target="#myModalstatus">{{ $row->isactive }}</button>
                                                </td>
                                                 <!-- <td>{{ $row->isactive }}</td> -->
                                                 <td>{{ $row->reg_datetime }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-primary btn btn-sm waves-effect waves-light" onclick="window.location='/admin/rtoagent/updateagent/{{ $row->rtoagn_id }}';">Edit</button>
                                                     <button data-id="{{ $row->rtoagn_id  }}" type="button" class="btn btn-outline-danger btn btn-sm  waves-effect waves-light open-dialog" data-toggle="modal" data-target="#myModal">Delete</button>
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
                                <form method="post" action="/deleteagent">
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
                                <form method="post" action="/changeagentstatus">
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
        </script>
        <script src="{{URL::to('/')}}/assets/js/app.js"></script>
@endsection
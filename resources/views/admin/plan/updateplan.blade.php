@extends('admin.layout.base')

@section('title')
Update Plan - Manage Plan
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

<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Manage Plan - Update Plan</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Update Plan</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-3">&nbsp;</div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
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
                                        <h4 class="card-title mb-4">Update New Plan</h4>
                                        <div class="text-sm-right">
                                            <button type="button" class="btn btn-warning btn btn-sm w-md" onclick="window.location='/admin/plan/viewplan'">View Plan</button>
                                        </div>
                                         @foreach($plandata as $d)
                                        <form method="post" action="/saveplan" style="align-items:center;" enctype="multipart/form-data" id="form1">
                                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                        
                                            <div class="row">
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Insurance Name</label>
                                                       <select class="form-control" name="txtins">
                                                           @foreach($inscompanydata as  $index => $row)
                                                            <option value="{{ $row->ins_id }}" @if($d->ins_id==$row->ins_id) selected @endif>{{ $row->com_name }}</option>
                                                            @endforeach
                                                       </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Plan Title</label>
                                                        <input type="text" class="form-control" name="txtplantitle" value="{{ $d->plan_title }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Plan Description</label>
                                                        <input type="text" class="form-control" name="txtplandesc" value="{{ $d->plan_desc }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Price</label>
                                                        <input type="text" class="form-control" name="txtprice" value="{{ $d->price }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Validity</label>
                                                        <input type="text" class="form-control" name="txtvalidity" value="{{ $d->validity }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                            <label for="formrow-email-input">PDF File</label>
                                                            <input type="file" class="" name="txtpdf">
                                                            <img src="{{URL::to('/')}}/plan_pdf/{{ $d->pdf_file }}" width="100" height="100"/>
                                                            <input type="hidden" name="oldimg" value="{{ $d->pdf_file }}"/>
                                                            <input type="hidden" name="planid" value="{{ $d->plan_id }}"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Vehicle Type</label>
                                                        <div class="custom-radio">
                                                        <input type="Radio" class="" name="optradio" value="car" @if($d->vehicle_type=="car") checked @endif>Car
                                                         <input type="Radio" class="" name="optradio" value="bike" @if($d->vehicle_type=="bike") checked @endif>Bike
                                                         </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="form-group">
                                                       <label for="formrow-email-input">Is Active</label>
                                                       <div cla-ss="custom-radio">
                                                        <input type="Radio" class="" name="radradio" value="Yes" @if($d->isactive=="Yes") checked @endif>Yes
                                                        <input type="Radio" class="" name="radradio" value="No" @if($d->isactive=="No") checked @endif>No
                                                       </div>
                                                   </div>
                                               </div>
                                            </div>
                                            <div align="center">
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>

                                               <button type="reset" class="btn btn-secondary w-md">Reset</button>
                                            </div>
                                        </form>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-lg-3">&nbsp;</div>
                            </div>

                            
                        </div>
                        <!-- end row -->

                        <!-- <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Inline forms layout</h5>

                                        <form class="form-inline">
                                            <label class="sr-only" for="inlineFormInputName2">Name</label>
                                            <input type="text" class="form-control mb-2 mr-sm-3" id="inlineFormInputName2" placeholder="Enter Name">
                                          
                                            <label class="sr-only" for="inlineFormemail2">Email</label>
                                            <div class="input-group mb-2 mr-sm-3">
                                              <div class="input-group-prepend">
                                                <div class="input-group-text">@</div>
                                              </div>
                                              <input type="email" class="form-control" id="inlineFormemail2" placeholder="Enter Email">
                                            </div>
                                          

                                            <div class="custom-control custom-checkbox mb-2 mr-sm-3">
                                                <input type="checkbox" class="custom-control-input" id="inlineForm-customCheck">
                                                <label class="custom-control-label" for="inlineForm-customCheck">Remember me</label>
                                            </div>
                                          
                                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
            <!-- end main content-->

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
                                    Design & Develop by Vivekanand Students
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
        <script src="{{URL::to('/')}}/assets/js/jquery.validate.min.js"></script>
        <script src="{{URL::to('/')}}/assets/js/additional-methods.min.js"></script>
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
        </script>
<script>
    $("#form1").validate({
        rules:
        {
            txtplantitle:
            {
                required:true
            },
            txtprice:
            {
                required:true,
                number:true
            },
            txtplandesc:
            {
                required:true
            },
            txtvalidity:
            {
                required:true
            }
        },
        messages:
        {
            txtplantitle:
            {
                required:"Please Enter Plan Title "
            },
            txtprice:
            {
                required:"Please Enter Price",
                number:"Allowed only numbers"
            },
            txtplandesc:
            {
                required:"Please Enter Plan Description "
            },
            txtvalidity:
            {
                required:"Please enter Validity"
            }
        }
    });
</script>

        <script src="{{URL::to('/')}}/assets/js/app.js"></script>
@endsection

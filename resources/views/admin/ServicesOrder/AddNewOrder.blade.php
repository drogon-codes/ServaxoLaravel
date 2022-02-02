@extends('admin.layout.base')

@section('title')
Add New Service Order - Manage Services
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
        <script src="{{URL::to('/')}}/assets/js/app.js"></script>
@endsection

@section('main-content')

<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Manage New Services - Add Services Order</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Add New Service Order</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-md-3">&nbsp;</div>
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

                                        <h4 class="card-title mb-4">Add New Service Order</h4>
                                        <div class="text-sm-right"><button type="button" class="btn btn-warning brn btn-sm w-md" onclick="window.location='/admin/ServicesOrder/ViewNewOrder'">View Service Order</button></div>
                                        
                                        <form action="/insertserviceorder" style="align-items:center;" method="post" id="form1">
                                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                            <div class="row">
                                                
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">User name</label>
                                                        <select class="form-control" name="txtuserid">
                                                            @foreach($userdata as  $index => $row)
                                                            <option value="{{ $row->user_id }}">{{ $row->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Model Name</label>
                                                        <select class="form-control" name="txtmodelid">
                                                            @foreach($modeldata as  $index => $row)
                                                            <option value="{{ $row->model_id }}">{{ $row->model_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Vehicle No</label>
                                                        <input type="text" class="form-control" name="txtvehicleno">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Remark</label>
                                                        <input type="text" class="form-control" name="txtremark">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Total Payment</label>
                                                        <input type="text" class="form-control" name="txttotal">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Pickup date</label>
                                                        <input type="Date" class="form-control" name="txtpicupdate">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Addressline1</label>
                                                        <textarea class="form-control" name="txtadd1"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Addressline2</label>
                                                        <textarea class="form-control" name="txtadd2"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Pincode</label>
                                                        <input type="text" class="form-control" name="txtpincode">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Landmark</label>
                                                        <input type="text" class="form-control" name="txtlandmark">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Order DateTime</label>
                                                        <input type="Date" class="form-control" name="txtorderdate">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Status</label>
                                                        <div>
                                                        <select class="form-control" name="optorder">
                                                            <option value="pending">New Order</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                </div>
                                            <div align="center">
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>

                                                <button type="submit" class="btn btn-secondary w-md">Reset</button>   
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-3">&nbsp;</div>
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
        <script src="{{URL::to('/')}}/assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="{{URL::to('/')}}/assets/js/pages/dashboard.init.js"></script>
        <script src="{{URL::to('/')}}/assets/js/jquery.validate.min.js"></script>
        <script src="{{URL::to('/')}}/assets/js/additional-methods.min.js"></script>
<script>
    $("#form1").validate({
        rules:
        {
            txtvehicleno:
            {
                required:true
            },
            txtremark:
            {
                required:true
            },
            txttotal:
            {
                required:true,
                number:true
            },
            txtpicupdate:
            {
                required:true,
                date:true
            },
            txtadd1:
            {
                required:true
            },
            txtadd2:
            {
                required:true
            },
            txtpincode:
            {
                required:true,
                number:true
            },
            txtlandmark:
            {
                required:true
            },
            txtorderdate:
            {
                required:true,
                date:true
            }
        },
        messages:
        {
            txtvehicleno:
            {
                required:"Please Enter Vehicle No"
            },
            txtremark:
            {
                required:"Please Enter Remark"
            },
            txttotal:
            {
                required:"Please Enter Total Amount",
                number:"Allowed only numbers"
            },
            txtpicupdate:
            {
                required:"Please Enter valid date",
                date:"Allowed only Date Format"
            },
            txtadd1:
            {
                required:"Please Enter Address"
            },
            txtadd2:
            {
                required:"Please Enter Address"
            },
            txtpincode:
            {
                required:"Please Enter Pincode",
                number:"Allowed only numbers"
            },
            txtlandmark:
            {
                required:"Please Enter Landmark"
            },
            txtorderdate:
            {
                required:"Please Enter valid date",
                date:"Allowed only Date Format"
            }
        }
    });
</script>
        <!-- App js -->
        <!--  -->

        <!-- <script src="{{URL::to('/')}}/assets/js/app.js"></script> -->
@endsection

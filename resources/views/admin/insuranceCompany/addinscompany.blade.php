@extends('admin.layout.base')

@section('title')
Add Insurance Company
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
                                    <h4 class="mb-0 font-size-18">Manage Insurance Company - Add Insurance Company</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Add Insurance Company</li>
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
                                        
                                        <h4 class="card-title mb-4">Add New Insurance Company</h4>
                                        <div class="text-sm-right">
                                             <button type="button" class="btn btn-warning btn btn-sm w-md" onclick="window.location='/admin/insuranceCompany/viewinscompany'">View Insurance Companies</button>
                                        </div>
                                        
                                        <form action="/insertinscompany" method="post" style="align-items:center;" enctype="multipart/form-data" id="form1">
                                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                            <div class="row"> 
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Company Name</label>
                                                        <input type="text" class="form-control"  name="txtcompanyname">
                                                    </div>
                                                </div>
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                        <label for="formrow-email-input">Policy Name</label>
                                                        <input type="text" class="form-control" name="txtpolicyname">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                     <div class="form-group">
                                                        <label for="formrow-email-input">Contact No</label>
                                                        <input type="text" class="form-control" name="txtcontact">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                     <div class="form-group">
                                                        <label for="formrow-email-input">Email ID</label>
                                                        <input type="text" class="form-control" name="txtemailid">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                     <div class="form-group">
                                                        <label for="formrow-email-input">Addressline 1</label>
                                                        <textarea class="form-control" name="txtaddressline1"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                     <div class="form-group">
                                                        <label for="formrow-email-input">Addressline 2</label>
                                                        <textarea class="form-control" name="txtaddressline2" cols="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                     <div class="form-group">
                                                        <label for="formrow-email-input">Website URL</label>
                                                        <input type="text" class="form-control" name="txtwebsiteurl">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                     <div class="form-group">
                                                        <label for="formrow-email-input">Landmark</label>
                                                        <input type="text" class="form-control" name="txtlandmark">
                                                    </div>
                                                </div>
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                        <label for="formrow-email-input">City Name</label>
                                                        <select name="txtcity" class="form-control">
                                                             @foreach($citydata as  $index => $row)
                                                            <option value="{{ $row->city_id }}">{{ $row->city_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                     <div class="form-group">
                                                        <label for="formrow-email-input">Pincode</label>
                                                        <input type="text" class="form-control" name="txtpincode">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                     <div class="form-group">
                                                        <label for="formrow-email-input">Logo</label>
                                                        <input type="file" class="" name="txtlogo">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                         <label for="formrow-email-input" class="form-check-label">Is Active</label><br/><br/>
                                                         <div class="custom-radio">
                                                            <input type="radio" class="" name="rdisactive" value="yes"checked/>&nbsp;Yes
                                                            &emsp;&emsp;
                                                            <input type="radio" name="rdisactive" value="no">&nbsp;No
                                                        </div>
                                                    </div>
                                                 </div>
                                                <div class="col-md-12">
                                                     <div class="form-group">
                                                        <label for="formrow-email-input">About</label>
                                                        <textarea class="form-control" name="txtabout"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                            <div class="form-group">
                                                
                                                <div class="custom-control custom-checkbox">
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
            txtcompanyname:
            {
                required:true,
                lettersonly:true
            },
            txtpolicyname:
            {
                required:true,
                lettersonly:true
            },
            txtcontact:
            {
                required:true,
                number:true,
                maxlength:10
            },
            txtemailid:
            {
                required:true,
                email:true
            },
            txtwebsiteurl:
            {
                required:true,
                url:true
            },
            txtlogo:
            {
                required:true,
                extension:'jpe?g,png,jfif'
            },
            txtaddressline1:
            {
                required:true
            },
            txtabout:
            {
                required:true
            },
            txtaddressline2:
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
            }
        },
        messages:
        {
            txtcompanyname:
            {
                required:"Please Enter Company Name",
                lettersonly:"Please Enter Only Alphabet"
            },
            txtpolicyname:
            {
                required:"Please Enter Policy Name",
                lettersonly:"Please Enter Only Alphabet"
            },
            txtcontact:
            {
                required:"Please Enter Contact number",
                number:"Allowed only numbers",
                maxlength:"Please enter 10 numbers"
            },
            txtemailid:
            {
                required:"Please Enter Email",
                email:"Allowed only email format"
            },
            txtwebsiteurl:
            {
                required:"Please Enter Website URL",
                url:"Allowed only URL format"
            },
            txtabout:
            {
                required:"Please Enter About Information"
            },
            txtlogo:
            {
                required:"Please Enter Image",
                extension:"File must be .jpg, .jpeg or .png"
            },
            txtaddressline1:
            {
                required:"Please Enter Address"
            },
            txtaddressline2:
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
            }
        }
    });
</script>
        <script src="{{URL::to('/')}}/assets/js/app.js"></script>
@endsection
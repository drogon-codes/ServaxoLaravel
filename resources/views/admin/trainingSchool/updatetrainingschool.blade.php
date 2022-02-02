@extends('admin.layout.base')

@section('title')
Update Training School
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
                                    <h4 class="mb-0 font-size-18">Manage Training Schools - Update Training Schools</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Update Training School</li>
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
                                        <h4 class="card-title mb-4">Update New Training School</h4>
                                        <div class="text-sm-right">
                                            <button type="button" class="btn btn-warning btn btn-sm w-md" onclick="window.location='/admin/trainingSchool/viewtrainingschool'">View Training School</button>
                                        </div>
                                        @foreach($schooldata as $d)
                                        <form action="/savetrainingschool" method="post" style="align-items:center;" enctype="multipart/form-data" id="form1">
                                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                            <div class="row">
                                                <div class="col-md-6">        
                                                     <div class="form-group">
                                                        <label for="txtpartname">School Name</label>
                                                        <input type="text" class="form-control" name="txtschoolname" value="{{ $d->school_name }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Contact No</label>
                                                        <input type="tel" class="form-control" name="txtcontact" value="{{ $d->school_contact }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Email ID</label>
                                                        <input type="email" class="form-control" name="txtemail" value="{{ $d->emailid }}">
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
                                                       <label for="formrow-email-input">Addressline 1</label>
                                                       <textarea class="form-control" id="txtaddressline1" name="txtaddressline1">{{ $d->addressline1 }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                       <label for="formrow-email-input">Addressline 2</label>
                                                       <textarea class="form-control" name="txtaddressline2" id="txtaddressline2">{{ $d->addressline2 }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                        <div id="divmap" style="height: 200px;"></div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Landmark</label>
                                                        <input type="text" class="form-control" id="txtlandmark" name="txtlandmark" value="{{ $d->landmark }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">City Name</label>
                                                        <select name="txtcity" class="form-control">
                                                             @foreach($citydata as  $index => $row)
                                                            <option value="{{ $row->city_id }}" @if($d->city_id ==$row->city_id ) selected @endif>{{ $row->city_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                 
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Latitude</label>
                                                        <input type="text" class="form-control" name="txtlatitude" value="{{ $d->latitude }}"  id="txtlatitude">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Longitude</label>
                                                        <input type="text" class="form-control" id="txtlongitude" name="txtlongitude" value="{{ $d->longitude }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Pincode</label>
                                                        <input type="text" class="form-control" name="txtpincode" value="{{ $d->pincode }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                     <div class="form-group">
                                                        <label for="formrow-email-input">Logo</label>
                                                            <input type="file" class="" id="formrow-email-input" name="txtlogo">
                                                            <img src="{{URL::to('/')}}/school_img/{{ $d->logo }}" width="100" height="100"/>
                                                            <input type="hidden" name="oldimg" value="{{ $d->logo }}"/>
                                                            <input type="hidden" name="schoolid" value="{{ $d->school_id }}"/>
                                                    </div>
                                                </div>
                                                 <div class="col-md-6">
                                                    <div class="form-group">
                                                         <label for="formrow-email-input" class="form-check-label">Is Active</label><br/><br/>
                                                         <div class="custom-radio">
                                                            <input type="radio" class="" name="rdisactive" value="yes" @if($d->isactive=="yes") checked @endif />Yes      
                                                            <input type="radio" name="rdisactive" value="no" @if($d->isactive=="no") checked @endif>No
                                                        </div>
                                                    </div>
                                                 </div>
                                             </div>
                                             </div>
                                             <br/>
                                                <div class="form-group">
                                                    <div align="center">
                                                        <button type="submit" class="btn btn-primary w-md">Update</button>
                                                    
                                                        <button type="reset" class="btn btn-secondary w-md">Reset</button>
                                                    </div>
                                                </div>
                                        </form>
                                        @endforeach
                                    </div>
                                </div>
                                    <div class="col-md-3">&nbsp;</div>
                                </div>
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
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyClJ7bohWjfhtUsd71UVKXfsu48-Wq5O5s"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-locationpicker/0.1.12/locationpicker.jquery.min.js"></script>
<script>
    $('#divmap').locationpicker({
    location: {latitude: 21.1702, longitude: 72.8311},
    radius: 0,
    inputBinding: {
          latitudeInput: $('#txtlatitude'),
          longitudeInput: $('#txtlongitude'),
          locationNameInput: $('#txtaddressline1')
      },
    mapTypeId: google.maps.MapTypeId.TERRAIN,
    enableAutocomplete: true,
     onchanged: function (currentLocation, radius, isMarkerDropped) {
          var addressComponents = $(this).locationpicker('map').location.addressComponents;
          //console.log(addressComponents.city);

          $('select#txtcity option').each(function () {
                if ($(this).text().toLowerCase() == addressComponents.city.toLowerCase()) {
                    $(this).prop('selected','selected');
                    return;
                }
            });
          //$("#txtcity").val(addressComponents.city);
          //$('select[name^="txtcity"] option[value="'+addressComponents.city+'"]').attr("selected","selected");
      },
    });
    $("#form1").validate({
        rules:
        {
            txtschoolname:
            {
                required:true
            },
            txtcontact:
            {
                required:true,
                number:true,
                maxlength:10
            },
            txtemail:
            {
                required:true,
                email:true
            },
            txtwork:
            {
                required:true
            },
            txtwork:
            {
                required:true
            },
            txtlandmark:
            {
                required:true
            },
            txtprice:
            {
                required:true,
                number:true
            },
            txtpincode:
            {
                required:true,
                number:true
            },
            txtaddressline1:
            {
                required:true
            }
        },
        messages:
        {
            txtschoolname:
            {
                required:"Please Enter School Name "
            },
            txtcontact:
            {
                required:"Please Enter School's Contact Number",
                number:"Allowed only numbers",
                maxlength:"Allowed only 10 numbers"
            },
            txtemail:
            {
                required:"Please Enter School's Email ID ",
                email:"Allowed only Email Format"
            },
            txtlandmark:
            {
                required:"Please Enter Landmark"
            },
            txtprice:
            {
                required:"Please Enter Price",
                number:"Allowed only Numbers Format"
            },
            txtpincode:
            {
                required:"Please Enter Pincode",
                number:"Allowed only Numbers Format"
            },
            txtaddressline1:
            {
                required:"Please Enter Address"
            }
        }
    });
</script>
        <script src="{{URL::to('/')}}/assets/js/app.js"></script>
@endsection
@extends('admin.layout.base')

@section('title')

Update Mechanic

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
                                    <h4 class="mb-0 font-size-18">Manage Services - Update Mechanic</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Update Mechanic</li>
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
                                        <h4 class="card-title mb-4">Update New Machanic</h4>
                                        <div class="text-sm-right">
                                            <button type="button" class="btn btn-warning btn btn-sm w-md" onclick="window.location='/admin/Mechanic/ViewMechanic'">View Mechanics</button>
                                        </div>
                                        @foreach($mechanicdata as $d)
                                        <form action="/savemechanic" method="post" style="align-items:center;" enctype="multipart/form-data" id="form1">
                                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                            <div class="row">
                                                <div class="col-md-6">
                                                     <div class="form-group">
                                                        <label for="formrow-email-input">City Name</label>
                                                        <select class="form-control" name="txtcityid">
                                                             @foreach($citydata as  $index => $row)
                                                            <option value="{{ $row->city_id }}" @if($d->city_id==$row->city_id) selected @endif>{{ $row->city_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Mechanic Name</label>
                                                        <input type="text" class="form-control" name="txtmechanicname" value="{{ $d->name }}">
                                                    </div>
                                                </div>     
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Is Car</label>
                                                        <div class="custom-radio">
                                                        <input type="Radio" class="" id="formrow-email-input" name="rdiscar" value="yes" @if($d->iscar=="yes") checked @endif>Yes
                                                         <input type="Radio" class="" id="formrow-email-input" name="rdiscar" value="no" @if($d->iscar=="no") checked @endif>No
                                                        </div>
                                                     </div>
                                                </div>   
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Is Bike</label>
                                                        <div class="custom-radio">
                                                        <input type="Radio" class="" id="formrow-email-input" name="rdisbike" value="yes" @if($d->isbike=="yes") checked @endif>Yes
                                                         <input type="Radio" class="" id="formrow-email-input" name="rdisbike" value="no" @if($d->isbike=="no") checked @endif>No
                                                        </div>
                                                     </div>
                                                </div>  
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Mechanic Photo</label>
                                                        <input type="file" class="" name="txtmechanicimage">
                                                        <img src="{{URL::to('/')}}/mach_img/{{ $d->mach_image }}" width="100" height="100"/>
                                                        <input type="hidden" name="oldimg" value="{{ $d->mach_image }}"/>
                                                        <input type="hidden" name="machid" value="{{ $d->mach_id }}"/>
                                                    </div>
                                                </div>             
                                                <div class="col-md-6">
                                                </div>                                          
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Address Line 1</label>
                                                       <textarea type="text" class="form-control" name="txtaddrline1">{{ $d->addressline1 }}</textarea>
                                                    </div>
                                                </div>
                                               <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Address Line 2</label>
                                                      <textarea type="text" class="form-control" name="txtaddrline2">{{ $d->addressline2 }}</textarea>
                                                    </div>
                                                </div>  
                                                <div class="col-md-12">
                                                        <div id="divmap" style="height: 200px;"></div>
                                                </div>
                                               
                                               
                                                  <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Landmark</label>
                                                        <input type="text" class="form-control" name="txtlandmark" id="txtlandmark" value="{{ $d->landmark }}">
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
                                                        <label for="formrow-email-input">Latitude</label>
                                                        <input type="text" class="form-control" name="txtlatitude" id="txtlatitude" value="{{ $d->lattitude }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Longitude</label>
                                                        <input type="text" class="form-control" name="txtlongtitude" id="txtlongtitude" value="{{ $d->longtitude }}">
                                                    </div>
                                                </div>  
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Is Active</label>
                                                        <div class="custom-radio">
                                                            <input type="Radio" class="" id="formrow-email-input" name="rdisactive" value="yes" @if($d->isactive=="yes") checked @endif>Yes
                                                            <input type="Radio" class="" id="formrow-email-input" name="rdisactive" value="no" @if($d->isactive=="no") checked @endif>No
                                                        </div>
                                                     </div>
                                                </div> 
                                            </div>                                           
                                            <div class="form-group">                                             
                                                <div class="custom-control custom-checkbox">
                                                </div>
                                            </div>
                                            <div align="center">
                                                <button type="submit" class="btn btn-primary w-md">Update</button>
                                                <button type="Reset" class="btn btn-secondary w-md" >Reset</button>
                                            </div>
                                        </form>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">&nbsp;</div>
                            
                        </div>
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
          longitudeInput: $('#txtlongtitude'),
          locationNameInput: $('#txtlandmark')
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
            txtmechanicname:
            {
                required:true,
                lettersonly:true
            },
            txtaddrline1:
            {
                required:true
            },
            txtaddrline2:
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
            txtmechanicname:
            {
                required:"Please Enter Machanic Name",
                lettersonly:"Please Enter Only Alphabet"
            },
            txtaddrline1:
            {
                required:"Please Enter Address"
            },
            txtaddrline2:
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

@extends('Users.Layout.base')

@section('title')
Old Vehicle
@endsection

@section('css-section')
     <link rel="stylesheet" href="{{URL::to('/')}}/log/css/style.css"> 

  
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
    <link href="{{URL::to('/')}}/Userassets/css/s1.css" rel="stylesheet">

    <link href="{{URL::to('/')}}/Userassets/css/footer/footer1.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/s2.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/header/header1.css" rel="stylesheet">
    <link id="color_scheme" href="{{URL::to('/')}}/Userassets/css/theme.css" rel="stylesheet"> 
    <link href="{{URL::to('/')}}/Userassets/css/responsive.css" rel="stylesheet">
    <!-- <link href="{{URL::to('/')}}/Userassets/css/s1.css" rel="stylesheet"> -->

    <link href="{{URL::to('/')}}/Userassets/js/lightslider/lightslider.css" rel="stylesheet">
     <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,600,700' rel='stylesheet' type='text/css'>     
    <style type="text/css">
         body{font-family:'Rubik', sans-serif;}
    </style>
    <style type="text/css">

            .custom-file-input 
            {
            position: relative;
            z-index: 2;
            width: 100%;
            height: calc(1.5em + .94rem + 2px);
            margin: 0;
            opacity: 0;
        }
       
        button, input {
            overflow: visible;
            border: none;

        }
        button, input, optgroup, select, textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }
        *, ::after, ::before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;

        }
        input[type="file" i] {
    appearance: none;
    background-color: initial;
    cursor: default;
    align-items: baseline;
    color: inherit;
    text-overflow: ellipsis;
    white-space: pre;
    text-align: start !important;
    padding: initial;
    padding-bottom: 5px;
    border: initial;
    overflow: hidden !important;
}
 
</style> 



@endsection

@section('js-section')
<script src="{{URL::to('/')}}/log/js/jquery.min.js"></script>
  <script src="{{URL::to('/')}}/log/js/popper.js"></script>
  <script src="{{URL::to('/')}}/log/js/bootstrap.min.js"></script>
  <script src="{{URL::to('/')}}/log/js/main.js"></script>


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
   
    <script type="text/javascript"><!--
    // Check if Cookie exists
        if($.cookie('display')){
            view = $.cookie('display');
        }else{
            view = 'grid';
        }
        if(view) display(view);


    //--></script>
   
 <script type="text/javascript">


function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(200);
                  
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah1')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(200);
                  
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
     function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah2')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(200);
                  
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

                $('#OpenImgUpload').click(function(){ $('#imgupload').trigger('click'); });
                $('#OpenImgUpload2').click(function(){ $('#imgupload2').trigger('click'); });
                $('#OpenImgUpload3').click(function(){ $('#imgupload3').trigger('click'); });


$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
 
function loadModel(cid)
{
    $.ajax({
        url:"/getmodels",
        type:"POST",
        data:{"cid":cid},
        success:function(response){
            var obj = jQuery.parseJSON(response);
            //txtmodel
            var output="";
            $.each(obj, function(key,row) {
              output+='<option value="'+row.model_id+'">'+row.model_name+'</option>';
            }); 
            $("#txtmodel").html(output);
        },
        error:function()
        {
            alert("Error");
        }
    });
}


function loadcity(sid)
{
    $.ajax({
        url:"/getstate",
        type:"POST",
        data:{"sid":sid},
        success:function(response){
            var obj = jQuery.parseJSON(response);
            //txtmodel
            var output="";
            $.each(obj, function(key,row) {
              output+='<option value="'+row.city_id+'">'+row.city_name+'</option>';
            }); 
            $("#txtcity").html(output);
        },
        error:function()
        {
            alert("Error");
        }
    });
}

</script>
 <script src="{{URL::to('/')}}/assets/js/jquery.validate.min.js"></script>
        <script src="{{URL::to('/')}}/assets/js/additional-methods.min.js"></script>
<script>
    $("#form1").validate({
        rules:
        {
            cid:
            {
                required:true
            },
            txtmodel:
            {
                required:true
            },
            txtyear:
            {
                required:true,
                number:true 
            },
            txtimg1:
            {
                required:true,
                extension:'jpe?g,png'
            },
            txtimg2:
            {
                required:true,
                extension:'jpe?g,png'
            },
            txtimg3:
            {
                required:true,
                extension:'jpe?g,png'
            },
            txtvehiclenumber:
            {
                required:true
            },
            txtaboutvehicle:
            {
                required:true
            },
            txtkm:
             {
                required:true,
                number:true 
            },
            txtprice:
             {
                required:true,
                number:true 
            },
            sid:
            {
                required:true
            },
            txtcity:
             {
                required:true
            },
            txtaddrsline1:
             {
                 required:true
            },
            txtaddrsline2:
             {
                 required:true
            },
            txtlandmark:
             {
                 required:true
            },
            txtpincode:
             {
                 required:true
            },
            txtcontact:
            {
                required:true
            }
        },
        messages:
        {
            cid:
            {
                required:"Please Enter Company Name"
            },
            txtmodel:
            {
                required:"Please Enter Model"
            },
            txtyear:
            {
                required:"Please Enter Year",
                number:"Please insert only number"
            },
            txtimg1:
            {
                required:"Please Enter Image",
                extension:"File must be .jpg, .jpeg or .png"
            },
            txtimg2:
            {
                required:"Please Enter Image",
                extension:"File must be .jpg, .jpeg or .png"
            },
            txtimg3:
            {
                required:"Please Enter Image",
                extension:"File must be .jpg, .jpeg or .png"
            },
            txtvehiclenumber:
            {
                required:"Please Enter Vehicle Number"
            },
             txtkm:
            {
                required:"Please Enter Year",
                number:"Please insert only number"
            },
            txtprice:
            {
                required:"Please Enter Year",
                number:"Please insert only number"
            },
            sid:
            {
                required:"Please Select State"
            },
            txtcity:
            {
                 required:"Please Select City"
            },
            txtaddrsline1:
             {
                 required:"Please Enter Address Line 1"
            },
            txtaddrsline2:
             {
                 required:"Please Enter Address Line 2"
            },
            txtlandmark:
             {
                 required:"Please Enter Landmark"
            },
            txtpincode:
             {
                 required:"Please Enter Pincode"
            },
            txtaboutvehicle:
            {
               required:"Please Enter Description"
            }, 
            
            txtcontact:
            {
                required:"Please Enter Contact Number"
            }

        }
    });
</script>
        <script src="{{URL::to('/')}}/assets/js/app.js"></script>       
@endsection




@section("main-section")
   <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="/Users/Home"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Account</a></li>
            <li><a href="/Users/Register">Register</a></li>
        </ul>
        
<div class="row">



    <div class="_1U6Yu _2nuC5">
        <div class="rui-SB2Uw PZezW">
            <div class="rui-2SwH7 rui-yyNoO rui-24mBx rui-2DNls rui-1JF_2 rui-3SQyb rui-1SnDg rui-2wP6c">
                <h1 class="o_CSw" style="font-size: 50px;"><span>Post your Ad</span></h1>
                <div class="qMb4_ f8zcf">
                     <h2 class="_3mGht" style="padding-top: 25px; padding-bottom: 10px;">
                    <span>Sell your vehicle in best price</span></h2>
               
                    <div class="_2ytqd">
                    </div>
             <form action="/insertvehicle" method="post" enctype="multipart/form-data" id="form1">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="rui-2SwH7 rui-1JF_2">
                        <div class="_1Hyzp rui-2SwH7 rui-1wY3r rui-3CPXI rui-3E1c2 rui-1JF_2 _1Zj3d" data-aut-id="itemAttributes">
                            <h2>Include some details</h2>
                            <div class="oogMA">
                            </div>
                            <div class="oogMA">
                            </div>
                            <div class="oogMA">
                                <div class="oogMA">
                                    <div class="rui-2zbKc">
                                        <label for="make">Brand *</label>
                                        <div class="rui-D-GoM rui-33EYo rui-1H_PK" style="width: 500px;">
                                            <select id="cid" onchange="loadModel(this.value);" name="cid" class="rui-1ekfu rui-98Wif" data-aut-id="ddmake" >
                                                 <option value=""></option>
                                                @foreach($brand as $m)
                                               <option value="{{ $m->company_id }}">{{ $m->company_name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="rui--e0m_">
                                                <div class="rui-yDKiM">
                                                    <svg width="16px" height="16px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                                                        <path class="rui-2BsmJ" d="M744.727 450.484v-54.846h-54.846l-216.669 216.669-100.305-100.305h-54.846v54.846l127.728 127.728h54.846l244.092-244.092zM512 162.911c-192.485 0-349.091 156.606-349.091 349.091s156.606 349.091 349.091 349.091c192.485 0 349.091-156.606 349.091-349.091s-156.606-349.091-349.091-349.091v0zM512 938.669c-235.268 0-426.667-191.399-426.667-426.667s191.399-426.667 426.667-426.667c235.268 0 426.667 191.399 426.667 426.667s-191.399 426.667-426.667 426.667v0z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="rui-2AH6h">
                                                    <svg width="16px" height="16px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                                                        <path class="rui-u_VZV" d="M85.392 277.333h60.331l366.336 366.336 366.336-366.336h60.331v60.331l-408.981 409.003h-35.307l-409.045-409.003z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rui-1g6wu">
                                            <span class="rui-qvKkT" data-aut-id="">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <div class="oogMA">
                                    <div class="rui-2zbKc">
                                        <label for="txtmodel">Model *</label>
                                        <div class="rui-D-GoM rui-33EYo rui-1H_PK" style="width: 500px;">
                                             <select id="txtmodel" name="txtmodel" class="rui-1ekfu rui-98Wif" data-aut-id="ddmake" >
                                                 <option value=""></option>
                                            </select>
                                            <div class="rui--e0m_">
                                                <div class="rui-yDKiM">
                                                    <svg width="16px" height="16px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                                                        <path class="rui-2BsmJ" d="M744.727 450.484v-54.846h-54.846l-216.669 216.669-100.305-100.305h-54.846v54.846l127.728 127.728h54.846l244.092-244.092zM512 162.911c-192.485 0-349.091 156.606-349.091 349.091s156.606 349.091 349.091 349.091c192.485 0 349.091-156.606 349.091-349.091s-156.606-349.091-349.091-349.091v0zM512 938.669c-235.268 0-426.667-191.399-426.667-426.667s191.399-426.667 426.667-426.667c235.268 0 426.667 191.399 426.667 426.667s-191.399 426.667-426.667 426.667v0z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="rui-2AH6h">
                                                    <svg width="16px" height="16px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                                                        <path class="rui-u_VZV" d="M85.392 277.333h60.331l366.336 366.336 366.336-366.336h60.331v60.331l-408.981 409.003h-35.307l-409.045-409.003z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rui-1g6wu">
                                            <span class="rui-qvKkT" data-aut-id="">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="oogMA">
                                <div class="rui-2zbKc">
                                    <label for="year">Year *</label>
                                    <div class="rui-D-GoM rui-33EYo rui-1H_PK" style="width: 500px;" style="width: 500px;">
                                        <div class="rui-RcLUE">
                                            <div class="rui-3wYvC">
                                                <input  name="txtyear" type="number" autocomplete="off" class="rui-1ekfu rui-3oSYn" data-aut-id="inyear" min="0" step="1" value="" >
                                                <div class="rui-1ckrC">
                                                    <div class="rui-yDKiM">
                                                        <svg width="16px" height="16px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                                                            <path class="rui-2BsmJ" d="M744.727 450.484v-54.846h-54.846l-216.669 216.669-100.305-100.305h-54.846v54.846l127.728 127.728h54.846l244.092-244.092zM512 162.911c-192.485 0-349.091 156.606-349.091 349.091s156.606 349.091 349.091 349.091c192.485 0 349.091-156.606 349.091-349.091s-156.606-349.091-349.091-349.091v0zM512 938.669c-235.268 0-426.667-191.399-426.667-426.667s191.399-426.667 426.667-426.667c235.268 0 426.667 191.399 426.667 426.667s-191.399 426.667-426.667 426.667v0z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rui-1g6wu">
                                        <span class="rui-qvKkT" data-aut-id=""></span>
                                    </div>
                                </div>
                            </div>
                            <div class="oogMA">
                                <div class="rui-2zbKc">
                                    <label for="mileage">KM driven *</label>
                                    <div class="rui-D-GoM rui-33EYo rui-1H_PK" style="width: 500px;">
                                        <div class="rui-RcLUE">
                                            <div class="rui-3wYvC">
                                                <input id="mileage" name="txtkm" type="number" autocomplete="off" class="rui-1ekfu rui-3oSYn" maxlength="6" data-aut-id="inmileage" min="0" step="1" value="" >
                                                <div class="rui-1ckrC">
                                                    <div class="rui-yDKiM">
                                                        <svg width="16px" height="16px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                                                            <path class="rui-2BsmJ" d="M744.727 450.484v-54.846h-54.846l-216.669 216.669-100.305-100.305h-54.846v54.846l127.728 127.728h54.846l244.092-244.092zM512 162.911c-192.485 0-349.091 156.606-349.091 349.091s156.606 349.091 349.091 349.091c192.485 0 349.091-156.606 349.091-349.091s-156.606-349.091-349.091-349.091v0zM512 938.669c-235.268 0-426.667-191.399-426.667-426.667s191.399-426.667 426.667-426.667c235.268 0 426.667 191.399 426.667 426.667s-191.399 426.667-426.667 426.667v0z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rui-1g6wu">
                                        <span class="rui-qvKkT" data-aut-id="">
                                        </span>
                                        <span class="rui-1qqJ6"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="oogMA">
                                <div class="rui-2zbKc">
                                    <label for="mileage">Vehicle Number *</label>
                                    <div class="rui-D-GoM rui-33EYo rui-1H_PK" style="width: 500px;">
                                        <div class="rui-RcLUE">
                                            <div class="rui-3wYvC">
                                                <input id="mileage" name="txtvehiclenumber"  type="text"  class="rui-1ekfu rui-3oSYn" maxlength="14" data-aut-id="inmileage"  value="" >
                                                <div class="rui-1ckrC">
                                                    <div class="rui-yDKiM">
                                                        <svg width="16px" height="16px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                                                            <path class="rui-2BsmJ" d="M744.727 450.484v-54.846h-54.846l-216.669 216.669-100.305-100.305h-54.846v54.846l127.728 127.728h54.846l244.092-244.092zM512 162.911c-192.485 0-349.091 156.606-349.091 349.091s156.606 349.091 349.091 349.091c192.485 0 349.091-156.606 349.091-349.091s-156.606-349.091-349.091-349.091v0zM512 938.669c-235.268 0-426.667-191.399-426.667-426.667s191.399-426.667 426.667-426.667c235.268 0 426.667 191.399 426.667 426.667s-191.399 426.667-426.667 426.667v0z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rui-1g6wu">
                                        <span class="rui-qvKkT" data-aut-id="">
                                        </span>
                                        <span class="rui-1qqJ6"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="_2HvgT">
                                <div class="_7b6G1">
                                    <div class="_25-v9">
                                        <div class="tBInl">
                                            <div class="rui-2zbKc">
                                               
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rui-2zbKc">
                            <label for="description">Description *</label>
                            <div class="rui-D-GoM rui-33EYo rui-1H_PK" style="width: 500px;">
                                <textarea autocomplete="off" data-aut-id="" id="description" class="rui-1ekfu rui-329KC" maxlength="4096" name="txtaboutvehicle" placeholder="" style="height: 96px;" ></textarea><div class="rui-QRPFJ">
                                    <div class="rui-yDKiM">
                                        <svg width="16px" height="16px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                                            <path class="rui-2BsmJ" d="M744.727 450.484v-54.846h-54.846l-216.669 216.669-100.305-100.305h-54.846v54.846l127.728 127.728h54.846l244.092-244.092zM512 162.911c-192.485 0-349.091 156.606-349.091 349.091s156.606 349.091 349.091 349.091c192.485 0 349.091-156.606 349.091-349.091s-156.606-349.091-349.091-349.091v0zM512 938.669c-235.268 0-426.667-191.399-426.667-426.667s191.399-426.667 426.667-426.667c235.268 0 426.667 191.399 426.667 426.667s-191.399 426.667-426.667 426.667v0z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="rui-1g6wu">
                                <span class="rui-qvKkT" data-aut-id="">Include condition, features and reason for selling</span>
                                <span class="rui-1qqJ6"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_2ytqd">
                </div>
                <div class="rui-2SwH7 rui-1JF_2">
                    <div class="_1Hyzp rui-2SwH7 rui-1wY3r rui-3CPXI rui-3E1c2 rui-1JF_2">
                        <h2 class="_3So_y">
                            <span>Set a price</span>
                        </h2>
                        <div class="TwsK9">
                            <div class="rui-2zbKc">
                                <label for="price">
                                    <span>Price*</span>
                                </label>
                                <div class="rui-D-GoM rui-33EYo" style="width: 500px;">
                                    <div class="rui-RcLUE rui-2gVGR">
                                        <div class="rui-3sTy6 rui-1umo3">
                                            <div>
                                                <span>₹</span>
                                            </div>
                                        </div>
                                        <div class="rui-3wYvC"><input id="price" name="txtprice" type="text" autocomplete="off" class="rui-1ekfu rui-3oSYn" data-aut-id="inPrice" min="0" pattern="(\d+[., \s]?\d?)*" value="">
                                            <div class="rui-1ckrC rui-2IRMD">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rui-1g6wu">
                                    <span class="rui-qvKkT" data-aut-id="">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_2ytqd">
                </div>
                <div class="rui-2SwH7 rui-1JF_2">
                    <div class="_1Hyzp rui-2SwH7 rui-1wY3r rui-3CPXI rui-3E1c2 rui-1JF_2" data-aut-id="dragAndDrop">
                        <h2>Upload  photos</h2>
                        <div class="_2vNUv" aria-disabled="false">
                            <div class="q_7hS" data-aut-id="imagesPreview">
                                
                            <table>
                                <tr>
                                    <td>
                                        <input type='file' name="txtimg1" onchange="readURL(this);"  />
                                      <div class="_1SuBk _24pdo" style="width:200PX; height:200px;">
                                    <div class="_36uzR" >
                                    <img id="blah" src="#" alt="Select Your image" />
                                    </div>
                             </div>
                            </td>
                            <td>
                                <input type='file' name="txtimg2"  onchange="readURL1(this);" />
                                 <div class="_1SuBk _24pdo" style="width:200px; height:200px;">
                                    <div class="_36uzR">
                                         <img id="blah1" src="#" alt="Select Your image" />
                                     </div>
                                </div>
                            </td>
                            <td>
                                 <input type='file' name="txtimg3"  onchange="readURL2(this);" />
                                 <div class="_1SuBk _24pdo" style="width:200PX; height:200px;">
                                    <div class="_36uzR">
                                        <img id="blah2" src="#" alt="Select Your image" />
                                    </div>
                                 </div>
                             </td>
                             </tr>
                            </table>

                               
                           
                               
                               
                               
                                <input accept="image/png, image/jpeg" type="file" multiple="" autocomplete="off" style="display: none;"></div><p class="_1cQuv"><span>This field is mandatory</span></p></div></div><div class="_2ytqd"></div>
                                <div class="rui-2SwH7 rui-1JF_2">
                                    <div class="_1Hyzp rui-2SwH7 rui-1wY3r rui-3CPXI rui-3E1c2 rui-1JF_2" data-aut-id="location">
                                        <h2>Confirm your location</h2>
                                        <div class="" data-aut-id="sphereLocationTabContainer">
                                            
                             <div class="oogMA">
                                <div class="oogMA">
                                    <div class="rui-2zbKc">
                                        <label for="make">State *</label>
                                        <div class="rui-D-GoM rui-33EYo rui-1H_PK" style="width: 500px;">
                                            <select id="sid" onchange="loadcity(this.value);" name="sid" class="rui-1ekfu rui-98Wif" data-aut-id="ddmake" >
                                                 <option value=""></option>
                                                @foreach($state as $m)
                                               <option value="{{ $m->state_id }}">{{ $m->state_name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="rui--e0m_">
                                                <div class="rui-yDKiM">
                                                    <svg width="16px" height="16px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                                                        <path class="rui-2BsmJ" d="M744.727 450.484v-54.846h-54.846l-216.669 216.669-100.305-100.305h-54.846v54.846l127.728 127.728h54.846l244.092-244.092zM512 162.911c-192.485 0-349.091 156.606-349.091 349.091s156.606 349.091 349.091 349.091c192.485 0 349.091-156.606 349.091-349.091s-156.606-349.091-349.091-349.091v0zM512 938.669c-235.268 0-426.667-191.399-426.667-426.667s191.399-426.667 426.667-426.667c235.268 0 426.667 191.399 426.667 426.667s-191.399 426.667-426.667 426.667v0z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="rui-2AH6h">
                                                    <svg width="16px" height="16px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                                                        <path class="rui-u_VZV" d="M85.392 277.333h60.331l366.336 366.336 366.336-366.336h60.331v60.331l-408.981 409.003h-35.307l-409.045-409.003z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rui-1g6wu">
                                            <span class="rui-qvKkT" data-aut-id="">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <div class="oogMA">
                                    <div class="rui-2zbKc">
                                        <label for="txtmodel">City *</label>
                                        <div class="rui-D-GoM rui-33EYo rui-1H_PK" style="width: 500px;">
                                             <select id="txtcity" name="txtcity" class="rui-1ekfu rui-98Wif" data-aut-id="ddmake" >
                                                 <option value=""></option>
                                            </select>
                                            <div class="rui--e0m_">
                                                <div class="rui-yDKiM">
                                                    <svg width="16px" height="16px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                                                        <path class="rui-2BsmJ" d="M744.727 450.484v-54.846h-54.846l-216.669 216.669-100.305-100.305h-54.846v54.846l127.728 127.728h54.846l244.092-244.092zM512 162.911c-192.485 0-349.091 156.606-349.091 349.091s156.606 349.091 349.091 349.091c192.485 0 349.091-156.606 349.091-349.091s-156.606-349.091-349.091-349.091v0zM512 938.669c-235.268 0-426.667-191.399-426.667-426.667s191.399-426.667 426.667-426.667c235.268 0 426.667 191.399 426.667 426.667s-191.399 426.667-426.667 426.667v0z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="rui-2AH6h">
                                                    <svg width="16px" height="16px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                                                        <path class="rui-u_VZV" d="M85.392 277.333h60.331l366.336 366.336 366.336-366.336h60.331v60.331l-408.981 409.003h-35.307l-409.045-409.003z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rui-1g6wu">
                                            <span class="rui-qvKkT" data-aut-id="">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>                   
                            <div class="_2HvgT">
                                <div class="_7b6G1">
                                    <div class="_25-v9">
                                        <div class="tBInl">
                                            <div class="rui-2zbKc">
                                                <label for="title">Address Line 1 *</label>
                                                <div class="rui-D-GoM rui-33EYo rui-1H_PK" style="width: 500px;">
                                                    <div class="rui-RcLUE">
                                                        <div class="rui-3wYvC">
                                                            <input id="title"  name="txtaddrsline1"  type="text" autocomplete="off" class="rui-1ekfu rui-3oSYn" maxlength="70" value="" >
                                                            <div class="rui-1ckrC">
                                                                <div class="rui-yDKiM"><svg width="16px" height="16px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                                                                    <path class="rui-2BsmJ" d="M744.727 450.484v-54.846h-54.846l-216.669 216.669-100.305-100.305h-54.846v54.846l127.728 127.728h54.846l244.092-244.092zM512 162.911c-192.485 0-349.091 156.606-349.091 349.091s156.606 349.091 349.091 349.091c192.485 0 349.091-156.606 349.091-349.091s-156.606-349.091-349.091-349.091v0zM512 938.669c-235.268 0-426.667-191.399-426.667-426.667s191.399-426.667 426.667-426.667c235.268 0 426.667 191.399 426.667 426.667s-191.399 426.667-426.667 426.667v0z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="_2HvgT">
                                <div class="_7b6G1">
                                    <div class="_25-v9">
                                        <div class="tBInl">
                                            <div class="rui-2zbKc">
                                                <label for="title">Address Line 2 *</label>
                                                <div class="rui-D-GoM rui-33EYo rui-1H_PK" style="width: 500px;">
                                                    <div class="rui-RcLUE">
                                                        <div class="rui-3wYvC">
                                                            <input id="title" name="txtaddrsline2" type="text" autocomplete="off" class="rui-1ekfu rui-3oSYn" maxlength="70" value=""  ">
                                                            <div class="rui-1ckrC">
                                                                <div class="rui-yDKiM"><svg width="16px" height="16px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                                                                    <path class="rui-2BsmJ" d="M744.727 450.484v-54.846h-54.846l-216.669 216.669-100.305-100.305h-54.846v54.846l127.728 127.728h54.846l244.092-244.092zM512 162.911c-192.485 0-349.091 156.606-349.091 349.091s156.606 349.091 349.091 349.091c192.485 0 349.091-156.606 349.091-349.091s-156.606-349.091-349.091-349.091v0zM512 938.669c-235.268 0-426.667-191.399-426.667-426.667s191.399-426.667 426.667-426.667c235.268 0 426.667 191.399 426.667 426.667s-191.399 426.667-426.667 426.667v0z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="_2HvgT">
                                <div class="_7b6G1">
                                    <div class="_25-v9">
                                        <div class="tBInl">
                                            <div class="rui-2zbKc">
                                                <label for="title">Landmark *</label>
                                                <div class="rui-D-GoM rui-33EYo rui-1H_PK" style="width: 500px;">
                                                    <div class="rui-RcLUE">
                                                        <div class="rui-3wYvC">
                                                            <input id="title" name="txtlandmark"type="text" autocomplete="off" class="rui-1ekfu rui-3oSYn" maxlength="70" value="" >
                                                            <div class="rui-1ckrC">
                                                                <div class="rui-yDKiM"><svg width="16px" height="16px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                                                                    <path class="rui-2BsmJ" d="M744.727 450.484v-54.846h-54.846l-216.669 216.669-100.305-100.305h-54.846v54.846l127.728 127.728h54.846l244.092-244.092zM512 162.911c-192.485 0-349.091 156.606-349.091 349.091s156.606 349.091 349.091 349.091c192.485 0 349.091-156.606 349.091-349.091s-156.606-349.091-349.091-349.091v0zM512 938.669c-235.268 0-426.667-191.399-426.667-426.667s191.399-426.667 426.667-426.667c235.268 0 426.667 191.399 426.667 426.667s-191.399 426.667-426.667 426.667v0z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="_2HvgT">
                                <div class="_7b6G1">
                                    <div class="_25-v9">
                                        <div class="tBInl">
                                            <div class="rui-2zbKc">
                                                <label for="title">Pincode *</label>
                                                <div class="rui-D-GoM rui-33EYo rui-1H_PK" style="width: 500px;">
                                                    <div class="rui-RcLUE">
                                                        <div class="rui-3wYvC">
                                                            <input id="title" name="txtpincode" type="text" autocomplete="off" class="rui-1ekfu rui-3oSYn" maxlength="70" value="" >
                                                            <div class="rui-1ckrC">
                                                                <div class="rui-yDKiM"><svg width="16px" height="16px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                                                                    <path class="rui-2BsmJ" d="M744.727 450.484v-54.846h-54.846l-216.669 216.669-100.305-100.305h-54.846v54.846l127.728 127.728h54.846l244.092-244.092zM512 162.911c-192.485 0-349.091 156.606-349.091 349.091s156.606 349.091 349.091 349.091c192.485 0 349.091-156.606 349.091-349.091s-156.606-349.091-349.091-349.091v0zM512 938.669c-235.268 0-426.667-191.399-426.667-426.667s191.399-426.667 426.667-426.667c235.268 0 426.667 191.399 426.667 426.667s-191.399 426.667-426.667 426.667v0z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="oogMA">
                                <div class="rui-2zbKc">
                                    <label for="year">Contact No *</label>
                                    <div class="rui-D-GoM rui-33EYo rui-1H_PK" style="width: 500px;" style="width: 500px;">
                                        <div class="rui-RcLUE">
                                            <div class="rui-3wYvC">
                                                <input  name="txtcontact" type="text" autocomplete="off" class="rui-1ekfu rui-3oSYn" data-aut-id="inyear"  value="" >
                                                <div class="rui-1ckrC">
                                                    <div class="rui-yDKiM">
                                                        <svg width="16px" height="16px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                                                            <path class="rui-2BsmJ" d="M744.727 450.484v-54.846h-54.846l-216.669 216.669-100.305-100.305h-54.846v54.846l127.728 127.728h54.846l244.092-244.092zM512 162.911c-192.485 0-349.091 156.606-349.091 349.091s156.606 349.091 349.091 349.091c192.485 0 349.091-156.606 349.091-349.091s-156.606-349.091-349.091-349.091v0zM512 938.669c-235.268 0-426.667-191.399-426.667-426.667s191.399-426.667 426.667-426.667c235.268 0 426.667 191.399 426.667 426.667s-191.399 426.667-426.667 426.667v0z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rui-1g6wu">
                                        <span class="rui-qvKkT" data-aut-id=""></span>
                                    </div>
                                </div>
                            </div>
                           
                                            </div>
                                            <p class="_1vIR2">This field is mandatory</p>
                                        </div>

                                    </div>

                                    <!-- s -->
                                    <div class="_2ytqd">
                                        
                                    </div>
                                    <div class="rui-2SwH7 rui-1JF_2">
                                        <div class="_1Hyzp">
                                            <input type="submit" style="width: 300px; text-transform:uppercase;" data-aut-id="btnPost" class="rui-3sH3b rui-2yJ_A rui-1zK8h _3bFmz" value="POST NOW">
                                                
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </form> 

</div>
</div>
</div>
</div>


</div>
</div>
</div>



@endsection
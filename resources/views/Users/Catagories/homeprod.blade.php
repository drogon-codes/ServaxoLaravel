    @extends('Users.Layout.base')

@section('title')
Product Details
@endsection

@section('css-section')
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
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/homepage.js"></script>
    
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/addtocart.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/application.js"></script>
<!--         -->
@endsection


@section('main-section')
    <!-- Main Container  -->
     <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="/Users/Home"><i class="fa fa-home"></i></a></li>
            <li><a href="/Users/Products">Products</a></li>
            <!-- <li><a href="#">Chicken swinesha</a></li> -->
            
        </ul>
        
        <div class="row">
    
            <!--Left Part Start -->
            <aside class="col-sm-4 col-md-3 content-aside" id="column-left">
                <div class="module category-style">
                    <h3 class="modtitle">Categories</h3>
                    <div class="modcontent">
                        <div class="box-category">
                            @foreach($catdata as $s)
                            <ul id="cat_accordion" class="list-group">
                                <li class="hadchild"><a href="category.html" class="cutom-parent">{{ $s->catagory_name  }}</a>   <span class="button-view "></span>
                                    
                              
                                <!-- <li class="hadchild"><a class="cutom-parent" href="category.html">Electronics</a>   <span class="button-view  fa fa-plus-square-o"></span>
                                    <ul style="display: none;">
                                        <li><a href="category.html">Cycling</a></li>
                                        <li><a href="category.html">Running</a></li>
                                        <li><a href="category.html">Swimming</a></li>
                                        <li><a href="category.html">Football</a></li>
                                        <li><a href="category.html">Golf</a></li>
                                        <li><a href="category.html">Windsurfing</a></li>
                                    </ul>
                                </li>-->
                                
                             </li>
                            </ul>
                            @endforeach
                        </div>
                        
                        
                    </div>
                </div>
                <div class="module product-simple">
                    <h3 class="modtitle">
                        <span>Latest products</span>
                    </h3>
                    <div class="modcontent">
                        <div class="so-extraslider" >
                            <!-- Begin extraslider-inner -->
                            <div class=" extraslider-inner">
                                  @foreach($partdata as $item) 
                                <div class="item ">
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="#" target="_self" title="Mandouille short ">
                                                    <a  onclick="window.location='/Users/Catagories/Products/{{ $item->part_id }}'" target="_self" title="{{ $item->part_name }}">
                                                <img   src="{{URL::to('/')}}/part_img/{{ $item->img1 }}" class="img-1 img-responsive" alt="image1">
                                                    </a>
                                            </div>
                                            
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" title="Mandouille short">{{ $item->part_name }} </a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price">Rs.{{ $item->price }} </span>&nbsp;&nbsp;

                                                <!-- <span class="price-old">$76.00 </span>&nbsp; -->

                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                    
                                    <!-- End item-wrap -->
                                </div>
                                @endforeach
                            </div>
                            <!--End extraslider-inner -->
                        </div>
                    </div>
                </div>
               <!--  <div class="module banner-left hidden-xs ">
                    <div class="banner-sidebar banners">
                      <div>
                        <a title="Banner Image" href="#"> 
                          <img src="{{URL::to('/')}}/Userassets/image/catalog/banners/banner-sidebar.jpg" alt="Banner Image"> 
                        </a>
                      </div>
                    </div>
                </div> -->
            </aside>

            <!--Left Part End -->
            @foreach($partdata as $d)
            <!--Middle Part Start-->
            <div id="content" class="col-md-9 col-sm-8">
                
                <div class="product-view row">
                    <div class="left-content-product">
                
                        <div class="content-product-left class-honizol col-md-5 col-sm-12 col-xs-12">
                            <div class="large-image">
                                <img  itemprop="image" class="product-image-zoom" src="{{URL::to('/')}}/part_img/{{ $d->img1 }}" title="Chicken swinesha" alt="Chicken swinesha">
                            </div>
                            <a class="thumb-video pull-left" href="https://www.youtube.com/watch?v=HhabgvIIXik"><i class="fa fa-youtube-play"></i></a>
                            
                            <div id="thumb-slider" class="yt-content-slider full_slider owl-drag" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column00="4" data-items_column0="4" data-items_column1="3" data-items_column2="4"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                <a data-index="0" class="img thumbnail " data-image="{{URL::to('/')}}/part_img/{{ $d->img1 }}" title="">
                                    <img src="{{URL::to('/')}}/part_img/{{ $d->img1 }}" title="Chicken swinesha" alt="Chicken swinesha">
                                </a>
                                <a data-index="1" class="img thumbnail " data-image="{{URL::to('/')}}/part_img/{{ $d->img2 }}" title="Chicken swinesha">
                                    <img src="{{URL::to('/')}}/part_img/{{ $d->img2 }}" title="Chicken swinesha" alt="Chicken swinesha">
                                </a>
                                 <a data-index="2" class="img thumbnail " data-image="{{URL::to('/')}}/part_img/{{ $d->img3 }}" title="Chicken swinesha">
                                    <img src="{{URL::to('/')}}/part_img/{{ $d->img3 }}" title="Chicken swinesha" alt="Chicken swinesha">
                                </a>
                            </div>
                            
                        </div>

                        <div class="content-product-right col-md-7 col-sm-12 col-xs-12">
                            <div class="title-product">
                                <h1>{{$d->part_name}}</h1>
                            </div>
                            <!-- Review ---->
                            
                            <div class="product-label form-group">
                                <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                    <span class="price-new" itemprop="price">Rs.{{ $d->price }}</span>
                                    <!-- <span class="price-old">$122.00</span> -->
                                </div>
                                <div class="stock"><span>Availability:</span> <span class="status-stock">In Stock</span></div>
                            </div>

                            <div class="product-box-desc">
                                <div class="inner-box-desc">
                                    <div class="brand"><span>Model:</span><a href="#">{{ $d->model_name }}</a>     </div>
                                    <div class="model"><span>Manual:</span>&nbsp;<i class="fmdi mdi-download"></i></div>
                                </div>
                            </div>


                            <div id="product">
                                <!-- <h4>Available Options</h4>
                                <div class="image_option_type form-group required">
                                    <label class="control-label">Colors</label>
                                    <ul class="product-options clearfix"id="input-option231">
                                        <li class="radio">
                                            <label>
                                                <input class="image_radio" type="radio" name="option[231]" value="33"> 
                                                <img src="{{URL::to('/')}}/Userassets/image/demo/colors/blue.jpg" data-original-title="blue +$12.00" class="img-thumbnail icon icon-color">             <i class="fa fa-check"></i>
                                                <label> </label>
                                            </label>
                                        </li>
                                        <li class="radio">
                                            <label>
                                                <input class="image_radio" type="radio" name="option[231]" value="34"> 
                                                <img src="{{URL::to('/')}}/Userassets/image/demo/colors/brown.jpg" data-original-title="brown -$12.00" class="img-thumbnail icon icon-color">               <i class="fa fa-check"></i>
                                                <label> </label>
                                            </label>
                                        </li>
                                        <li class="radio">
                                            <label>
                                                <input class="image_radio" type="radio" name="option[231]" value="35"> <img src="{{URL::to('/')}}/Userassets/image/demo/colors/green.jpg"
                                                data-original-title="green +$12.00" class="img-thumbnail icon icon-color">              <i class="fa fa-check"></i>
                                                <label> </label>
                                            </label>
                                        </li>
                                        <li class="selected-option">
                                        </li>
                                    </ul>
                                </div>
                                 -->
                                <!-- <div class="box-checkbox form-group required">
                                    <label class="control-label">Checkbox</label>
                                    <div id="input-option232">
                                        <div class="checkbox">
                                            <label for="checkbox_1"><input type="checkbox" name="option[232][]" value="36" id="checkbox_1"> Checkbox 1 (+$12.00)</label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="checkbox_2"><input type="checkbox" name="option[232][]" value="36" id="checkbox_2"> Checkbox 2 (+$36.00)</label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="checkbox_3"><input type="checkbox" name="option[232][]" value="36" id="checkbox_3"> Checkbox 3 (+$24.00)</label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="checkbox_4"><input type="checkbox" name="option[232][]" value="36" id="checkbox_4"> Checkbox 4 (+$48.00)</label>
                                        </div>
                                    </div>
                                </div>
 -->
                                <div class="form-group box-info-product">
                                    <div class="option quantity">
                                        <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
                                            <label>Qty</label>
                                            <input class="form-control" type="text" name="quantity"
                                            value="1">
                                            <input type="hidden" name="product_id" value="50">
                                            <span class="input-group-addon product_quantity_down">−</span>
                                            <span class="input-group-addon product_quantity_up">+</span>
                                        </div>
                                    </div>

                                    <div class="cart">
                                        <input type="button" data-toggle="tooltip" title="" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" onclick="cart.add('42', '1');" data-original-title="Add to Cart">
                                    </div>
                                 

                                </div>
<!--   
                            </div>
                             end box info product -->

                        </div>
                    </div>
                </div>
                <!-- Product Tabs -->
                <div class="producttab ">
                    <div class="tabsslider  vertical-tabs col-xs-12">
                        <ul class="nav nav-tabs col-lg-2 col-sm-3">
                            <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                            <li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Reviews (1)</a></li>
                            <!-- <li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Tags</a></li>
                            <li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Custom Tab</a></li> -->
                        </ul>
                        <div class="tab-content col-lg-10 col-sm-9 col-xs-12">
                            <div id="tab-1" class="tab-pane fade active in">
                                <p>{{ $d->part_description }}</p>
                                <h3>
                                    Features:</h3>
                                <p>
                                    Unrivaled display performance</p>
                                <ul>
                                    <li>
                                        30-inch (viewable) active-matrix liquid crystal display provides breathtaking image quality and vivid, richly saturated color.</li>
                                    <li>
                                        Support for 2560-by-1600 pixel resolution for display of high definition still and video imagery.</li>
                                    <li>
                                        Wide-format design for simultaneous display of two full pages of text and graphics.</li>
                                    <li>
                                        Industry standard DVI connector for direct attachment to Mac- and Windows-based desktops and notebooks</li>
                                    <li>
                                        Incredibly wide (170 degree) horizontal and vertical viewing angle for maximum visibility and color performance.</li>
                                    <li>
                                        Lightning-fast pixel response for full-motion digital video playback.</li>
                                    <li>
                                        Support for 16.7 million saturated colors, for use in all graphics-intensive applications.</li>
                                </ul>
                                <p>
                                    Simple setup and operation</p>
                                <ul>
                                    <li>
                                        Single cable with elegant breakout for connection to DVI, USB and FireWire ports</li>
                                    <li>
                                        Built-in two-port USB 2.0 hub for easy connection of desktop peripheral devices.</li>
                                    <li>
                                        Two FireWire 400 ports to support iSight and other desktop peripherals</li>
                                </ul>
                                <p>
                                    Sleek, elegant design</p>
                                <ul>
                                    <li>
                                        Huge virtual workspace, very small footprint.</li>
                                    <li>
                                        Narrow Bezel design to minimize visual impact of using dual displays</li>
                                    <li>
                                        Unique hinge design for effortless adjustment</li>
                                    <li>
                                        Support for VESA mounting solutions (Apple Cinema Display VESA Mount Adapter sold separately)</li>
                                </ul>
                                
                                
                            </div>
                            <div id="tab-review" class="tab-pane fade">
                                <form>
                                    <div id="review">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 50%;"><strong>Super Administrator</strong></td>
                                                    <td class="text-right">29/07/2015</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p>Best this product opencart</p>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="text-right"></div>
                                    </div>
                                    <h2 id="review-title">Write a review</h2>
                                    <div class="contacts-form">
                                        <div class="form-group"> <span class="icon icon-user"></span>
                                            <input type="text" name="name" class="form-control" value="Your Name" onblur="if (this.value == '') {this.value = 'Your Name';}" onfocus="if(this.value == 'Your Name') {this.value = '';}"> 
                                        </div>
                                        <div class="form-group"> <span class="icon icon-bubbles-2"></span>
                                            <textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
                                        </div> 
                                        <span style="font-size: 11px;"><span class="text-danger">Note:</span>                       HTML is not translated!</span>
                                        
                                        <div class="form-group">
                                         <b>Rating</b> <span>Bad</span>&nbsp;
                                        <input type="radio" name="rating" value="1"> &nbsp;
                                        <input type="radio" name="rating"
                                        value="2"> &nbsp;
                                        <input type="radio" name="rating"
                                        value="3"> &nbsp;
                                        <input type="radio" name="rating"
                                        value="4"> &nbsp;
                                        <input type="radio" name="rating"
                                        value="5"> &nbsp;<span>Good</span>
                                        
                                        </div>
                                        <div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a></div>
                                    </div>
                                </form>
                            </div>
                            <div id="tab-4" class="tab-pane fade">
                                <a href="#">Monitor</a>,
                                <a href="#">Apple</a>               
                            </div>
                            <div id="tab-5" class="tab-pane fade">
                                <h3 class="custom-color">Take a trivial example which of us ever undertakes</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur
                                    sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore
                                    magna aliquyam erat, sed diam voluptua.
                                    At vero eos et accusam et justo duo
                                    dolores et ea rebum. Stet clita kasd
                                    gubergren, no sea takimata sanctus est
                                    Lorem ipsum dolor sit amet. Lorem ipsum
                                    dolor sit amet, consetetur sadipscing
                                    elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam
                                    erat, sed diam voluptua. </p>
                                <p>At vero eos et accusam et justo duo dolores
                                    et ea rebum. Stet clita kasd gubergren,
                                    no sea takimata sanctus est Lorem ipsum
                                    dolor sit amet. Lorem ipsum dolor sit
                                    amet, consetetur sadipscing elitr.</p>
                                    <ul class="marker-simple-list two-columns">
                        <li>Nam liberempore</li>
                        <li>Cumsoluta nobisest</li>
                        <li>Eligendptio cumque</li>
                        <li>Nam liberempore</li>
                        <li>Cumsoluta nobisest</li>
                        <li>Eligendptio cumque</li>
                        </ul>
                                <p>Sed diam nonumy eirmod tempor invidunt
                                    ut labore et dolore magna aliquyam erat,
                                    sed diam voluptua. At vero eos et accusam
                                    et justo duo dolores et ea rebum. Stet
                                    clita kasd gubergren, no sea takimata
                                    sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Product Tabs -->
                @endforeach
                <!-- Related Products -->
                <div class="related titleLine products-list grid module  ">
                    <h3 class="modtitle">Related Products  </h3>
            
                    <div class="releate-products yt-content-slider products-list" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                            <div class="product-layout product-grid">                                               
                                <div class="product-item-container item--static">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="Volup tatem accu">
                                                <img src="{{URL::to('/')}}/part_img/{{ $d->img1 }}" class="img-1 img-responsive" alt="image1">
                                                <img src="{{URL::to('/')}}/part_img/{{ $d->img2 }}" class="img-2 img-responsive" alt="image2">
                                            </a>
                                        </div>
                                        <span class="label-product label-new">New </span>
                                        <!--quickview--> 
                                        <div class="so-quickview">
                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-search"></i><span>Quick view</span></a>
                                        </div>                                                     
                                        <!--end quickview-->
                                    </div>
                                    <div class="right-block">
                                        <div class="button-group cartinfo--static">
                                            
                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button>
                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                <span>Add to cart </span>   
                                            </button>
                                            <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button>                                                    
                                        </div>
                                        <h4><a href="product.html" title="Volup tatem accu" target="_self">Volup tatem accu</a></h4>
                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                          <span class="price">$48.00</span>
                                        </div>
                                    </div>                                            
                                </div>                                            
                            </div>
                            <div class="product-layout product-grid">                                                 
                                <div class="product-item-container item--static">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="DPicanha porkcho">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/demo/product/270/2.jpg" class="img-1 img-responsive" alt="image1">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/demo/product/270/3.jpg" class="img-2 img-responsive" alt="image2">
                                            </a>
                                        </div>
                                        
                                        <!--quickview--> 
                                        <div class="so-quickview">
                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-search"></i><span>Quick view</span></a>
                                        </div>                                                     
                                        <!--end quickview-->
                                    </div>
                                    <div class="right-block">
                                        <div class="button-group cartinfo--static">                                                
                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button>
                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                <span>Add to cart </span>   
                                            </button>
                                            <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button>                                                    
                                        </div>
                                        <h4><a href="product.html" title="Picanha porkcho" target="_self">Picanha porkcho</a></h4>
                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                          <span class="price">$89.00</span>
                                        </div>
                                    </div>
                                </div>                                         
                            </div>
                            <div class="product-layout product-grid">                                                 
                                <div class="product-item-container item--static">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="Stickrum bresao">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/demo/product/270/3.jpg" class="img-1 img-responsive" alt="image1">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/demo/product/270/4.jpg" class="img-2 img-responsive" alt="image2">
                                            </a>
                                        </div>
                                        <span class="label-product label-sale">-11%</span>
                                        <!--quickview--> 
                                        <div class="so-quickview">
                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-search"></i><span>Quick view</span></a>
                                        </div>                                                     
                                        <!--end quickview-->
                                    </div>
                                    <div class="right-block">
                                        <div class="button-group cartinfo--static">
                                            
                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button>
                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                <span>Add to cart </span>   
                                            </button>
                                            <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button>                                                    
                                        </div>
                                        <h4><a href="product.html" title="Stickrum bresao" target="_self">Stickrum bresao</a></h4>
                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                            <span class="price-new">$85.00</span>
                                            <span class="price-old">$96.00</span>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>
                            <div class="product-layout product-grid">                                                
                                <div class="product-item-container item--static">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="Shoulder kevinis">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/demo/product/270/4.jpg" class="img-1 img-responsive" alt="image1">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/demo/product/270/5.jpg" class="img-2 img-responsive" alt="image2">
                                            </a>
                                        </div>
                              
                                        <!--quickview--> 
                                        <div class="so-quickview">
                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-search"></i><span>Quick view</span></a>
                                        </div>                                                     
                                        <!--end quickview-->
                                    </div>
                                    <div class="right-block">
                                        <div class="button-group cartinfo--static">
                                            
                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button>
                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                <span>Add to cart </span>   
                                            </button>
                                            <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button>                                                    
                                        </div>
                                        <h4><a href="product.html" title="Shoulder kevinis" target="_self">Shoulder kevinis</a></h4>
                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                          <span class="price">$60.00</span>
                                        </div>
                                    </div>
                                    
                                </div>                                             
                            </div>
                            <div class="product-layout product-grid">                                             
                                <div class="product-item-container item--static">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="Remporum stick">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/demo/product/270/5.jpg" class="img-1 img-responsive" alt="image1">
                                                <img src="{{URL::to('/')}}/Userassets/image/catalog/demo/product/270/6.jpg" class="img-2 img-responsive" alt="image2">
                                            </a>
                                        </div>
                                        <span class="label-product label-new">New</span>
                                        <!--quickview--> 
                                        <div class="so-quickview">
                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-search"></i><span>Quick view</span></a>
                                        </div>                                                     
                                        <!--end quickview-->
                                    </div>
                                    <div class="right-block">
                                        <div class="button-group cartinfo--static">
                                            
                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button>
                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                <span>Add to cart </span>   
                                            </button>
                                            <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button>                                                    
                                        </div>
                                        <h4><a href="product.html" title="Remporum stick" target="_self">Remporum stick</a></h4>
                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                          <span class="price">$65.00</span>
                                        </div>
                                    </div>
                                </div>                                           
                            </div>
                    </div>
                </div>

                <!-- end Related  Products-->
            </div>
       
            </div>
            
            
        </div>
        <!--Middle Part End-->
    </div>
    <!-- //Main Container -->
@endsection



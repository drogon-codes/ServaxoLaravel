@if(!Session::has('id'))
  <script>
  window.location.href = '{{url("admin/login")}}';
</script>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
        
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        @yield("css")

    </head>

    
    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <!-- <span class="logo-sm">
                                    <img src="{{URL::to('/')}}/assets/images/logo.svg" alt="" height="22">
                                </span> -->
                                <span class="logo-lg">
                                    <img src="{{URL::to('/')}}/assets/images/logo.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="/admin/Dashboard" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{URL::to('/')}}/assets/images/iconServaxo.png" alt="" height="25">
                                    <!-- <img src="{{URL::to('/')}}/assets/images/logo-light.svg" alt="" height="22"> -->
                                </span>
                                <span class="logo-lg">
                                    <img src="{{URL::to('/')}}/assets/images/logo.png" alt="" height="60">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <!-- <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form> -->
                        <!-- <h3>ADMIN DASHBOARD</h3> -->
                        <!-- <div class="dropdown dropdown-mega d-none d-lg-block ml-2">
                            <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                <span key="t-megamenu">Mega Menu</span>
                                <i class="mdi mdi-chevron-down"></i> 
                            </button>
                            <div class="dropdown-menu dropdown-megamenu">
                                <div class="row">
                                    <div class="col-sm-8">
    
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h5 class="font-size-14 mt-0" key="t-ui-components">UI Components</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-lightbox">Lightbox</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-range-slider">Range Slider</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-sweet-alert">Sweet Alert</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-rating">Rating</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-forms">Forms</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-tables">Tables</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-charts">Charts</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-md-4">
                                                <h5 class="font-size-14 mt-0" key="t-applications">Applications</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-ecommerce">Ecommerce</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-calendar">Calendar</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-email">Email</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-projects">Projects</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-tasks">Tasks</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-contacts">Contacts</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-md-4">
                                                <h5 class="font-size-14 mt-0" key="t-extra-pages">Extra Pages</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-light-sidebar">Light Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-compact-sidebar">Compact Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-horizontal">Horizontal layout</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-maintenance">Maintenance</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-coming-soon">Coming Soon</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-timeline">Timeline</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-faqs">FAQs</a>
                                                    </li>
                            
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5 class="font-size-14 mt-0" key="t-ui-components">UI Components</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-lightbox">Lightbox</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-range-slider">Range Slider</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-sweet-alert">Sweet Alert</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-rating">Rating</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-forms">Forms</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-tables">Tables</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-charts">Charts</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-sm-5">
                                                <div>
                                                    <img src="{{URL::to('/')}}/assets/images/megamenu-img.png" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> -->
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">
        
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img id="header-lang-img" src="{{URL::to('/')}}/assets/images/flags/us.jpg" alt="Header Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">

                                    <!-- item
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
                                    <img src="{{URL::to('/')}}/assets/images/flags/us.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">English</span>
                                </a>
                                <!-- item
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                    <img src="{{URL::to('/')}}/assets/images/flags/spain.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                    <img src="{{URL::to('/')}}/assets/images/flags/germany.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                    <img src="{{URL::to('/')}}/assets/images/flags/italy.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                    <img src="{{URL::to('/')}}/assets/images/flags/russia.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div> -->

                        <!-- <div class="dropdown d-none d-lg-inline-block ml-1">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-customize"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                <div class="px-lg-2">
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{URL::to('/')}}/assets/images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{URL::to('/')}}/assets/images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{URL::to('/')}}/assets/images/brands/dribbble.png" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row no-gutters">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{URL::to('/')}}/assets/images/brands/dropbox.png" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{URL::to('/')}}/assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                                <span>Mail Chimp</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{URL::to('/')}}/assets/images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <div class="dropdown d-none d-lg-inline-block ml-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <!-- <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-bell bx-tada"></i>
                                <span class="badge badge-danger badge-pill">3</span>
                            </button> -->
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0" key="t-notifications"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small" key="t-view-all"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="#" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1" key="t-your-order">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="text-reset notification-item">
                                        <div class="media">
                                            <img src="{{URL::to('/')}}/assets/images/users/avatar-3.jpg"
                                                class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">James Lemire</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1" key="t-shipped">Your item is shipped</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="text-reset notification-item">
                                        <div class="media">
                                            <img src="{{URL::to('/')}}/assets/images/users/avatar-4.jpg"
                                                class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-occidental">As a skeptical Cambridge friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top">
                                    <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle mr-1"></i> <span key="t-view-more">View More..</span> 
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{URL::to('/')}}/admin_img/{{ Session::get('profile') }}"
                                    alt="Header Avatar">
                                <!-- <img src="{{URL::to('/')}}/admin_img/{{ Session::get('profile') }}" alt="" class="img-thumbnail rounded-circle"> -->
                                <span class="d-none d-xl-inline-block ml-1" key="t-henry">{{ Session::get("name") }}</span>
                                <i class="mdi  d-none d-xl-inline-block"></i>
                                <!-- <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i> -->
                            </button>
                            <!-- <div class="dropdown-menu dropdown-menu-right">
                                <!-- item
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> <span key="t-profile">Profile</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle mr-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                                <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> <span key="t-settings">Settings</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle mr-1"></i> <span key="t-lock-screen">Lock screen</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="/logout"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div> -->
                        </div>
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon  waves-effect">
                            <a class="text-danger" href="/logout"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                        </button>
                        </div>
                        <!-- <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <a class="dropdown-item text-danger" href="/logout"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </button>
                        </div> -->
                        

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->

                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Dashboard</li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="bx bx-map"></i>
                                        <span class="badge badge-pill badge-info float-right"></span>
                                        <span key="t-dashboards">Location</span>
                                    </a>
                                     <ul><!--class="sub-menu" aria-expanded="false" -->
                                        <li><a href="/admin/State/ViewState" key="t-default">State</a></li>
                                        <li><a href="/admin/City/ViewCity" key="t-saas">City</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="bx bxs-widget"></i>
                                        <span class="badge badge-pill badge-info float-right"></span>
                                        <span key="t-layouts">Master</span>
                                    </a>
                                    <ul>
                                        <li><a href="/admin/Category/ViewCategory" key="t-vertical">Category</a></li>
                                        <li><a href="/admin/Company/ViewCompany" key="t-light-sidebar">Company</a></li>
                                    
                                        <li><a href="/admin/Model/ViewModel" key="t-compact-sidebar">Model</a></li>
                                        <li><a href="/admin/Parts/ViewParts" key="t-icon-sidebar">Parts</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="bx bxs-cart"></i>
                                        <span class="badge badge-pill badge-info float-right"></span>
                                        <span key="t-dashboards">Orders</span>
                                    </a>
                                    <ul>
                                        <li><a href="/admin/Order/ViewNewOrder" key="t-saas">New Order</a></li>
                                        <li><a href="/admin/Order/ViewProcessOrder" key="t-saas">Process Order</a></li>
                                        <li><a href="/admin/Order/ViewShippedOrder" key="t-saas">Shipped Order</a></li>
                                        <li><a href="/admin/Order/ViewCompleteOrder" key="t-saas">Complete Order</a></li>
                                        <li><a href="/admin/Order/ViewCancelOrder" key="t-saas">Cancel Order</a></li>
                                    </ul>
                                </li>
                                <li> 
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="fas fa-tools"></i>
                                        <span class="badge badge-pill badge-info float-right"></span>
                                        <span key="t-dashboards">Services</span>
                                    </a>
                                    <ul>
                                        <li><a href="/admin/Services/ViewServices" key="t-saas">Services</a></li>
                                        <li><a href="/admin/ratingReview/ratingReview" key="t-saas">Rating Review</a></li>
                                    </ul> 
                                </li>
                                <li> 
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="fas fa-gem"></i>
                                        <span class="badge badge-pill badge-info float-right"></span>
                                        <span key="t-dashboards">Packages</span>
                                    </a>
                                    <ul>
                                        <li><a href="/admin/Package/viewpackage" key="t-saas">Packages</a></li>
                                        <li><a href="/admin/PackageService/viewpackageservice" key="t-saas">Package Services</a></li>
                                    </ul> 
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="mdi mdi-car-wash"></i>
                                        <span class="badge badge-pill badge-info float-right"></span>
                                        <span key="t-dashboards">Services Order</span>
                                    </a>   
                                    <ul>  
                                        <li><a href="/admin/ServicesOrder/ViewNewOrder" key="t-saas">New Order</a></li>
                                        <li><a href="/admin/ServicesOrder/ViewProcessOrder" key="t-saas">Process Order</a></li>
                                        <li><a href="/admin/ServicesOrder/ViewCompleteOrder" key="t-saas">Complete Order</a></li>
                                        <li><a href="/admin/ServicesOrder/ViewCancelOrder" key="t-saas">Cancel Order</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="mdi mdi-tow-truck"></i>
                                        <!-- <span class="iconify" data-icon="mdi-tow-truck" data-inline="false"></span> -->
                                        <span class="badge badge-pill badge-info float-right"></span>
                                        <span key="t-dashboards">Tow Services</span>
                                    </a>   
                                    <ul>  
                                        <li><a href="/admin/Tow/ViewNewRequest" key="t-saas">New Request</a></li>
                                        <li><a href="/admin/Tow/ViewprocessRequest" key="t-saas">Process Request</a></li>
                                        <li><a href="/admin/Tow/ViewCompleteRequest" key="t-saas">Complete Request</a></li>
                                        <li><a href="/admin/Tow/ViewCancelRequest" key="t-saas">Cancel Request</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="mdi mdi-forum-outline"></i>
                                        <span class="badge badge-pill badge-info float-right"></span>
                                        <span key="t-dashboards">Partners</span>
                                    </a>   
                                    <ul>  
                                        <li><a href="/admin/Mechanic/ViewMechanic" key="t-saas">Mechanic</a></li>
                                        <li><a href="/admin/insuranceCompany/viewinscompany" key="t-saas">Insurance Company</a></li>
                                        <li><a href="/admin/plan/viewplan" key="t-saas">Plan</a></li>
                                        <li><a href="/admin/rtoagent/viewagent" key="t-saas">RTO Agent</a></li>
                                        <li><a href="/admin/trainingSchool/viewtrainingschool" key="t-saas">Training school</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="mdi mdi-offer"></i>
                                        <span class="badge badge-pill badge-info float-right"></span>
                                        <span key="t-dashboards">User Vehicle</span>
                                    </a>   
                                    <ul>  
                                        <li><a href="/admin/oldvehicle/viewoldvehicle" key="t-saas">Vehicle</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="mdi mdi-face-agent"></i>
                                        <span class="badge badge-pill badge-info float-right"></span>
                                        <span key="t-dashboards">Utility</span>
                                    </a>   
                                    <ul>  
                                        <li><a href="/admin/news/viewnews" key="t-saas">News</a></li>
                                        <li><a href="/admin/feedback/viewfeedback" key="t-saas">FeedBack</a></li>
                                    </ul>
                                </li>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            @yield('main-content')
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="{{URL::to('/')}}/assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="{{URL::to('/')}}/assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="{{URL::to('/')}}/assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        @yield('footer')
       @yield('js')
    </body>


<!-- Mirrored from themesbrand.com/skote/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Dec 2020 08:07:18 GMT -->
</html>
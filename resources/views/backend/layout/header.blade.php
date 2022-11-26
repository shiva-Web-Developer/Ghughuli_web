
<!doctype html>
<html lang="en">

<head>
     <!-- App favicon -->
     <link rel="shortcut icon" href="{{url('admin/assets/images/favicon.ico')}}">

     <!-- Bootstrap Css -->
     <link href="{{url('admin/assets/css/bootstrap.min.css ')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
     <!-- Icons Css -->
     <link href=" {{url('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
     <!-- App Css-->
     <link href=" {{url('admin/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

 </head>

 <body data-sidebar="dark" data-layout-mode="light">


     <!-- Begin page -->
     <div id="layout-wrapper">

         
         <header id="page-topbar">
             <div class="navbar-header">
                 <div class="d-flex">

                     <!-- LOGO -->
                     <div class="navbar-brand-box">
                     
                         <a href="{{route('admindash')}}" class="logo logo-light">
                             <span class="logo-sm">
                                 <img src="{{url('admin/assets/images/logo-light.svg')}}" alt="" height="22">
                             
                             </span>
                             <span class="logo-lg" style="text-decoration: none;color:white;">
                                 {{-- <img src="{{url('admin/assets/gg.png')}}" alt="" height="19" width="80"> --}}
                          <b>GHUGHULI</b>
                             </span>
                         </a>
                     </div>

                     <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                         <i class="fa fa-fw fa-bars"></i>
                     </button>


                     <div class="dropdown dropdown-mega d-none d-lg-block ms-2"></div>

                 </div>

                     <div class="dropdown d-inline-block">
                               
                     <span style="padding-right:10px;" class="d-none d-xl-inline-block ms-1" key="t-henry"><a href="{{route('logout')}}">Logout</a></span>
                        
                     </div>

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
                         <li class="menu-title" key="t-menu">Menu</li>

                         <li>
                             <a href="{{route('admindash')}}" class="waves-effect">
                                 <i class="bx bx-home"></i>
                                 <span key="t-chat">Dashboard</span>
                             </a>
                         </li>

                         <li>
                            <a href="{{route('demo')}}" class="waves-effect">
                                <i class="bx bx-chat"></i>
                                <span key="t-chat">Manage Slider</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('officerphoto')}}" class="waves-effect">
                                <i class="bx bx-chat"></i>
                                <span key="t-chat">Manage Officer Photo</span>
                            </a>
                        </li>

                         <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-chat"></i>
                                <span key="t-dashboards">Manage Gallery</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                 
                                    <li><a href="{{route('dataphoto')}}" key="t-default">Photo</a></li>
                                    <li><a href="{{route('dataphoto')}}" key="t-default">Video</a></li>
                            </ul>
                        </li> 
                        <li>
                            <a href="{{route('managesoftware')}}" class="waves-effect">
                                <i class="bx bx-chat"></i>
                                <span key="t-chat">Manage Software</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-chat"></i>
                                <span key="t-dashboards">Manage Menus</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                 
                                    <li><a href="{{route('addmenu')}}" key="t-default">Add Menu</a></li>
                                    <li><a href="{{route('addsubmenu')}}" key="t-default">Add Submenu</a></li>
                                    <li><a href="{{route('addchildmenu')}}" key="t-default">Add Childmenu</a></li>
                            </ul>
                        </li> 
                        <li>
                            <a href="{{route('sitecontent')}}" class="waves-effect">
                                <i class="bx bx-chat"></i>
                                <span key="t-chat">Manage Content</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('contactsdata')}}" class="waves-effect">
                                <i class="bx bx-chat"></i>
                                <span key="t-chat">Manage Contact</span>
                            </a>
                        </li>
                         <li>
                             <a href="{{route('logout')}}" class="waves-effect">
                                 <i class="bx bx-log-out"></i>
                                 <span key="t-chat">Logout</span>
                             </a>
                         </li>

                     </ul>
                 </div>
                 <!-- Sidebar -->
             </div>
         </div>
         <!-- Left Sidebar End -->
</body>
</html>
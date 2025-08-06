<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/picture1.png') }}" type="" />
    <title>{{ $title }}</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="CodedThemes">
      <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="CodedThemes">
      <!-- Favicon icon -->
      <link rel="icon" href="{{ URL::asset('assets/images/picture1.png') }}" type="image/x-icon">
      <!-- Google font-->
      <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Open+Sans:400,600') }}" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap/css/bootstrap.min.css') }}">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/icon/themify-icons/themify-icons.css') }}">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/icon/icofont/css/icofont.css') }}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/jquery.mCustomScrollbar.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/profile.css') }}">
      <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
      <script src="{{ URL::asset('https://kit.fontawesome.com/a076d05399.js') }}" crossorigin='anonymous'></script>
      <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: white;
        }
        hr {
        position: relative;
        top: 10px;
        border: none;
        height: 5px;
        background: #4f028774;
        margin-bottom: 20px;
    }
        #main {
        transition: margin-left .5s;
        padding: 16px;
        }

        @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        }
        </style>
  </head>

  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo" style="background-color: pink">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        {{-- <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a> --}}
                        <a href="{{ URL::to('/index') }}">
                            <img class="img-fluid" src="{{ URL::asset('assets/images/picture1.png') }}" alt="Theme-Logo" style="width: 50px; height: 50px; border-radius: 50px;" />
                        </a>
                        <a href="{{ URL::to('/index') }}">
                            <img class="img-fluid" src="{{ URL::asset('assets/images/picture2.png') }}" alt="Theme-Logo" style="width: 120px; height: 50px;" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>

                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-pink"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                </ul>
                            </li>
                        @if(session()->has('user_id'))
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="{{ URL::asset('uploads/users/'.$user_details['profile_picture']) }}" class="img-radius" alt="User-Profile-Image">
                                    <span>{{ $user_details['firstname'] }}&nbsp;{{ $user_details['lastname'] }} </span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="{{ URL::to('/profile') }}">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('/logout') }}">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                            @if(session()->has('user_id'))
                                    <img class="img-40 img-radius" src="{{ URL::asset('uploads/users/'.$user_details['profile_picture']) }}" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span>{{ $user_details['firstname'] }}&nbsp;{{ $user_details['lastname'] }} </span>
                                        <span id="more-details">{{ $user_details['type'] }}<i class="ti-angle-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="{{ URL::to('/profile') }}"><i class="ti-user"></i>View Profile</a>
                                            <a href="{{ URL::to('/logout') }}"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endif
                            {{-- <div class="pcoded-search">
                                <span class="searchbar-toggle">  </span>
                                <div class="pcoded-search-box ">
                                    <input type="text" placeholder="Search">
                                    <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
                                </div>
                            </div> --}}
                            <hr />
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Interface</div>
                        @if(session()->get('user_type')=='Admin')
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="{{ URL::to('/index') }}">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"  style="background-color: rgb(0, 238, 255)"><i class="fa fa-group"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Users</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="{{ URL::to('/hccusers') }}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Healthcare Centers</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        @endif
                        @if(session()->get('user_type')=='Vaccinator')
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="{{ URL::to('/index') }}">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        @endif
                        @if(session()->get('user_type')=='Vaccinator')
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Parent Panel</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="{{ URL::to('/parent_users') }}">
                                        <span class="pcoded-micon"  style="background-color: #f03f83"><i class="fas fa-user-friends"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Registered Parents List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('/appointments') }}">
                                        <span class="pcoded-micon"  style="background-color: #560098"><i class="fa fa-calendar"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Appointments</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                            </ul>
                        @endif
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Child Information Panel</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="{{ URL::to('/childlist') }}">
                                        <span class="pcoded-micon"  style="background-color: #b3ff4f"><i class="fa fa-list"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Registered Child List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Vaccine Panel</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="{{ URL::to('/a_vaccine_record') }}">
                                        <span class="pcoded-micon"  style="background-color: #b313b3"><i class="fa fa-file"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Vaccine Record</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">User Panel</div>
                            <ul class="pcoded-item pcoded-left-item">
                                        <li>
                                            <a href="{{ URL::to('/profile') }}">
                                                <span class="pcoded-micon"><i class="ti-user"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.dash.main">My Profile</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/logout') }}">
                                                <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i></span>
                                                <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Logout</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                            </ul>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                <div id="main">
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">


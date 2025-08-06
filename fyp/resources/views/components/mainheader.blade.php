<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>{{ $title }}</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('asset/img/favicons/picture1.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('asset/img/favicons/picture1.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('asset/img/favicons/picture1.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('asset/img/favicons/picture1.png') }}">
    <link rel="manifest" href="{{ URL::asset('asset/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="asset/img/favicons/picture1.png">
    <meta name="theme-color" content="#ffffff">
  <script src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js') }}"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ URL::asset('asset/css/theme.css') }}" rel="stylesheet" />
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
        </style>
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="{{ URL::to('/') }}"><img src="{{ URL::asset('asset/img/gallery/logo1.png') }}" width="160" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="{{ URL::to('/') }}">Home</a></li>
              {{-- <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="#about">About Us</a></li> --}}
              @if(session()->has('user_id')&&session()->get('user_type')=='Parent')
              <li class="nav-item px-2"><a class="nav-link" href="{{ URL::to('/services') }}">Services</a></li>
            <li class="nav-item px-2"><a class="nav-link" href="{{ URL::to('/parentprofile') }}"><img src="{{ URL::asset('uploads/users/'.$user_details['profile_picture']) }}" style="width: 30px; height: 30px; border-radius: 30px;" alt="">&nbsp;{{ $user_details['firstname'] }}</a></li>
            <a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="{{ URL::to('/logout') }}">Logout</a>
          @else
          <a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="{{ URL::to('/login') }}">Login</a>
          @endif
            </ul>
        </div>
        </div>
      </nav>

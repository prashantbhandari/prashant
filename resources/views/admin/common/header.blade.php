<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin Panel</title>
  <!-- Bootstrap core CSS-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">  
  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.min.css">
  <!-- Custom styles for this template-->
  <link href="{{ URL::to('css/admin/sb-admin.css') }}" rel="stylesheet">
  <!-- image upload-->
  <link href="{{ URL::to('css/admin/imageupload.css') }}" rel="stylesheet">
  <!-- Page level plugin CSS-->
  <link href="{{ URL::to('css/admin/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ URL::to('assets/toastr/toastr.min.css') }}">
</head>
<body class=" sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top" id="mainNav">
    <ul class="navbar-nav sidenav-toggler">
      <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
          <i class="fa fas fa-list"></i>
        </a>
      </li>
    </ul>
    @if($guard == "superadmin")
      <a class="navbar-brand" href="/superadmin" style="padding-left: 10px">  NoticeBoard <b>[Super Admin]</b></a>
    @elseif($guard == "admin")
      <a class="navbar-brand" href="/admin" style="padding-left: 10px">  NoticeBoard {{strtoupper(Auth::user()->city->name)}}</a>
    @endif
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">


        {{-- Super Admin Side Nav --}}
        @if($guard == "superadmin")
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="{{route('superadmin.dashboard')}}">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="City">
            <a class="nav-link" href="{{route('superadmin.city')}}">
              <i class="fa fa-fw fa-map-marker"></i>
              <span class="nav-link-text">City</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Admins">
            <a class="nav-link" href="{{route('superadmin.admins')}}">
              <i class="fa fa-fw fa-user"></i>
              <span class="nav-link-text">Admins</span>
            </a>
          </li>
        {{-- Super Admin Side Nav --}}



        {{-- Admin side nav --}}
        @elseif($guard == "admin")
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="/admin/home">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Notice">
          <a class="nav-link" href="/admin/notice-title">
            <i class="fa fa-fw fa-info-circle"></i>
            <span class="nav-link-text">Notice</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Header">
          <a class="nav-link" href="/admin/header">
            <i class="fa fa-fw fa-arrow-up"></i>
            <span class="nav-link-text">Header</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Footer">
          <a class="nav-link" href="/admin/footer">
            <i class="fa fa-fw fa-arrow-down"></i>
            <span class="nav-link-text">Footer</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Images">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-image"></i>
            <span class="nav-link-text">Images</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="/admin/gallery">Gallery</a>
            </li>
            <li>
              <a href="/admin/carousel">Carousel</a>
            </li>
            <li>
                <a href="/admin/title-image">Title Image</a>
              </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="General Info">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents1" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-info"></i>
            <span class="nav-link-text">General Info</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents1">
            <li>
              <a href="/admin/contact-info">Contact Info</a>
            </li>
            <li>
              <a href="/admin/about-us">About Page</a>
            </li>
          </ul>
        </li>
        @endif
      {{-- Admin Side Nav --}}


      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              <span class="caret"></span> {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu-right">
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-right: 20px">
              
              @if($guard == "admin")
              <a class="dropdown-item" href="{{route('admin.changepassword')}}">
                Change Password
              </a>
                <a class="dropdown-item" href="{{ route('admin.logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  {{ __('Admin Logout') }}
                </a>

                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              
              @elseif($guard == "superadmin")
              <a class="dropdown-item" href="{{route('superadmin.changepassword')}}">
                Change Password
              </a>
                <a class="dropdown-item" href="{{ route('superadmin.logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  {{ __('Super Admin Logout') }}
                </a>

                  <form id="logout-form" action="{{ route('superadmin.logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                @endif
            </div>
        </div>
        </li>
    </ul>
    </div>
  </nav>
  
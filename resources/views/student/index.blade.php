
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from flatable.phoenixcoded.net/default/dt-ext-buttons-html-5-data-export.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 12:11:50 GMT -->
<head>
  <title>SMS | All Students</title>


<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />


<link rel="icon" href="{{  asset('custom/assets/images/favicon.ico') }}" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{  asset('custom/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{  asset('custom/assets/icon/themify-icons/themify-icons.css') }}">

<link rel="stylesheet" type="text/css" href="{{  asset('custom/assets/icon/icofont/css/icofont.css') }}">

<link rel="stylesheet" type="text/css" href="{{  asset('custom/assets/pages/flag-icon/flag-icon.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{  asset('custom/assets/pages/menu-search/css/component.css') }}">

<link rel="stylesheet" type="text/css" href="{{  asset('custom/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{  asset('custom/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{  asset('custom/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{  asset('custom/assets/pages/data-table/extensions/buttons/css/buttons.dataTables.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{  asset('custom/assets/css/style.css') }}">

<link rel="stylesheet" type="text/css" href="{{  asset('custom/assets/css/color/color-1.css') }}" id="color" />
<link rel="stylesheet" type="text/css" href="{{  asset('custom/assets/css/linearicons.css') }}">
<link rel="stylesheet" type="text/css" href="{{  asset('custom/assets/css/simple-line-icons.css') }}">
<link rel="stylesheet" type="text/css" href="{{  asset('custom/assets/css/ionicons.css') }}">
<link rel="stylesheet" type="text/css" href="{{  asset('custom/assets/css/jquery.mCustomScrollbar.css') }}">
</head>
<body>

<div class="theme-loader">
<div class="ball-scale">
<div></div>
</div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">

{{-- Start of Top  nav bar --}}
<nav class="navbar header-navbar pcoded-header" header-theme="theme4">
  <div class="navbar-wrapper">
      <div class="navbar-logo">
          <a class="mobile-menu" id="mobile-collapse" href="#!">
          <i class="ti-menu"></i>
          </a>
          <a href="{{ url('/') }}">
          <h6>School Management System</h6> 
          </a>
          <a class="mobile-options">
          <i class="ti-more"></i>
          </a>
      </div>
      <div class="navbar-container container-fluid">
          <div>
          <ul class="nav-left">
          <li>
          <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
          </li>

          <li>
          <a href="#!" onclick="javascript:toggleFullScreen()">
          <i class="ti-fullscreen"></i>
          </a>
          </li>
          <li class="mega-menu-top">
          <a href="#">
          Mega
          <i class="ti-angle-down"></i>
          </a>
          <ul class="show-notification row">
          <li class="col-sm-3">
          <h6 class="mega-menu-title">Popular Links</h6>
          <ul class="mega-menu-links">
          <li><a href="form-elements-component.html">Form Elements</a></li>
          <li><a href="button.html">Buttons</a></li>
          <li><a href="map-google.html">Maps</a></li>
          <li><a href="user-card.html">Contact Cards</a></li>
          <li><a href="user-profile.html">User Information</a></li>
          <li><a href="auth-lock-screen.html">Lock Screen</a></li>
          </ul>
          </li>
          <li class="col-sm-3">
          <h6 class="mega-menu-title">Mailbox</h6>
          <ul class="mega-mailbox">
          <li>
          <a href="#" class="media">
          <div class="media-left">
          <i class="ti-folder"></i>
          </div>
          <div class="media-body">
          <h5>Data Backup</h5>
          <small class="text-muted">Store your data</small>
          </div>
          </a>
          </li>
          <li>
          <a href="#" class="media">
          <div class="media-left">
          <i class="ti-headphone-alt"></i>
          </div>
          <div class="media-body">
          <h5>Support</h5>
          <small class="text-muted">24-hour support</small>
          </div>
          </a>
          </li>
          <li>
          <a href="#" class="media">
          <div class="media-left">
          <i class="ti-dropbox"></i>
          </div>
          <div class="media-body">
          <h5>Drop-box</h5>
          <small class="text-muted">Store large amount of data in one-box only
          </small>
          </div>
          </a>
          </li>
          <li>
          <a href="#" class="media">
          <div class="media-left">
          <i class="ti-location-pin"></i>
          </div>
          <div class="media-body">
          <h5>Location</h5>
          <small class="text-muted">Find Your Location with ease of use</small>
          </div>
          </a>
          </li>
          </ul>
          </li>
          <li class="col-sm-3">
          <h6 class="mega-menu-title">Gallery</h6>
          <div class="row m-b-20">
          <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{  asset('custom/assets/images/mega-menu/01.jpg') }}" alt="Gallery-1">
          </div>
          <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{  asset('custom/assets/images/mega-menu/02.jpg') }}" alt="Gallery-2">
          </div>
          <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{  asset('custom/assets/images/mega-menu/03.jpg') }}" alt="Gallery-3">
          </div>
          </div>
          <div class="row m-b-20">
          <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{  asset('custom/assets/images/mega-menu/04.jpg') }}" alt="Gallery-4">
          </div>
          <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{  asset('custom/assets/images/mega-menu/05.jpg') }}" alt="Gallery-5">
          </div>
          <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{  asset('custom/assets/images/mega-menu/06.jpg') }}" alt="Gallery-6">
          </div>
          </div>
          <button class="btn btn-primary btn-sm btn-block">Browse Gallery</button>
          </li>
          <li class="col-sm-3">
          <h6 class="mega-menu-title">Contact Us</h6>
          <div class="mega-menu-contact">
          <div class="form-group row">
          <label for="example-text-input" class="col-3 col-form-label">Name</label>
          <div class="col-9">
          <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input">
          </div>
          </div>
          <div class="form-group row">
          <label for="example-search-input" class="col-3 col-form-label">Email</label>
          <div class="col-9">
          <input class="form-control" type="email" placeholder="Enter your E-mail Id" id="example-search-input">
          </div>
          </div>
          <div class="form-group row">
          <label for="example-search-input" class="col-3 col-form-label">Contact</label>
          <div class="col-9">
          <input class="form-control" type="number" placeholder="+91-9898989898" id="example-search-input">
          </div>
          </div>
          <div class="form-group row">
          <label for="exampleTextarea" class="col-3 col-form-label">Message</label>
          <div class="col-9">
          <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
          </div>
          </div>
          </div>
          </li>
          </ul>
          </li>
          </ul>
          <ul class="nav-right">

          <li class="user-profile header-notification">
          <a href="#!">
          <img src="{{  asset('custom/assets/images/user.png') }}" alt="User-Profile-Image">
          <span>John Doe</span>
          <i class="ti-angle-down"></i>
          </a>
          <ul class="show-notification profile-notification">
          <li>
          <a href="#!">
          <i class="ti-settings"></i> Settings
          </a>
          </li>
          <li>
          <a href="user-profile.html">
          <i class="ti-user"></i> Profile
          </a>
          </li>
          <li>
          <a href="#!">
          <i class="ti-layout-sidebar-left"></i> Logout
          </a>
          </li>
          </ul>
          </li>
          </ul>

          <div id="morphsearch" class="morphsearch">
      
          <div class="morphsearch-content">
          <div class="dummy-column">
          <h2>People</h2>
          <a class="dummy-media-object" href="#!">
          <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&amp;d=identicon&amp;r=G" alt="Sara Soueidan" />
          <h3>Sara Soueidan</h3>
          </a>
          <a class="dummy-media-object" href="#!">
          <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&amp;d=identicon&amp;r=G" alt="Shaun Dona" />
          <h3>Shaun Dona</h3>
          </a>
          </div>
          <div class="dummy-column">
          <h2>Popular</h2>
          <a class="dummy-media-object" href="#!">
          <img src="{{  asset('custom/assets/images/avatar-1.png') }}" alt="PagePreloadingEffect" />
          <h3>Page Preloading Effect</h3>
          </a>
          <a class="dummy-media-object" href="#!">
          <img src="{{  asset('custom/assets/images/avatar-1.png') }}" alt="DraggableDualViewSlideshow" />
          <h3>Draggable Dual-View Slideshow</h3>
          </a>
          </div>
          <div class="dummy-column">
          <h2>Recent</h2>
          <a class="dummy-media-object" href="#!">
          <img src="{{  asset('custom/assets/images/avatar-1.png') }}" alt="TooltipStylesInspiration" />
          <h3>Tooltip Styles Inspiration</h3>
          </a>
          <a class="dummy-media-object" href="#!">
          <img src="{{  asset('custom/assets/images/avatar-1.png') }}" alt="NotificationStyles" />
          <h3>Notification Styles Inspiration</h3>
          </a>
          </div>
          </div>

          <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
          </div>

          </div>
      </div>
  </div>
</nav>

{{-- End of Top  nav bar --}}


<div id="sidebar" class="users p-chat-user showChat">
<div class="had-container">
<div class="card card_main p-fixed users-main">
<div class="user-box">
<div class="card-block">
<div class="right-icon-control">
<input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
<div class="form-icon">
<i class="icofont icofont-search"></i>
</div>
</div>
</div>
<div class="main-friend-list">
<div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Josephin Doe</div>
</div>
</div>
<div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u1.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Lary Doe</div>
</div>
</div>
<div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alice</div>
</div>
</div>
<div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u2.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alia</div>
</div>
</div>
<div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Suzen</div>
</div>
</div>
<div class="media userlist-box" data-id="6" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Michael Scofield</div>
</div>
</div>
<div class="media userlist-box" data-id="7" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Irina Shayk</div>
</div>
</div>
<div class="media userlist-box" data-id="8" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-5.png" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Sara Tancredi</div>
</div>
</div>
<div class="media userlist-box" data-id="9" data-status="online" data-username="Samon" data-toggle="tooltip" data-placement="left" title="Samon">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Samon</div>
</div>
</div>
<div class="media userlist-box" data-id="10" data-status="online" data-username="Daizy Mendize" data-toggle="tooltip" data-placement="left" title="Daizy Mendize">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Daizy Mendize</div>
</div>
</div>
<div class="media userlist-box" data-id="11" data-status="offline" data-username="Loren Scofield" data-toggle="tooltip" data-placement="left" title="Loren Scofield">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Loren Scofield</div>
</div>
</div>
<div class="media userlist-box" data-id="12" data-status="online" data-username="Shayk" data-toggle="tooltip" data-placement="left" title="Shayk">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Shayk</div>
</div>
</div>
<div class="media userlist-box" data-id="13" data-status="offline" data-username="Sara" data-toggle="tooltip" data-placement="left" title="Sara">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Sara</div>
</div>
</div>
<div class="media userlist-box" data-id="14" data-status="online" data-username="Doe" data-toggle="tooltip" data-placement="left" title="Doe">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Doe</div>
</div>
</div>
<div class="media userlist-box" data-id="15" data-status="online" data-username="Lary" data-toggle="tooltip" data-placement="left" title="Lary">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u1.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Lary</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="showChat_inner">
<div class="media chat-inner-header">
<a class="back_chatBox">
<i class="icofont icofont-rounded-left"></i> Josephin Doe
</a>
</div>
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
</div>
<div class="media chat-messages">
<div class="media-body chat-menu-reply">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
<div class="media-right photo-table">
<a href="#!">
<img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png" alt="Generic placeholder image">
</a>
</div>
</div>
<div class="chat-reply-box p-b-20">
<div class="right-icon-control">
<input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
<div class="form-icon">
<i class="icofont icofont-paper-plane"></i>
</div>
</div>
</div>
</div>

<div class="pcoded-main-container">
<div class="pcoded-wrapper">


  {{-- Start of side bar --}}
  <nav class="pcoded-navbar" pcoded-header-position="relative">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
    <div class="">
    <div class="main-menu-header"></div>

    </div>
    <ul class="pcoded-item pcoded-left-item">
    <li class="">
    <a href="{{ url('/') }}">
    <span class="pcoded-micon"><i class="ti-home"></i></span>
    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
    <span class="pcoded-mcaret"></span>
    </a>
    </li>
    <li class="pcoded-hasmenu active pcoded-trigger">
    <a href="javascript:void(0)">
    <span class="pcoded-micon"><i class="icofont icofont-hat-alt"></i></span>
    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Students</span>
    <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">
    <li class=" ">
    <a href="{{ url('student/create') }}" data-i18n="nav.page_layout.bottom-menu">
    <span class="pcoded-micon"><i class="icofont icofont-hat-alt"></i></span>
    <span class="pcoded-mtext">Add student</span>
    <span class="pcoded-mcaret"></span>
    </a>
    </li>
    <li class=" active ">
    <a href="{{ url('student/') }}" data-i18n="nav.page_layout.box-layout">
    <span class="pcoded-micon"><i class="icofont icofont-hat-alt"></i></span>
    <span class="pcoded-mtext">All students</span>
    <span class="pcoded-mcaret"></span>
    </a>
    </li>
    </ul>
    </li>
    </ul>
    </li>
    </ul>
    </div>
    </nav>
{{-- End of side bar --}}


<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">
        @if (session('status'))
          <div class="alert alert-success" id="alert">
            {{ session('status') }}
          </div>
        @endif
<div class="page-header">
  <div class="page-header-title">
    <h4>List of Student</h4>
    
    </div>

</div>
<div class="page-header-breadcrumb">
  <ul class="breadcrumb-title">
  <li class="breadcrumb-item">
  <a href="{{ url('/') }}">
  <i class="icofont icofont-home"></i>
  </a>
  </li>
  <li class="breadcrumb-item"><a href="{{ url('student/create') }}">Add students</a>
  </li>
  <li class="breadcrumb-item">All student
  </li>
  </ul>
  </div>
</div>


<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-block">
<div class="dt-responsive table-responsive">
<table id="basic-btn" class="table table-striped  nowrap">
<thead>
  <tr>
    <th>#</th>
    <th>First Name</th>
    <th>Surname</th>
    <th>DOB</th>
    <th>Sex</th>
    <th ></th>
    <th>Actions</th>
    <th></th>
    </tr>
</thead>
<tbody>
  @foreach ($student as $row)
               
  <tr>
    <td></td>
    <td>{{ strtoupper($row->first_name) }}</td>
    <td>{{ strtoupper($row->surname) }}</td>
    <td>{{ $row->birth_date }}</td>
    <td>{{ $row->sex }}</td>
    <td>
      <a href="{{ url('student/'.$row->id) }}" class="btn btn-primary btn-round"><i class="icofont icofont-listing-number"></i></a>
    </td>
    <td style="text-align: center;">
      <a href="{{ url('student/'.$row->id.'/edit') }}" class="btn btn-warning btn-round"><i class="icofont icofont-edit"></i></a>
    </td>
      <td>
      <form action="{{ url('student/'.$row->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger  btn-round"><i class="icofont icofont-trash"></i></button>
      </form>
      
    </td>
  </tr>
  
  @endforeach

</tbody>

</table>
</div>
</div>
</div>

</div>

</div>
</div>
</div>
</div>
</div>
</div>


<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script type="text/javascript" src="{{  asset('custom/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{  asset('custom/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{  asset('custom/bower_components/tether/dist/js/tether.min.js') }}"></script>
<script type="text/javascript" src="{{  asset('custom/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{  asset('custom/bower_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<script type="text/javascript" src="{{  asset('custom/bower_components/modernizr/modernizr.js') }}"></script>
<script type="text/javascript" src="{{  asset('custom/bower_components/modernizr/feature-detects/css-scrollbars.js') }}"></script>

<script type="text/javascript" src="{{  asset('custom/bower_components/classie/classie.js') }}"></script>

<script src="{{  asset('custom/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{  asset('custom/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{  asset('custom/assets/pages/data-table/js/jszip.min.js') }}"></script>
<script src="{{  asset('custom/assets/pages/data-table/js/pdfmake.min.js') }}"></script>
<script src="{{  asset('custom/assets/pages/data-table/js/vfs_fonts.js') }}"></script>
<script src="{{  asset('custom/assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{  asset('custom/assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{  asset('custom/assets/pages/data-table/extensions/buttons/js/jszip.min.js') }}"></script>
<script src="{{  asset('custom/assets/pages/data-table/extensions/buttons/js/pdfmake.min.js') }}"></script>
<script src="{{  asset('custom/assets/pages/data-table/extensions/buttons/js/vfs_fonts.js') }}"></script>
<script src="{{  asset('custom/assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{  asset('custom/assets/pages/data-table/extensions/buttons/js/pdfmake.min.js') }}"></script>
<script src="{{  asset('custom/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{  asset('custom/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{  asset('custom/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{  asset('custom/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{  asset('custom/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

<script type="text/javascript" src="{{  asset('custom/bower_components/i18next/i18next.min.js') }}"></script>
<script type="text/javascript" src="{{  asset('custom/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js') }}"></script>
<script type="text/javascript" src="{{  asset('custom/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js') }}"></script>
<script type="text/javascript" src="{{  asset('custom/bower_components/jquery-i18next/jquery-i18next.min.js') }}"></script>

<script src="{{  asset('custom/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js') }}"></script>
<script type="text/javascript" src="{{  asset('custom/assets/js/script.js') }}"></script>
<script src="{{  asset('custom/assets/js/pcoded.min.js') }}"></script>
<script src="{{  asset('custom/assets/js/demo-12.js') }}"></script>
<script src="{{  asset('custom/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{  asset('custom/assets/js/jquery.mousewheel.min.js') }}"></script>
<script type="text/javascript">
  $("document").ready(function(){
    setTimeout(function(){
      $("div.alert").remove();
  }, 3000);
});
</script>
</body>

<!-- Mirrored from flatable.phoenixcoded.net/default/dt-ext-buttons-html-5-data-export.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 12:11:50 GMT -->
</html>

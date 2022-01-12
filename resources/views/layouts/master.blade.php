<!DOCTYPE html>
<html lang="en">
<head>
<title>SMS | Dashboard</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="icon" href="{{  asset('custom/assets/images/favicon.ico') }}" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{  asset('custom/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{  asset('custom/assets/icon/themify-icons/themify-icons.css') }}">

<link rel="stylesheet" type="text/css" href="{{  asset('custom/assets/icon/icofont/css/icofont.css') }}">

<link rel="stylesheet" type="text/css" href="{{  asset('custom/assets/pages/flag-icon/flag-icon.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{  asset('custom/assets/pages/menu-search/css/component.css') }}">

<link rel="stylesheet" type="text/css" href="{{  asset('custom/assets/pages/dashboard/horizontal-timeline/css/style.css') }}">

<link rel="stylesheet" type="text/css" href="{{  asset('custom/assets/pages/dashboard/amchart/css/amchart.css') }}">

<link rel="stylesheet" type="text/css" href="{{  asset('custom/assets/pages/flag-icon/flag-icon.min.css') }}">

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
        @include('layouts.topnavbar')
        {{-- End of Top  nav bar --}}

    <div id="sidebar" class="users p-chat-user showChat">
    <div class="had-container">
    <div class="card card_main p-fixed users-main">
    <div class="user-box">
    <div class="card-block">
    <div class="right-icon-control">

    
    </div>
    </div>
    <div class="main-friend-list">
    <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
    <a class="media-left" href="#!">
    <img class="media-object img-circle" src="{{  asset('custom/assets/images/avatar-1.png') }}" alt="Generic placeholder image">
    <div class="live-status bg-success"></div>
    </a>
    <div class="media-body">
    <div class="f-13 chat-header">Josephin Doe</div>
    </div>
    </div>
    <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
    <a class="media-left" href="#!">
    <img class="media-object img-circle" src="{{  asset('custom/assets/images/task/task-u1.jpg') }}" alt="Generic placeholder image">
    <div class="live-status bg-success"></div>
    </a>
    <div class="media-body">
    <div class="f-13 chat-header">Lary Doe</div>
    </div>
    </div>
    <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
    <a class="media-left" href="#!">
    <img class="media-object img-circle" src="{{  asset('custom/assets/images/avatar-2.png') }}" alt="Generic placeholder image">
    <div class="live-status bg-success"></div>
    </a>
    <div class="media-body">
    <div class="f-13 chat-header">Alice</div>
    </div>
    </div>
    <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
    <a class="media-left" href="#!">
    <img class="media-object img-circle" src="{{  asset('custom/assets/images/task/task-u2.jpg') }}" alt="Generic placeholder image">
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
    <li class="active">
    <a href="{{ url('/') }}">
    <span class="pcoded-micon"><i class="ti-home"></i></span>
    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
    <span class="pcoded-mcaret"></span>
    </a>
    </li>
    <li class="pcoded-hasmenu">
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
    <li class=" ">
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
    <div class="page-header">
    <div class="page-header-title">
    <h4>Dashboard</h4>
    </div>
    <div class="page-header-breadcrumb">
    <ul class="breadcrumb-title">
    <li class="breadcrumb-item">
    <a href="{{ url('/') }}">
    <i class="icofont icofont-home"></i>
    </a>
    </li>
    <li class="breadcrumb-item"><a href="#!">Pages</a>
    </li>
    <li class="breadcrumb-item">Dashboard
    </li>
    </ul>
    </div>
    </div>
    <div class="page-body">
    <div class="row">
    <div class="col-md-12 col-xl-4">

    <div class="card table-card">
    <div class="">
    <div class="row-table">
    <div class="col-sm-6 card-block-big br">
    <div class="row">
    <div class="col-sm-4">
    <i class="icofont icofont-eye-alt text-success"></i>
    </div>
    <div class="col-sm-8 text-center">
    <h5>10k</h5>
    <span>Visitors</span>
    </div>
    </div>
    </div>
    <div class="col-sm-6 card-block-big">
    <div class="row">
    <div class="col-sm-4">
    <i class="icofont icofont-ui-music text-danger"></i>
    </div>
    <div class="col-sm-8 text-center">
    <h5>100%</h5>
    <span>Volume</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="">
    <div class="row-table">
    <div class="col-sm-6 card-block-big br">
    <div class="row">
    <div class="col-sm-4">
    <i class="icofont icofont-files text-info"></i>
    </div>
    <div class="col-sm-8 text-center">
    <h5>2000 +</h5>
    <span>Files</span>
    </div>
    </div>
    </div>
    <div class="col-sm-6 card-block-big">
    <div class="row">
    <div class="col-sm-4">
    <i class="icofont icofont-envelope-open text-warning"></i>
    </div>
    <div class="col-sm-8 text-center">
    <h5>120</h5>
    <span>Mails</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </div>
    <div class="col-md-12 col-xl-4">

    <div class="card table-card">
    <div class="">
    <div class="row-table">
    <div class="col-sm-6 card-block-big br">
    <div class="row">
    <div class="col-sm-4">
    <div id="barchart" style="height:40px;width:40px;"></div>
    </div>
    <div class="col-sm-8 text-center">
    <h5>1000</h5>
    <span>Shares</span>
    </div>
    </div>
    </div>
    <div class="col-sm-6 card-block-big">
    <div class="row ">
    <div class="col-sm-4">
    <i class="icofont icofont-network text-primary"></i>
    </div>
    <div class="col-sm-8 text-center">
    <h5>600</h5>
    <span>Network</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="">
    <div class="row-table">
    <div class="col-sm-6 card-block-big br">
    <div class="row ">
    <div class="col-sm-4">
    <div id="barchart2" style="height:40px;width:40px;"></div>
    </div>
    <div class="col-sm-8 text-center">
    <h5>350</h5>
    <span>Returns</span>
    </div>
    </div>
    </div>
    <div class="col-sm-6 card-block-big">
    <div class="row ">
    <div class="col-sm-4">
    <i class="icofont icofont-network-tower text-primary"></i>
    </div>
    <div class="col-sm-8 text-center">
    <h5>100%</h5>
    <span>Connections</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </div>
    <div class="col-md-12 col-xl-4">

    <div class="card table-card widget-primary-card">
    <div class="">
    <div class="row-table">
    <div class="col-sm-3 card-block-big">
    <i class="icofont icofont-star"></i>
    </div>
    <div class="col-sm-9">
    <h4>4000 +</h4>
    <h6>Ratings Received</h6>
    </div>
    </div>
    </div>
    </div>


    <div class="card table-card widget-success-card">
    <div class="">
    <div class="row-table">
    <div class="col-sm-3 card-block-big">
    <i class="icofont icofont-trophy-alt"></i>
    </div>
    <div class="col-sm-9">
    <h4>17</h4>
    <h6>Achievements</h6>
    </div>
    </div>
    </div>
    </div>

    </div>
    <div class="col-lg-6">
    <div class="card">
    <div class="card-block">
    <div id="chartdiv"></div>
    </div>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="card">
    <div class="card-block">
    <div class="cd-horizontal-timeline">
    <div class="timeline">
    <div class="events-wrapper">
    <div class="events">
    <ol>
    <li><a href="#0" data-date="16/01/2014" class="selected">16 Jan</a></li>
    <li><a href="#0" data-date="28/02/2014">28 Feb</a></li>
    <li><a href="#0" data-date="20/04/2014">20 Mar</a></li>
    <li><a href="#0" data-date="20/05/2014">20 May</a></li>
    <li><a href="#0" data-date="09/07/2014">09 Jul</a></li>
    <li><a href="#0" data-date="30/08/2014">30 Aug</a></li>
    <li><a href="#0" data-date="15/09/2014">15 Sep</a></li>
    <li><a href="#0" data-date="01/11/2014">01 Nov</a></li>
    <li><a href="#0" data-date="10/12/2014">10 Dec</a></li>
    <li><a href="#0" data-date="19/01/2015">29 Jan</a></li>
    <li><a href="#0" data-date="03/03/2015">3 Mar</a></li>
    </ol>
    <span class="filling-line" aria-hidden="true"></span>
    </div>

    </div>

    <ul class="cd-timeline-navigation">
    <li><a href="#0" class="prev inactive">Prev</a></li>
    <li><a href="#0" class="next">Next</a></li>
    </ul>

    </div>

    <div class="events-content">
    <ol>
    <li class="selected" data-date="16/01/2014">
    <h2>Horizontal Timeline</h2>
    <em>January 16th, 2014</em>
    <p class="m-b-0">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia
    velit nulla adipisci? Consequuntur aspernatur at,
    </p>
    <div class="m-t-20 d-timeline-btn">
    <button class="btn btn-danger">Read More</button>
    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
    </div>
    </li>
    <li data-date="28/02/2014">
    <h2>Event title here</h2>
    <em>February 28th, 2014</em>
    <p class="m-b-0">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia
    velit nulla adipisci? Consequuntur aspernatur at,
    </p>
    <div class="m-t-20 d-timeline-btn">
    <button class="btn btn-danger">Read More</button>
    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
    </div>
    </li>
    <li data-date="20/04/2014">
    <h2>Event title here</h2>
    <em>March 20th, 2014</em>
    <p class="m-b-0">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia
    velit nulla adipisci? Consequuntur aspernatur at,
    </p>
    <div class="m-t-20 d-timeline-btn">
    <button class="btn btn-danger">Read More</button>
    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
    </div>
    </li>
    <li data-date="20/05/2014">
    <h2>Event title here</h2>
    <em>May 20th, 2014</em>
    <p class="m-b-0">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia
    velit nulla adipisci? Consequuntur aspernatur at,
    </p>
    <div class="m-t-20 d-timeline-btn">
    <button class="btn btn-danger">Read More</button>
    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
    </div>
    </li>
    <li data-date="09/07/2014">
    <h2>Event title here</h2>
    <em>July 9th, 2014</em>
    <p class="m-b-0">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia
    velit nulla adipisci? Consequuntur aspernatur at,
    </p>
    <div class="m-t-20 d-timeline-btn">
    <button class="btn btn-danger">Read More</button>
    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
    </div>
    </li>
    <li data-date="30/08/2014">
    <h2>Event title here</h2>
    <em>August 30th, 2014</em>
    <p class="m-b-0">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia
    velit nulla adipisci? Consequuntur aspernatur at,
    </p>
    <div class="m-t-20 d-timeline-btn">
    <button class="btn btn-danger">Read More</button>
    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
    </div>
    </li>
    <li data-date="15/09/2014">
    <h2>Event title here</h2>
    <em>September 15th, 2014</em>
    <p class="m-b-0">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia
    velit nulla adipisci? Consequuntur aspernatur at,
    </p>
    <div class="m-t-20 d-timeline-btn">
    <button class="btn btn-danger">Read More</button>
    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
    </div>
    </li>
    <li data-date="01/11/2014">
    <h2>Event title here</h2>
    <em>November 1st, 2014</em>
    <p class="m-b-0">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia
    velit nulla adipisci? Consequuntur aspernatur at,
    </p>
    <div class="m-t-20 d-timeline-btn">
    <button class="btn btn-danger">Read More</button>
    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
    </div>
    </li>
    <li data-date="10/12/2014">
    <h2>Event title here</h2>
    <em>December 10th, 2014</em>
    <p class="m-b-0">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia
    velit nulla adipisci? Consequuntur aspernatur at,
    </p>
    <div class="m-t-20 d-timeline-btn">
    <button class="btn btn-danger">Read More</button>
    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
    </div>
    </li>
    <li data-date="19/01/2015">
    <h2>Event title here</h2>
    <em>January 19th, 2015</em>
    <p class="m-b-0">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia
    velit nulla adipisci? Consequuntur aspernatur at,
    </p>
    <div class="m-t-20 d-timeline-btn">
    <button class="btn btn-danger">Read More</button>
    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
    </div>
    </li>
    <li data-date="03/03/2015">
    <h2>Event title here</h2>
    <em>March 3rd, 2015</em>
    <p class="m-b-0">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia
    velit nulla adipisci? Consequuntur aspernatur at,
    </p>
    <div class="m-t-20 d-timeline-btn">
    <button class="btn btn-danger">Read More</button>
    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
    </div>
    </li>
    </ol>
    </div>

    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="row">
    <div class="col-lg-12">
    <div class="card card-border-primary">
    <div class="card-header">
    <h5>John Doe </h5>

    <div class="dropdown-secondary dropdown f-right">
    <button class="btn btn-primary btn-mini dropdown-toggle waves-effect waves-light" type="button" id="dropdown6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Overdue</button>
    <div class="dropdown-menu" aria-labelledby="dropdown6" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-danger"></span>Pending</a>
    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-warning"></span>Paid</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item waves-light waves-effect active" href="#!"><span class="point-marker bg-success"></span>On Hold</a>
    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-info"></span>Canceled</a>
    </div>

    <span class="f-left m-r-5 text-inverse">Status : </span>
    </div>
    </div>
    <div class="card-block">
    <div class="row">
    <div class="col-sm-6">
    <ul class="list list-unstyled">
    <li>Invoice #: &nbsp;0028</li>
    <li>Issued on: <span class="text-semibold">2015/01/25</span></li>
    </ul>
    </div>
    <div class="col-sm-6">
    <ul class="list list-unstyled text-right">
    <li>$8,750</li>
    <li>Method: <span class="text-semibold">Paypal</span></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="card-footer">
    <div class="task-list-table">
    <p class="task-due"><strong> Due : </strong><strong class="label label-success">23 hours</strong></p>
    </div>
    <div class="task-board m-0">
    <a href="http://flatable.phoenixcoded.net/html/invoice.html" class="btn btn-info btn-mini b-none"><i class="icofont icofont-eye-alt m-0"></i></a>

    <div class="dropdown-secondary dropdown">
    <button class="btn btn-info btn-mini dropdown-toggle waves-light b-none txt-muted" type="button" id="dropdown3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-navigation-menu"></i></button>
    <div class="dropdown-menu" aria-labelledby="dropdown3" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
    <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-alarm"></i> Print Invoice</a>
    <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-attachment"></i> Download invoice</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-spinner-alt-5"></i> Edit Invoice</a>
    <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-edit"></i> Remove Invoice</a>
    </div>

    </div>

    </div>

    </div>

    </div>
    </div>
    <div class="col-lg-12">

    <div class="card card-border-primary">
    <div class="card-header">
    <h5>John Doe </h5>

    <div class="dropdown-secondary dropdown f-right">
    <button class="btn btn-primary btn-mini dropdown-toggle waves-effect waves-light" type="button" id="dropdown12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Overdue</button>
    <div class="dropdown-menu" aria-labelledby="dropdown12" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-danger"></span>Pending</a>
    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-warning"></span>Paid</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item waves-light waves-effect active" href="#!"><span class="point-marker bg-success"></span>On Hold</a>
    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-info"></span>Canceled</a>
    </div>

    <span class="f-left m-r-5 text-inverse">Status : </span>
    </div>
    </div>
    <div class="card-block">
    <div class="row">
    <div class="col-sm-6">
    <ul class="list list-unstyled">
    <li>Invoice #: &nbsp;0028</li>
    <li>Issued on: <span class="text-semibold">2015/01/25</span></li>
    </ul>
    </div>
    <div class="col-sm-6">
    <ul class="list list-unstyled text-right">
    <li>$8,750</li>
    <li>Method: <span class="text-semibold">Paypal</span></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="card-footer">
    <div class="task-list-table">
    <p class="task-due"><strong> Due : </strong><strong class="label label-warning">23 hours</strong></p>
    </div>
    <div class="task-board m-0">
    <a href="http://flatable.phoenixcoded.net/html/invoice.html" class="btn btn-info btn-mini b-none"><i class="icofont icofont-eye-alt m-0"></i></a>

    <div class="dropdown-secondary dropdown">
    <button class="btn btn-info btn-mini dropdown-toggle waves-light b-none txt-muted" type="button" id="dropdown8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-navigation-menu"></i></button>
    <div class="dropdown-menu" aria-labelledby="dropdown8" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
    <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-alarm"></i> Print Invoice</a>
    <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-attachment"></i> Download invoice</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-spinner-alt-5"></i> Edit Invoice</a>
    <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-edit"></i> Remove Invoice</a>
    </div>

    </div>

    </div>

    </div>

    </div>

    </div>
    </div>
    </div>
    <div class="col-lg-8">
    <div class="card">
    <div class="card-header">
    <button class="btn btn-primary btn-sm">Week</button>
    <button class="btn btn-primary btn-sm">Month</button>
    <button class="btn btn-primary btn-sm">Year</button>
    </div>
    <div class="card-block">
    <div id="morris-extra-area"></div>
    </div>
    </div>
    </div>
    <div class="col-lg-8">
    <div class="row">
    <div class="col-lg-12">
    <div class="card table-1-card">
    <div class="card-block">
    <div class="table-responsive">
    <table class="table">
    <thead>
    <tr class="text-capitalize">
    <th>Type</th>
    <th>Lead Name</th>
    <th>Views</th>
    <th>Favourites</th>
    <th>Last Visit</th>
    <th>Last Action</th>
    <th>Last Date</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td><a href="#!">Buyer</a>
    </td>
    <td>Denish Ann</td>
    <td>153</td>
    <td>100</td>
    <td>20</td>
    <td>9.23 A.M.</td>
    <td>9/27/2015</td>
    </tr>
    <tr>
    <td><a class="text-danger" href="#!">Lanload</a>
    </td>
    <td>John Doe</td>
    <td>121</td>
    <td>100</td>
    <td>20</td>
    <td>6.23 A.M.</td>
    <td>8/27/2015</td>
    </tr>
    <tr>
    <td><a href="#!">Buyer</a>
    </td>
    <td>Henry Joe</td>
    <td>154</td>
    <td>140</td>
    <td>30</td>
    <td>7.54 P.M.</td>
    <td>4/30/2015</td>
    </tr>
    <tr>
    <td><a class="text-danger" href="#!">Lanload</a>
    </td>
    <td>Sara Soudein</td>
    <td>153</td>
    <td>100</td>
    <td>20</td>
    <td>9.23 A.M.</td>
    <td>5/20/2016</td>
    </tr>
    <tr>
    <td><a href="#!">Buyer</a>
    </td>
    <td>Denish Ann</td>
    <td>153</td>
    <td>100</td>
    <td>20</td>
    <td>9.23 A.M.</td>
    <td>3/26/2015</td>
    </tr>
    <tr>
    <td><a class="text-info" href="#!">Lanload</a>
    </td>
    <td>Stefen Joe</td>
    <td>153</td>
    <td>100</td>
    <td>20</td>
    <td>11.45 A.M.</td>
    <td>5/20/2017</td>
    </tr>
    <tr>
    <td><a href="#!">Buyer</a>
    </td>
    <td>Mark Backlus</td>
    <td>153</td>
    <td>100</td>
    <td>20</td>
    <td>12.40 A.M.</td>
    <td>3/27/2017</td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-12">
    <div class="card table-card group-widget">
    <div class="">
    <div class="row-table">
    <div class="col-sm-4 bg-primary card-block-big">
    <i class="icofont icofont-music"></i>
    <p>1,586</p>
    </div>
    <div class="col-sm-4 bg-dark-primary card-block-big">
    <i class="icofont icofont-video-clapper"></i>
    <p>1,743</p>
    </div>
    <div class="col-sm-4 bg-darkest-primary card-block-big">
    <i class="icofont icofont-email"></i>
    <p>1,096</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="card widget-chat-box">
    <div class="card-header">
    <div class="row">
    <div class="col-sm-2">
    <i class="icofont icofont-navigation-menu pop-up"></i>
    </div>
    <div class="col-sm-8 text-center">
    <h5>
    John Henry
    </h5>
    </div>
    <div class="col-sm-2 text-right">
    <i class="icofont icofont-ui-edit"></i>
    </div>
    </div>
    </div>
    <div class="card-block">
    <p class="text-center">12:05 A.M.</p>
    <div class="media">
    <img class="d-flex mr-3 img-circle img-40 img-thumbnail" src="{{  asset('custom/assets/images/user-card/img-round1.jpg') }}" alt="Generic placeholder image">
    <div class="media-body send-chat">
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at
    <span class="time">3 min ago</span>
    </div>
    </div>
    <div class="media col-sm-8 offset-md-4">
    <div class="media-body  receive-chat">
    Cras sit amet nibh libero, in gravida nulla.vel metus scelerisque ante
    <span class="time">
    <i class="icofont icofont-check m-r-5"></i>Seen 2 sec ago
    </span>
    </div>
    </div>
    <div class="media">
    <img class="d-flex mr-3 img-circle img-40 img-thumbnail" src="{{  asset('custom/assets/images/user-card/img-round1.jpg') }}" alt="Generic placeholder image">
    <div class="media-body send-chat">
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at
    <span class="time">3 min ago</span>
    </div>
    </div>
    <div class="media col-sm-8 offset-md-4">
    <div class="media-body  receive-chat">
    Cras sit amet nibh libero, in gravida nulla.Vel metus scelerisque ante
    <span class="time">
    <i class="icofont icofont-check m-r-5"></i>Seen 2 sec ago
    </span>
    </div>
    </div>
    </div>
    <div class="card-footer">
    <input type="text" class="form-control" placeholder="Your Message">
    </div>
    </div>
    </div>
    <div class="col-md-6 col-xl-3">
    <div class="card social-widget-card">
    <div class="card-block-big bg-facebook">
    <h3>1165 +</h3>
    <span class="m-t-10">Facebook Users</span>
    <i class="icofont icofont-social-facebook"></i>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-xl-3">
    <div class="card social-widget-card">
    <div class="card-block-big bg-twitter">
    <h3>780 +</h3>
    <span class="m-t-10">Twitter Users</span>
    <i class="icofont icofont-social-twitter"></i>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-xl-3">
    <div class="card social-widget-card">
    <div class="card-block-big bg-linkein">
    <h3>998 +</h3>
    <span class="m-t-10">Linked In Users</span>
    <i class="icofont icofont-brand-linkedin"></i>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-xl-3">
    <div class="card social-widget-card">
    <div class="card-block-big bg-google-plus">
    <h3>650 +</h3>
    <span class="m-t-10">Google Plus Users</span>
    <i class="icofont icofont-social-google-plus"></i>
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
<script src="{{  asset('custom/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{  asset('custom/bower_components/tether/dist/js/tether.min.js') }}"></script>
<script type="text/javascript" src="{{  asset('custom/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{  asset('custom/bower_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<script type="text/javascript" src="{{  asset('custom/bower_components/modernizr/modernizr.js') }}"></script>
<script type="text/javascript" src="{{  asset('custom/bower_components/modernizr/feature-detects/css-scrollbars.js') }}"></script>

<script type="text/javascript" src="{{  asset('custom/bower_components/classie/classie.js') }}"></script>

<script src="{{  asset('custom/bower_components/d3/d3.js') }}"></script>
<script src="{{  asset('custom/bower_components/rickshaw/rickshaw.js') }}"></script>

<script src="{{  asset('custom/bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{  asset('custom/bower_components/morris.js/morris.js') }}"></script>

<script type="text/javascript" src="{{  asset('custom/assets/pages/dashboard/horizontal-timeline/js/main.js') }}"></script>

<script type="text/javascript" src="{{  asset('custom/assets/pages/dashboard/amchart/js/amcharts.js') }}"></script>
<script type="text/javascript" src="{{  asset('custom/assets/pages/dashboard/amchart/js/serial.js') }}"></script>
<script type="text/javascript" src="{{  asset('custom/assets/pages/dashboard/amchart/js/light.js') }}"></script>
<script type="text/javascript" src="{{  asset('custom/assets/pages/dashboard/amchart/js/custom-amchart.js') }}"></script>

<script type="text/javascript" src="{{  asset('custom/bower_components/i18next/i18next.min.js') }}"></script>
<script type="text/javascript" src="{{  asset('custom/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js') }}"></script>
<script type="text/javascript" src="{{  asset('custom/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js') }}"></script>
<script type="text/javascript" src="{{  asset('custom/bower_components/jquery-i18next/jquery-i18next.min.js') }}"></script>

<script type="text/javascript" src="{{  asset('custom/assets/pages/dashboard/custom-dashboard.js') }}"></script>
<script type="text/javascript" src="{{  asset('custom/assets/js/script.js') }}"></script>

<script src="{{  asset('custom/assets/js/pcoded.min.js') }}"></script>
<script src="{{  asset('custom/assets/js/demo-12.js') }}"></script>
<script src="{{  asset('custom/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{  asset('custom/assets/js/jquery.mousewheel.min.js') }}"></script>

</body>

<!-- Mirrored from flatable.phoenixcoded.net/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 11:30:25 GMT -->
</html>

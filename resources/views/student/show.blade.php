<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from flatable.phoenixcoded.net/default/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 11:43:04 GMT -->

<head>
    <title>SMS | Student Details</title>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <link rel="icon" href="{{ asset('custom/assets/images/favicon.ico') }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('custom/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('custom/bower_components/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('custom/assets/pages/advance-elements/css/bootstrap-datetimepicker.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('custom/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" />

    <link rel="stylesheet" type="text/css"
        href="{{ asset('custom/bower_components/datedropper/datedropper.min.css') }}" />

    <link rel="stylesheet" type="text/css"
        href="{{ asset('custom/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/icon/themify-icons/themify-icons.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/icon/icofont/css/icofont.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/pages/flag-icon/flag-icon.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/pages/menu-search/css/component.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/css/color/color-1.css') }}" id="color" />
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/css/linearicons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/css/simple-line-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/css/ionicons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/css/jquery.mCustomScrollbar.css') }}">
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
                                            <a href="{{ url('student/create') }}"
                                                data-i18n="nav.page_layout.bottom-menu">
                                                <span class="pcoded-micon"><i
                                                        class="icofont icofont-hat-alt"></i></span>
                                                <span class="pcoded-mtext">Add student</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="active ">
                                            <a href="{{ url('student/') }}" data-i18n="nav.page_layout.box-layout">
                                                <span class="pcoded-micon"><i
                                                        class="icofont icofont-hat-alt"></i></span>
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

                            <div class="main-body user-profile">
                                <div class="page-wrapper">

                                    <div class="page-header">
                                        <div class="page-header-title">
                                            <h4>Student's Details</h4>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="{{ url('/') }}">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="{{ url('student/') }}">All
                                                        Students</a>
                                                </li>
                                                <li class="breadcrumb-item">Student's Details
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="page-body">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="cover-profile">
                                                    <div class="profile-bg-img">
                                                        <img class="profile-bg-img img-fluid"
                                                            src="{{ asset('custom/assets/images/user-profile/bg-img1.jpg') }}"
                                                            alt="bg-img">
                                                        <div class="card-block user-info">
                                                            <div class="col-md-12">
                                                                <div class="media-left">
                                                                    <a href="#" class="profile-image">
                                                                        <img class="user-img img-circle"
                                                                            src="{{ asset('custom/assets/images/user.png') }}"
                                                                            alt="user-img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body row">
                                                                    <div class="col-lg-12">
                                                                        <div class="user-title">
                                                                            <h2>{{ strtoupper($student->first_name . ' ' . $student->surname) }}
                                                                            </h2>
                                                                            <b><span
                                                                                    class="text-white">{{ strtoupper($student->registration_number) }}</span></b>
                                                                        </div>
                                                                    </div>
                                                                    <div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">



                                                <div class="tab-content">

                                                    <div class="tab-pane active" id="personal" role="tabpanel">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">About Me</h5>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="view-info">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="general-info">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-xl-6">
                                                                                        <table class="table m-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <th scope="row">Full
                                                                                                        Name</th>
                                                                                                    <td>{{ strtoupper($student->first_name . ' ' . $student->surname) }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <th scope="row">
                                                                                                        Gender</th>
                                                                                                    <td>{{ strtoupper($student->sex) }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <th scope="row">
                                                                                                        Birth Date</th>
                                                                                                    <td>{{ strtoupper($student->birth_date) }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <th scope="row">
                                                                                                        Disability</th>
                                                                                                    <td>{{ strtoupper($student->disability) }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                {{-- <tr>
                                                                                                    <th scope="row">
                                                                                                        Address</th>
                                                                                                    <td>{{ strtoupper($student->address) }}
                                                                                                    </td>
                                                                                                </tr> --}}
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>

                                                                                    <div class="col-lg-12 col-xl-6">
                                                                                        <table class="table">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <th scope="row">
                                                                                                        Guardian Name
                                                                                                    </th>
                                                                                                    <td>{{ strtoupper($student->guardian_first_name . ' ' . $student->guardian_surname) }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <th scope="row">Sex
                                                                                                    </th>
                                                                                                    <td>{{ strtoupper($student->guardian_sex) }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <th scope="row">
                                                                                                        Guardian Phone
                                                                                                    </th>
                                                                                                    <td>{{ strtoupper($student->guardian_phone_number) }}
                                                                                                    </td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <th scope="row">
                                                                                                        Guardian Address</th>
                                                                                                    <td>{{ strtoupper($student->address) }}
                                                                                                    </td>
                                                                                                </tr>

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


    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('custom/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('custom/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('custom/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('custom/bower_components/tether/dist/js/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('custom/bower_components/bootstrap/dist/js/bootstrap.min.js') }}">
    </script>

    <script type="text/javascript" src="{{ asset('custom/bower_components/jquery-slimscroll/jquery.slimscroll.js') }}">
    </script>

    <script type="text/javascript" src="{{ asset('custom/bower_components/modernizr/modernizr.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('custom/bower_components/modernizr/feature-detects/css-scrollbars.js') }}"></script>

    <script type="text/javascript" src="{{ asset('custom/bower_components/classie/classie.js') }}"></script>

    <script type="text/javascript" src="{{ asset('custom/assets/pages/advance-elements/moment-with-locales.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('custom/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('custom/assets/pages/advance-elements/bootstrap-datetimepicker.min.js') }}"></script>

    <script type="text/javascript"
        src="{{ asset('custom/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <script type="text/javascript" src="{{ asset('custom/bower_components/datedropper/datedropper.min.js') }}"></script>

    <script src="{{ asset('custom/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('custom/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('custom/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}">
    </script>
    <script src="{{ asset('custom/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
    </script>

    <script src="{{ asset('custom/bower_components/ckeditor/ckeditor.js') }}"></script>

    <script src="{{ asset('custom/assets/pages/chart/echarts/js/echarts-all.js') }}" type="text/javascript"></script>

    <script type="text/javascript" src="{{ asset('custom/bower_components/i18next/i18next.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('custom/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('custom/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('custom/bower_components/jquery-i18next/jquery-i18next.min.js') }}">
    </script>

    <script type="text/javascript" src="{{ asset('custom/assets/js/script.js') }}"></script>
    <script src="{{ asset('custom/assets/pages/user-profile.js') }}"></script>
    <script src="{{ asset('custom/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('custom/assets/js/demo-12.js') }}"></script>
    <script src="{{ asset('custom/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('custom/assets/js/jquery.mousewheel.min.js') }}"></script>
</body>

<!-- Mirrored from flatable.phoenixcoded.net/default/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 11:43:33 GMT -->

</html>

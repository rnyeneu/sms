<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from flatable.phoenixcoded.net/default/form-elements-add-on.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 11:52:45 GMT -->

<head>
    <title>SMS | Edit Student's Details</title>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords"
        content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">

    <link rel="icon" href="{{ asset('custom/assets/images/favicon.ico') }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('custom/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/icon/themify-icons/themify-icons.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/icon/icofont/css/icofont.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/pages/flag-icon/flag-icon.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/pages/menu-search/css/component.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/pages/menu-search/css/component.css') }}">

    <link rel="stylesheet" href="{{ asset('custom/bower_components/select2/dist/css/select2.min.css') }}" />

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

                                        <li class=" active ">
                                            <a href="{{ url('student/create') }}"
                                                data-i18n="nav.page_layout.bottom-menu">
                                                <span class="pcoded-micon"><i
                                                        class="icofont icofont-hat-alt"></i></span>
                                                <span class="pcoded-mtext">Add student</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
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

                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-header">
                                        <div class="page-header-title">
                                            <h4>Add Student</h4>

                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="{{ url('/') }}">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="{{ url('student/') }}">All
                                                        students</a>
                                                </li>
                                                <li class="breadcrumb-item">Edit student
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Edit Student Details Here</h5>

                                            </div>
                                            <div class="page-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-xl-6">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h6>Student's Info</h6>

                                                            </div>


                                                            <div class="card-block">
                                                                <form action="{{ url('student/' . $student->id) }}"
                                                                    method="POST" class="form-horizontal"
                                                                    autocomplete="off">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="row ">
                                                                        <label
                                                                            class="col-sm-4 col-lg-2 col-form-label">Reg.
                                                                            Number</label>
                                                                        <div class="col-sm-8 col-lg-10">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i
                                                                                        class="icofont icofont-ui-edit"></i></span>
                                                                                <input
                                                                                    value="{{ $student->registration_number }}"
                                                                                    required name="registration_number"
                                                                                    type="text"
                                                                                    class="form-control form-control-uppercase form-control-bold"
                                                                                    placeholder="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <label
                                                                            class="col-sm-4 col-lg-2 col-form-label">First
                                                                            Name</label>
                                                                        <div class="col-sm-8 col-lg-10">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i
                                                                                        class="icofont icofont-ui-user"></i></span>
                                                                                <input
                                                                                    value="{{ $student->first_name }}"
                                                                                    required name="first_name"
                                                                                    type="text"
                                                                                    class="form-control form-control-uppercase form-control-bold"
                                                                                    placeholder="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <label
                                                                            class="col-sm-4 col-lg-2 col-form-label">Surname</label>
                                                                        <div class="col-sm-8 col-lg-10">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i
                                                                                        class="icofont icofont-ui-user"></i></span>
                                                                                <input
                                                                                    value="{{ $student->surname }}"
                                                                                    required name="surname" type="text"
                                                                                    class="form-control form-control-uppercase form-control-bold"
                                                                                    placeholder="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <label
                                                                            class="col-sm-4 col-lg-2 col-form-label">DOB</label>
                                                                        <div class="col-sm-8 col-lg-10">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i
                                                                                        class="icofont icofont-ui-calendar"></i></span>
                                                                                <input
                                                                                    value="{{ $student->birth_date }}"
                                                                                    required name="birth_date"
                                                                                    type="text"
                                                                                    class="form-control date2 form-control-bold"
                                                                                    data-mask="9999-99-99"
                                                                                    placeholder="YYYY-MM-DD">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <label
                                                                            class="col-sm-4 col-lg-2 col-form-label">Sex</label>
                                                                        <div class="col-sm-8 col-lg-10">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i
                                                                                        class="icofont icofont-ui-user"></i></span>
                                                                                <select required name="sex"
                                                                                    class=" form-control">
                                                                                    <option>Select sex</option>

                                                                                    <option @if ($student->sex == 'B')
                                                                                        {{ 'selected' }}
                                                                                        @endif
                                                                                        value="B">Boy
                                                                                    </option>
                                                                                    <option @if ($student->sex == 'G')
                                                                                        {{ 'selected' }}
                                                                                        @endif
                                                                                        value="G">Girl
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <label
                                                                            class="col-sm-4 col-lg-2 col-form-label">Disability</label>
                                                                        <div class="col-sm-8 col-lg-10">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i
                                                                                        class="icofont icofont-paralysis-disability"></i></span>
                                                                                <select required name="disability"
                                                                                    class=" form-control">
                                                                                    <option>Select Disability</option>
                                                                                    <option @if ($student->disability == 'None')
                                                                                        {{ 'selected' }}
                                                                                        @endif
                                                                                        value="None">None
                                                                                    </option>
                                                                                    <option @if ($student->disability == 'HI')
                                                                                        {{ 'selected' }}
                                                                                        @endif
                                                                                        value="HI">Hearing Impairement
                                                                                    </option>
                                                                                    <option @if ($student->disability == 'II')
                                                                                        {{ 'selected' }}
                                                                                        @endif
                                                                                        value="II">Intellectual
                                                                                        Impairement
                                                                                    </option>
                                                                                    <option @if ($student->disability == 'LVI')
                                                                                        {{ 'selected' }}
                                                                                        @endif
                                                                                        value="LVI">Low Vision
                                                                                        Impairement
                                                                                    </option>
                                                                                    <option @if ($student->disability == 'HVI')
                                                                                        {{ 'selected' }}
                                                                                        @endif
                                                                                        value="HVI">High Vision
                                                                                        Impairement
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                            </div>


                                                        </div>

                                                    </div>
                                                    <div class="col-lg-12 col-xl-6">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h6>Guardian's Info</h6>
                                                            </div>
                                                            <div class="card-block">

                                                                <div class="row">
                                                                    <label
                                                                        class="col-sm-4 col-lg-2 col-form-label">First
                                                                        Name</label>
                                                                    <div class="col-sm-8 col-lg-10">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i
                                                                                    class="icofont icofont-ui-user"></i></span>
                                                                            <input
                                                                                value="{{ $student->guardian_first_name }}"
                                                                                required name="guardian_first_name"
                                                                                type="text"
                                                                                class="form-control form-control-uppercase form-control-bold"
                                                                                placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label
                                                                        class="col-sm-4 col-lg-2 col-form-label">Surname</label>
                                                                    <div class="col-sm-8 col-lg-10">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i
                                                                                    class="icofont icofont-ui-user"></i></span>
                                                                            <input
                                                                                value="{{ $student->guardian_surname }}"
                                                                                required name="guardian_surname"
                                                                                type="text"
                                                                                class="form-control form-control-uppercase form-control-bold"
                                                                                placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <label
                                                                        class="col-sm-4 col-lg-2 col-form-label">Sex</label>
                                                                    <div class="col-sm-8 col-lg-10">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i
                                                                                    class="icofont icofont-ui-user"></i></span>
                                                                            <select required name="guardian_sex"
                                                                                class=" form-control">
                                                                                <option>Select Sex</option>
                                                                                <option @if ($student->guardian_sex == 'M')
                                                                                    {{ 'selected' }}
                                                                                    @endif
                                                                                    value="M">Male
                                                                                </option>
                                                                                <option @if ($student->guardian_sex == 'F')
                                                                                    {{ 'selected' }}
                                                                                    @endif
                                                                                    value="F">Female
                                                                                </option>>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label class="col-sm-4 col-lg-2 col-form-label">
                                                                        Phone</label>
                                                                    <div class="col-sm-8 col-lg-10">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i
                                                                                    class="icofont icofont-ui-touch-phone"></i></span>
                                                                            <input
                                                                                value="{{ $student->guardian_phone_number }}"
                                                                                required name="guardian_phone_number"
                                                                                type="text" data-mask="9999999999"
                                                                                class="mob_no form-control form-control-uppercase form-control-bold"
                                                                                placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label
                                                                        class="col-sm-4 col-lg-2 col-form-label">Address</label>
                                                                    <div class="col-sm-8 col-lg-10">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i
                                                                                    class="icofont icofont-location-pin"></i></span>
                                                                            <input value="{{ $student->address }}"
                                                                                required name="address" type="text"
                                                                                class="form-control form-control-uppercase form-control-bold"
                                                                                placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @can('update', $student)
                                                                    
                                                                
                                                                <div class="row">
                                                                    <div class="col-sm-8 col-lg-10">
                                                                        <div class="input-group">
                                                                            <input type="submit"
                                                                                class="btn btn-primary " value="UPDATE">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endcan
                                                                </form>



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


    <script type="text/javascript" src="{{ asset('custom/bower_components/jquery/dist/jquery.min.js') }}"></script>
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

    <script type="text/javascript" src="{{ asset('custom/bower_components/i18next/i18next.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('custom/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('custom/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('custom/bower_components/jquery-i18next/jquery-i18next.min.js') }}">
    </script>
    <script src="{{ asset('custom/assets/pages/form-masking/inputmask.js') }}"></script>
    <script src="{{ asset('custom/assets/pages/form-masking/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('custom/assets/pages/form-masking/autoNumeric.js') }}"></script>
    <script src="{{ asset('custom/assets/pages/form-masking/form-mask.js') }}"></script>
    <script type="text/javascript" src="{{ asset('custom/assets/js/script.js') }}"></script>
    <script src="{{ asset('custom/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('custom/assets/js/demo-12.js') }}"></script>
    <script src="{{ asset('custom/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('custom/assets/js/jquery.mousewheel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('custom/bower_components/select2/dist/js/select2.full.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('custom/assets/pages/advance-elements/select2-custom.js') }}"></script>
</body>

<!-- Mirrored from flatable.phoenixcoded.net/default/form-elements-add-on.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 11:52:45 GMT -->

</html>

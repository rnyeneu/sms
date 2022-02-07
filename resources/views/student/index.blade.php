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
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="icon" href="{{ asset('custom/assets/images/favicon.ico') }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
          href="{{ asset('custom/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/icon/themify-icons/themify-icons.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/icon/icofont/css/icofont.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/pages/flag-icon/flag-icon.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/pages/menu-search/css/component.css') }}">

    <link rel="stylesheet" type="text/css"
          href="{{ asset('custom/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('custom/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('custom/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('custom/assets/pages/data-table/extensions/buttons/css/buttons.dataTables.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/css/color/color-1.css') }}" id="color"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/css/linearicons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/css/simple-line-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/css/ionicons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/assets/css/jquery.mCustomScrollbar.css') }}">
    <script src="{{ asset('custom/assets/js/jquery.min.js') }}"></script>
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
                                    <li class=" active ">
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
                                        <li class="breadcrumb-item"><a href="{{ url('student/create') }}">Add
                                                students</a>
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
                                                    <div class="dt-buttons">
                                                        <a class="dt-button buttons-copy buttons-html5" tabindex="0"
                                                            aria-controls="basic-btn" href="student/create"><span>New Student</span></a>
                                                    </div>
                                                    <table  class="table table-striped  nowrap">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>First Name</th>
                                                            <th>Surname</th>
                                                            <th>DOB</th>
                                                            <th>Sex</th>
                                                            <th>Disability</th>
                                                            {{-- <th ></th> --}}
                                                            <th>Actions</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        @foreach ($student as $index => $row)
                                                            @can('view', $row)


                                                                <tr>
                                                                    <td>{{ $index + 1 }}</td>
                                                                    <td><a
                                                                            href="{{ url('student/' . $row->id) }}">{{ strtoupper($row->first_name) }}</a>
                                                                    </td>
                                                                    <td><a
                                                                            href="{{ url('student/' . $row->id) }}">{{ strtoupper($row->surname) }}</a>
                                                                    </td>
                                                                    <td><a
                                                                            href="{{ url('student/' . $row->id) }}">{{ $row->birth_date }}</a>
                                                                    </td>
                                                                    <td><a
                                                                            href="{{ url('student/' . $row->id) }}">{{ $row->sex }}</a>
                                                                    </td>
                                                                    <td><a
                                                                            href="{{ url('student/' . $row->id) }}">{{ $row->disability }}</a>
                                                                    </td>
                                                                    {{-- <td>
<a href="{{ url('student/'.$row->id) }}" class="btn btn-primary btn-round"><i class="icofont icofont-listing-number"></i></a>
</td> --}}
                                                                    <td style="text-align: center;">
                                                                        <a href="{{ url('student/' . $row->id . '/edit') }}"
                                                                           class="btn btn-primary btn-round"><i
                                                                                class="icofont icofont-edit"
                                                                                data-toggle="tooltip"
                                                                                title='Edit this record'></i></a>
                                                                    </td>
                                                                    <td>
                                                                        <form
                                                                            action="{{ url('student/' . $row->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                    class="btn btn-danger  btn-round"><i
                                                                                    class="icofont icofont-trash show_confirm"
                                                                                    data-toggle="tooltip"
                                                                                    title='Delete this record'></i>
                                                                            </button>
                                                                        </form>

                                                                    </td>
                                                                </tr>
                                                            @endcan
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
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following
                    web browsers to access this website.</p>
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


            <script type="text/javascript"
                    src="{{ asset('custom/bower_components/jquery/dist/jquery.min.js') }}"></script>
            <script type="text/javascript"
                    src="{{ asset('custom/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
            <script type="text/javascript"
                    src="{{ asset('custom/bower_components/tether/dist/js/tether.min.js') }}"></script>
            <script type="text/javascript"
                    src="{{ asset('custom/bower_components/bootstrap/dist/js/bootstrap.min.js') }}">
            </script>

            <script type="text/javascript"
                    src="{{ asset('custom/bower_components/jquery-slimscroll/jquery.slimscroll.js') }}">
            </script>

            <script type="text/javascript" src="{{ asset('custom/bower_components/modernizr/modernizr.js') }}"></script>
            <script type="text/javascript"
                    src="{{ asset('custom/bower_components/modernizr/feature-detects/css-scrollbars.js') }}"></script>

            <script type="text/javascript" src="{{ asset('custom/bower_components/classie/classie.js') }}"></script>

            <script src="{{ asset('custom/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
            <script
                src="{{ asset('custom/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
            <script src="{{ asset('custom/assets/pages/data-table/js/jszip.min.js') }}"></script>
            <script src="{{ asset('custom/assets/pages/data-table/js/pdfmake.min.js') }}"></script>
            <script src="{{ asset('custom/assets/pages/data-table/js/vfs_fonts.js') }}"></script>
            <script src="{{ asset('custom/assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js') }}">
            </script>
            <script
                src="{{ asset('custom/assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js') }}"></script>
            <script src="{{ asset('custom/assets/pages/data-table/extensions/buttons/js/jszip.min.js') }}"></script>
            <script src="{{ asset('custom/assets/pages/data-table/extensions/buttons/js/pdfmake.min.js') }}"></script>
            <script src="{{ asset('custom/assets/pages/data-table/extensions/buttons/js/vfs_fonts.js') }}"></script>
            <script
                src="{{ asset('custom/assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js') }}"></script>
            <script src="{{ asset('custom/assets/pages/data-table/extensions/buttons/js/pdfmake.min.js') }}"></script>
            <script
                src="{{ asset('custom/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
            <script
                src="{{ asset('custom/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
            <script
                src="{{ asset('custom/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
            <script
                src="{{ asset('custom/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}">
            </script>
            <script
                src="{{ asset('custom/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
            </script>

            <script type="text/javascript" src="{{ asset('custom/bower_components/i18next/i18next.min.js') }}"></script>
            <script type="text/javascript"
                    src="{{ asset('custom/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js') }}"></script>
            <script type="text/javascript"
                    src="{{ asset('custom/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js') }}">
            </script>
            <script type="text/javascript"
                    src="{{ asset('custom/bower_components/jquery-i18next/jquery-i18next.min.js') }}">
            </script>

            <script
                src="{{ asset('custom/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js') }}"></script>
            <script type="text/javascript" src="{{ asset('custom/assets/js/script.js') }}"></script>
            <script src="{{ asset('custom/assets/js/pcoded.min.js') }}"></script>
            <script src="{{ asset('custom/assets/js/demo-12.js') }}"></script>
            <script src="{{ asset('custom/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
            <script src="{{ asset('custom/assets/js/jquery.mousewheel.min.js') }}"></script>
            <script src="{{ asset('custom/assets/js/sweetalert.min.js') }}"></script>

            <script type="text/javascript">
                $('.show_confirm').click(function (event) {
                    var form = $(this).closest("form");
                    var name = $(this).data("name");
                    event.preventDefault();
                    swal({
                        title: `Are you sure you want to delete this record?`,
                        text: "If you delete this, it will be gone forever.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                        .then((willDelete) => {
                            if (willDelete) {
                                form.submit();
                            }
                        });
                });
            </script>
            <script type="text/javascript">
                $("document").ready(function () {
                    setTimeout(function () {
                        $("div.alert").remove();
                    }, 3000);
                });
            </script>
</body>

<!-- Mirrored from flatable.phoenixcoded.net/default/dt-ext-buttons-html-5-data-export.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 12:11:50 GMT -->

</html>

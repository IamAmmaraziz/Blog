<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">

<!-- Begin page -->

<div id="layout-wrapper">

    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">

                    <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo.svg" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-light.svg" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="19">
                                </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->
                {{--                <form class="app-search d-none d-lg-block">--}}
                {{--                    <div class="position-relative">--}}
                {{--                        <input type="text" class="form-control" placeholder="Search...">--}}
                {{--                        <span class="bx bx-search-alt"></span>--}}
                {{--                    </div>--}}
                {{--                </form>--}}

                <div class="dropdown dropdown-mega d-none d-lg-block ml-2">
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
                    <li class="menu-title">Menu</li>


                    <li>
                        <a href="/dashboard" class=" waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>


{{--                    <li>--}}
{{--                        <a href="javascript: void(0);" class="waves-effect">--}}
{{--                            <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">03</span>--}}
{{--                            <span>Dashboards</span>--}}
{{--                        </a>--}}
{{--                        <ul class="sub-menu" aria-expanded="false">--}}
{{--                            <li><a href="index.html">Default</a></li>--}}
{{--                            <li><a href="dashboard-saas.html">Saas</a></li>--}}
{{--                            <li><a href="dashboard-crypto.html">Crypto</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}


                    <li class="menu-title">Pages</li>



                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bxs-eraser"></i>
                            <span>Edit Form</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="/editstudent">Student Form</a></li>
                            <li><a href="/editguardian">Guardian Form</a></li>
                            <li><a href="/editteacher">Teacher Form</a></li>
                            <li><a href="/editclass">Class</a></li>

                        </ul>
                    </li>

                    <li class="menu-title">Components</li>


                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="bx bxs-file"></i>
                            <span class="badge badge-pill badge-success float-right">4</span>
                            <span>Student</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="/student">Add Student</a></li>
                            <li><a href="/showstudent">All Students</a></li>
                            </ul>
                    </li>
{{----}}
{{--       Class             --}}
{{--                    --}}
                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="bx bxs-file"></i>
                            <span class="badge badge-pill badge-success float-right"></span>
                            <span>Class</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="/class">Add Class</a></li>
                            <li><a href="/showclass">All Classes</a></li>
                            </ul>
                    </li>

                    {{----}}
                    {{--          Guardian          --}}
                    {{--                    --}}
                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="bx bxs-file"></i>
                            <span class="badge badge-pill badge-success float-right"></span>
                            <span>Guardian</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="/guardian">Add Guardian</a></li>
                            <li><a href="/showguardian">All Guardian</a></li>
                        </ul>
                    </li>

                    {{----}}
                    {{--    Teacher                --}}
                    {{--                    --}}
                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="bx bxs-file"></i>
                            <span class="badge badge-pill badge-success float-right"></span>
                            <span>Teacher</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="/teacher">Add Teacher</a></li>
                            <li><a href="/showteacher">All Teachers</a></li>
                        </ul>
                    </li>

                    {{----}}
                    {{--                    --}}
                    {{--                    --}}
                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                {{--                Your content--}}

                @yield('content')

                {{--                <H1>Your Content</H1>--}}





                {{--                End Content--}}
                <!-- end page title -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Skote.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- JAVASCRIPT -->
<script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

<script src="{{asset('assets/js/app.js')}}"></script>

</body>
</html>

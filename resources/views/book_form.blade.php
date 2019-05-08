<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>eLibrary</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <style>

        body {
            font-family: 'Circular Std Book';
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            color: #71748d;
            background-color: #efeff6;
            -webkit-font-smoothing: antialiased;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #3d405c;
            margin: 0px 0px 15px 0px;
            font-family: 'Circular Std Medium';
        }

        h1 {
            font-size: 34px;
        }

        h2 {
            font-size: 28px;
            line-height: 30px;
        }

        h3 {
            font-size: 20px;
        }

        h4 {
            font-size: 16px;
            line-height: 26px;
        }

        h5 {
            font-size: 15px;
            line-height: 26px;
        }

        h6 {
            font-size: 12px;
        }

        p {
            margin: 0px 0px 20px 0px;
        }

        p:last-child {
            margin: 0px;
        }

        a {
            color: #71748d;
        }

        a:hover {
            color: #ff407b;
            text-decoration: none;
        }

        a:active,
        a:hover {
            outline: 0;
            text-decoration: none;
        }

        .dashboard-header .navbar {
            padding: 0px;
            border-bottom: 1px solid #e6e6f2;
            -webkit-box-shadow: 0px 0px 28px 0px rgba(82, 63, 105, 0.13);
            box-shadow: 0px 0px 28px 0px rgba(82, 63, 105, 0.13);
            -webkit-transition: all 0.3s ease;
            min-height: 60px;
        }


        .navbar-brand {
            display: inline-block;
            margin-right: 1rem;
            line-height: inherit;
            white-space: nowrap;
            padding: 11px 20px;
            font-size: 25px;
            font-weight: 400;
            color: #007bff;
        }

        .navbar-brand:hover {
            color: #007bff;
        }

        .navbar-right-top {
        }

        .navbar-right-top .nav-item {
            border-right: 1px solid #e6e6f2;
        }

        .navbar-right-top .nav-item:last-child {
            border: none;
        }

        .navbar-right-top .nav-item .nav-link {
            padding: 13px 20px;
            font-size: 16px;
            line-height: 2;
            color: #82849f;
        }

        /* -----------------------
    Left Navigation Sidebar
    ------------------------- */

        .nav-left-sidebar {
            position: fixed;
            width: 264px;
            height: 100%;
            top: 60px;
            overflow: auto;
            background-color: #fff;
            -webkit-box-shadow: 0px 0px 28px 0px rgba(82, 63, 105, 0.13);
            box-shadow: 0px 0px 28px 0px rgba(82, 63, 105, 0.13);
            -webkit-transition: all 0.3s ease;
        }

        .nav-left-sidebar .nav-link[data-toggle="collapse"] {
            position: relative;
            display: flex;
            align-items: center;
        }

        .nav-left-sidebar .nav-link[data-toggle="collapse"]::after {
            display: inline-block;
            width: 0;
            height: 0;
            position: absolute;
            right: 20px;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid;
            border-right: 0.3em solid transparent;
            border-bottom: 0;
            border-left: 0.3em solid transparent;
        }

        .nav-left-sidebar .nav-link[data-toggle="collapse"][aria-expanded="false"]:after {
            transform: rotate(-90deg);
        }

        .nav-left-sidebar .nav-link[data-toggle="collapse"]:after {
            transition: transform .35s ease, opacity .35s ease;
            opacity: .5;
        }

        .nav-left-sidebar .navbar-nav {
            width: 100%;
        }

        .nav-left-sidebar .navbar {
            position: relative;
            padding: 14px;
        }

        .nav-left-sidebar .navbar-nav .nav-item {
        }

        .nav-left-sidebar .navbar-nav .nav-link {
            font-size: 14px;
            padding: 12px;
            /* margin-bottom: 2px; */
            color: #71789e;
            transition: 0.3s;
        }

        .nav-left-sidebar .nav-link i {
            font-size: 14px;
            margin-right: 9px;
            text-align: center;
            vertical-align: middle;
            line-height: 16px;
        }

        .nav-divider {
            padding: 10px 14px;
            line-height: 30px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 12px;
        }

        .nav-left-sidebar .submenu {
            padding-left: 12px;
            padding-right: 12px;
            /* margin-top: 5px; */
            background: #24274a;
        }

        .nav-left-sidebar .submenu .nav .nav-item .nav-link {
            font-size: 14px;
            padding: 6px 12px;
            transition: 0.3s;
        }

        .nav-left-sidebar .navbar-nav .nav-link:focus,
        .nav-left-sidebar .navbar-nav .nav-link.active {
            background-color: #e2e2eb;
            color: #3d405c;
            border-radius: 2px;
        }

        .nav-left-sidebar .navbar-nav .nav-link:focus,
        .nav-left-sidebar .navbar-nav .nav-link:hover {
            background-color: #e2e2eb;
            color: #3d405c;
            border-radius: 2px;
        }

        .nav-left-sidebar .submenu .nav .nav-item .nav-link:hover {
            color: #3d405c;
            border-radius: 2px;
            background-color: transparent;
        }

        .nav-left-sidebar .navbar-toggler {
            background-color: #fff;
        }

        .navbar-toggler {
            padding: .25rem 0.5rem;
            font-size: 1.25rem;
            line-height: 1;
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: .25rem;
        }

        /* -----------------------
    Leftsidebar - Primary
    ------------------------- */


        /* -----------------------
    Leftsidebar - dark
    ------------------------- */

        .sidebar-dark {
            background-color: #0e0c28;
            -webkit-box-shadow: 0px 0px 28px 0px rgba(82, 63, 105, 0.13);
            box-shadow: 0px 0px 28px 0px rgba(82, 63, 105, 0.13);
            -webkit-transition: all 0.3s ease;
        }

        .sidebar-dark .nav-divider {
            color: #a4aadb;
            font-size: 12px;
            letter-spacing: 1px;
        }

        .sidebar-dark.nav-left-sidebar .nav-link i {
            color: #7a80b4;
        }

        .sidebar-dark.nav-left-sidebar .navbar-nav .nav-item {
        }

        .sidebar-dark.nav-left-sidebar .navbar-nav .nav-link {
            color: #7a80b4;
        }

        .sidebar-dark.nav-left-sidebar .navbar-nav .nav-link:focus,
        .sidebar-dark.nav-left-sidebar .navbar-nav .nav-link:hover {
            color: #fff;
            background-color: #242849;
            border-radius: 2px;
        }

        .sidebar-dark.nav-left-sidebar .navbar-nav .nav-link:focus,
        .sidebar-dark.nav-left-sidebar .navbar-nav .nav-link.active {
            background-color: #242849;
            color: #fff;
            border-radius: 2px;
        }

        .sidebar-dark.nav-left-sidebar .submenu .nav .nav-item .nav-link:hover {
            color: #fff;
            border-radius: 2px;
            background-color: #242849;
        }

        .sidebar-dark.nav-left-sidebar .navbar-nav .nav-item .badge {
            position: absolute;
            right: 40px;
            display: none;
        }


        .dashboard-main-wrapper {
            min-height: 100%;
            padding-top: 60px;
            position: relative;
        }

        .dashboard-wrapper {
            position: relative;
            left: 0;
            margin-left: 264px;
            min-height: 870px !important;
        }

        .dashboard-content {
            padding: 30px 30px 60px 30px;
        }


        .footer {
            border-top: 1px solid rgba(152, 166, 173, .2);
            padding: 14px 30px 14px;
            color: #71748d;
            background-color: #fff;
            width: 100%;
            /*position: absolute; bottom: 0;*/
        }

        @media only screen and (max-width: 768px) {
            .dashboard-content {
                padding: 20px 20px 60px 20px;
            }

            .nav-left-sidebar .navbar a {
                color: #fff;
                font-size: 18px;
            }

            .nav-left-sidebar .navbar {
                padding: 14px;
            }

            .nav-left-sidebar {
                width: 100%;
                position: relative;
                top: 0px;
                right: 0px;
            }

            .dashboard-wrapper {
                margin-left: 0px;
            }

            .nav-left-sidebar .navbar-toggler {
                background-color: #fff;
            }

            /* infulencer dahboard */
            .dashboard-influence .card-footer-item {
                padding: 11px 54px;
            }

            .influencer-profile .tab-regular .nav.nav-tabs .nav-item .nav-link,
            .influencer-profile .tab-regular .nav.nav-pills .nav-item .nav-link {
                display: block;
                padding: 17px 13px;
            }
        }


    </style>
</head>

<body>

<div class="dashboard-main-wrapper">
{{--topar--}}
@include('admin_top_bar')
    {{--end topbar--}}
    {{--left sidebar--}}
@include('admin_side_bar')
<!-- end left sidebar -->
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Book Upload</h2>

                    {{--@if(count($errors)>0)--}}
                        {{--<ul>--}}
                            {{--@foreach($errors->all() as $error)--}}
                                {{--<li class="alert alert-danger">{{$error}}</li>--}}
                                {{--@endforeach--}}
                        {{--</ul>--}}
                        {{--@endif--}}
                    <div class="container border-dark">
                        <div class="container ">

                            @if(session('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                        <form method="post" action="{{url('bookupload')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <label for="Name">Title Name:</label>
                                    <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}">
                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <label for="Email">Author Name:</label>
                                    <input type="text" class="form-control {{ $errors->has('author_name') ? ' is-invalid' : '' }}" name="author_name" value="{{ old('author_name') }}">
                                    @if ($errors->has('author_name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('author_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <label for="Email">Description:</label>
                                    <textarea rows="4" cols="40" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" ></textarea>
                                    {{--<input type="text" class="form-control" name="description">--}}
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <label for="Number">Book:</label><br>
                                    <input type="file" name="filename" {{ $errors->has('filename') ? ' is-invalid' : '' }}>
                                    @if ($errors->has('filename'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('filename') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <label for="Number">Book Price:</label>
                                    <input type="text" class="form-control {{ $errors->has('book_price') ? ' is-invalid' : '' }}" name="book_price" value="{{ old('book_price') }}">
                                    @if ($errors->has('book_price'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('book_price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <label for="Number">Image:</label><br>
                                    <input type="file" name="imagefile">
                                    @if ($errors->has('imagefile'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('imagefile') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <lable>Fileds</lable>
                                    <select name="filed">
                                        <option value="Computer">Computer</option>
                                        <option value="English">English</option>
                                        <option value="urdu">urdu</option>
                                        <option value="Math">Math</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="form-group col-md-4" style="margin-top:60px">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- footer -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <a> azeem.tahir.ch@gmail.com</a>.
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


</body>


</html>
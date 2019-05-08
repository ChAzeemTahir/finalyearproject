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

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
        .navbar-brand:hover{
            color: #007bff;
        }
        .navbar-right-top {}

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

        .nav-left-sidebar .navbar-nav .nav-item {}

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

        .sidebar-dark.nav-left-sidebar .navbar-nav .nav-item {}

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

        .sidebar-dark.nav-left-sidebar .navbar-nav .nav-item .badge{
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
        @media only screen and (max-width:768px) {
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

        .topnav .search-container {
            float: right;
        }

        .topnav input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
        }

        .topnav .search-container button {
            float: right;
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .topnav .search-container button:hover {
            background: #ccc;
        }

        @media screen and (max-width: 600px) {
            .topnav .search-container {
                float: none;
            }
            .topnav a, .topnav input[type=text], .topnav .search-container button {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }
            .topnav input[type=text] {
                border: 1px solid #ccc;
            }
        }


        /*but*/
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 500px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        @keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }


        .close {
            color: #717573;;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: #F62E0F;
            text-decoration: none;
            cursor: pointer;
        }
        .modal-header {
            padding: 2px 16px;
            background-color: #E5E7E6;
            color: white;
        }


        /*end*/




    </style>
</head>

<body>

<div class="dashboard-main-wrapper">
{{--topbar--}}
@include('admin_top_bar')
    {{--end topbar--}}
    {{--left sidebar--}}
@include('admin_side_bar')
<!-- end left sidebar -->
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="container ">
                <div class="container ">

                    @if(session('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title"> <p class="font-italic">Book Details </p></h2>
                    <div class="container">

                        <div class="row justify-content-center">
                            <div class="col-sm-11">
                                <div class="card">
                                    <div class="card-header"> <p class="font-italic">Book Details</p>
                                        <div class="topnav">
                                        <div class="search-container">
                                            <form action="{{url('bookdetails')}}" method="get">
                                                <input type="text" placeholder="Search.." name="search">
                                                <button type="submit">filter</button>
                                            </form>
                                        </div>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive-sm">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>

                                                <th scope="col"> <p class="font-italic">ID</p></th>
                                                <th scope="col"> <p class="font-italic">Image</p></th>
                                                <th scope="col"> <p class="font-italic">Title</p></th>
                                                <th scope="col"> <p class="font-italic">Author_name</p></th>
                                                <th scope="col"> <p class="font-italic">Price</p></th>
                                                <th scope="col"> <p class="font-italic">Filed</p></th>
                                                <th colspan="2"> <p class="font-italic">Action</p></th>
                                            </tr>
                                            </thead>
                                        @foreach($data as $book)

                                        <tr>
                                        <td>{{$book['id']}}</td>
                                            <td> <img src="{{ asset('images/'.$book['imagefile'])}}" height="75" width="75" class="img-thumnail" /></td>
                                            <td> <p class="font-italic">{{$book['title']}}</p></td>
                                            <td> <p class="font-italic">{{$book['author_name']}}</p></td>
                                        <td>{{$book['book_price']}}</td>
                                            <td> <p class="font-italic">{{$book['filed']}}</p></td>


                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="true">
                                                    <i class="fas fa-bars"></i>
                                                </button>
                                                <div class="dropdown-menu bg-light container">

                                                    {{--<a id="myBtn" href="{{url('edit', $book['id'])}}"><i class="fas fa-edit"></i>edit</a><br>--}}
                                                    <a href="{{url('edit', $book['id'])}}" class="btn btn-primary"><i class="fas fa-edit"></i>edit</a>

                                                    <br>
                                                    <form action="{{url('destroy', $book['id'])}}" method="post">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button class="btn btn-danger" type="submit"> <i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                        </table>
                                    </div>
                                    </div>

                                    <div class="container">
                                        <div align="center"> {{ $data->links()}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
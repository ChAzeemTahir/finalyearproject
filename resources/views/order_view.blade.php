<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
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


    </style>
</head>

<body>

<div class="dashboard-main-wrapper">
    {{--topbar--}}
@include('admin_top_bar')
{{--end topbar--}}
    {{--side left sidebar--}}
@include('admin_side_bar')
<!-- end left sidebar -->

        <div class="container ">

            @if(session('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>
                    {{ session('success') }}
                </div>
            @endif
        </div>
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title"> <p class="font-italic">Order #{{$orderdetalis->id}}</p> </h2>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header"><p class="font-italic">Order View</p>
                                        <div class="topnav">
                                        </div>

                                    </div>
                                    {{--Order details--}}
                                    <div class="card-body">
                                        <div class="table-responsive-sm">
                                            <div class="main-panel">
                                                <div class="content-wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-6 grid-margin stretch-card">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Order Detalis</h4>
                                                                    <div class="table-responsive">
                                                                        <table class="table">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Order Date</th>
                                                                                <th>Status</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td>{{$orderdetalis->created_at}}</td>
                                                                                <td>
                                                                                    <h3><label class="badge badge-danger">{{$orderdetalis->status}}</label></h3>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{--Customer details--}}
                                                        <div class="col-lg-6 grid-margin stretch-card">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Customer Details</h4>
                                                                    <div class="table-responsive">
                                                                        <table class="table table-hover">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Customer Name</th>
                                                                                <th>E-mail</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td>{{$userdetalis->name}}</td>
                                                                                <td>{{$orderdetalis->email}}</td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
<br><br><br><br><br><br><br><br><br><br>
                                                        {{--Order details--}}
                                                        <div class="col-lg-12 grid-margin stretch-card">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Order</h4>
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>
                                                                                    Order ID
                                                                                </th>
                                                                                <th>
                                                                                    Product Name
                                                                                </th>
                                                                                <th>
                                                                                    Product Quantity
                                                                                </th>
                                                                                <th>
                                                                                    Product Price
                                                                                </th>
                                                                            </tr>
@foreach($orderdetalis->order as $order)
                                                                            <tr>
                                                                                <td>
                                                                                    {{$order->order_id}}
                                                                                </td>
                                                                                <td>
                                                                                    {{$order->product_name}}
                                                                                </td>
                                                                                <td>
                                                                                    {{$order->product_qty}}
                                                                                </td>
                                                                                <td>
                                                                                    {{$order->product_price}}
                                                                                </td>
                                                                            </tr>
                                                                            @endforeach

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="footer ">
                                                                <span>Total </span>
                                                                <strong>Rs {{$orderdetalis->total}}</strong>
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
</body>


</html>
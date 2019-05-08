 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>eLibery</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>--}}
    <style>
        .header {
            background: #e9605c;
            height: 100px;
        }

        .searchbar {
            margin-bottom: auto;
            margin-top: 20px;
            height: 60px;
            background-color: #353b48;
            border-radius: 30px;
            padding: 10px;
        }

        .search_input {
            color: white;
            border: 0;
            outline: 0;
            background: none;
            width: 0;
            caret-color: transparent;
            line-height: 40px;
            transition: width 0.4s linear;
        }

        .searchbar:hover > .search_input {
            padding: 0 10px;
            width: 150px;
            caret-color: red;
            transition: width 0.4s linear;
        }

        .searchbar:hover > .search_icon {
            background: white;
            color: #e74c3c;
        }

        .search_icon {
            height: 40px;
            width: 40px;
            float: right;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: white;
        }

        .footer {
            height: auto;
            padding-bottom: 30px;
            position: relative;
            width: 100%;
            color: #fff;
            border-bottom: 1px solid #CCCCCC;
            border-top: 1px solid #DDDDDD;
            background: #00003E;
            background: -webkit-linear-gradient(to right, #31BDE6, #00003E);
            background: linear-gradient(to right, #31BDE6, #00003E);
        }


        .footer h3 {
            border-bottom: 1px solid #BAC1C8;
            color: #fff;
            font-size: 18px;
            font-weight: 600;
            line-height: 27px;
            padding: 40px 0 10px;
            text-transform: uppercase;
        }

        .footer ul {
            font-size: 13px;
            list-style-type: none;
            margin-left: 0;
            padding-left: 0;
            margin-top: 15px;
            color: #7F8C8D;
        }

        .footer ul li a {
            padding: 0 0 5px 0;
            display: block;
        }

        .footer a {
            color: #78828D;
            color: #fff;
        }

        .supportLi h4 {
            font-size: 20px;
            font-weight: lighter;
            line-height: normal;
            margin-bottom: 0 !important;
            padding-bottom: 0;
        }

        .subscribe-btn .btn {
            border: medium none;
            border-radius: 4px;
            display: inline-block;
            height: 40px;
            padding: 0;
            width: 100%;
            color: #fff;
            margin-top: 10px;
        }

        .subscribe-btn {
            overflow: hidden;
        }

        .social li {
            border: 2px solid #B5B5B5;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -o-border-radius: 50%;
            -ms-border-radius: 50%;
            border-radius: 50%;
            float: left;
            height: 36px;
            line-height: 36px;
            margin: 0 8px 0 0;
            padding: 0;
            text-align: center;
            width: 36px;
            transition: all 0.5s ease 0s;
            -moz-transition: all 0.5s ease 0s;
            -webkit-transition: all 0.5s ease 0s;
            -ms-transition: all 0.5s ease 0s;
            -o-transition: all 0.5s ease 0s;
        }

        .social li a {
            color: #EDEFF1;
        }

        .social li:hover {
            border: 2px solid #2c3e50;
            background: #2c3e50;
        }

        .social li a i {
            font-size: 16px;
            margin: 0 0 0 5px;
            color: #EDEFF1 !important;
        }

        .carousel-item {

            height: 400px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        #bar {
            height: 50px;

        }

        .name {

            margin-top: 25px;
            margin-left: 50px;
        }
        .btn{
            margin-top: 30px;
            border-radius: 100px;
        }
    </style>
</head>

<body>
@include('topbar')
<br><br><br>


<div class="container ">

    <div class="header-title bg-light" style="height: 35px">
        <h3 class="heading-title">{{$data['title']}} <span style="font-weight:normal">By : <a
                        href="#">{{$data['author_name']}}</a></span>
        </h3>
    </div>
    <br>
    <div class="row">
        <div class="col-sm">
            <div class="left">
                <div class="image">
                    <img src="{{ asset('images/'.$data['imagefile'])}}" style="height: 500px">

                </div>

            </div>
        </div>
        <br>
        <div class="col">
            <div class="right">
                <div id="product" class="product-options">
                    <ul class="list-unstyled description">
                        <li class="product-views-count">

                            <span class="viw-cnt">Views: 46<span></span></span></li>
                        <table class="book-details">
                            <tbody>
                            <tr>
                                <td class="p-model"><span class="p-model" itemprop="model">Author:</span></td>
                                <td class="p-model"><span class="p-model" itemprop="model"><a
                                                href="https://www.libertybooks.com/index.php?route=product/author&amp;author_id=29209">{{$data['author_name']}}</a></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-model"><span class="p-model" itemprop="model">Publication Date:</span>
                                </td>
                                <td class="p-model"><span class="p-model" itemprop="model">10/01/2019</span></td>
                            </tr>
                            <tr>
                                <td class="p-model"><span class="p-model" itemprop="model">Subject:</span></td>
                                <td class="p-model"><span class="p-model" itemprop="model">{{$data['filed']}}</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-stock"><span class="">Availability:</span></td>
                                <td class="p-stock"><span class="journal-stock instock">Available For Sale</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </ul>

                    <ul class="list-unstyled price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                        <li class="price-old"><strike>Rs 0</strike></li>
                        <li class="price-old price_percent"
                            style="background:rgb(253, 221, 44);color:black;border-radius: 100px;width: 35px; "><p
                                    style="align-content: center">5% <br>off</p></li>
                        <li class="price-new" itemprop="price">Rs {{$data['book_price']}}</li>
                    </ul>
                    <div class="form-group cart ">
                        <div>
                            <a type="button" class="btn btn-primary" href="{{url('add-to-cart/'.$data->id)}}"><span>Add to Cart</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div>
        <br>
        <h1>Description</h1>
        <p>{{$data['description']}}</p>
    </div>

</div>
<div class="modal" id="ordrhistory">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Order History</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">

                <div class="container">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th> <p class="font-italic">Payment</p></th>
                            <th> <p class="font-italic">Status</p></th>
                            <th> <p class="font-italic">Ordr Time</p></th>
                            <th> <p class="font-italic">order delivery time</p></th>
                        </tr>
                        </thead>
                        @if (Auth::check())
                        @foreach($orderdetalis as $order)
                            <tr>
                                <td> <p class="font-italic">Rs {{$order['total']}}</p></td>
                                <td> <p class="font-italic">{{$order['status']}}</p></td>
                                <td> <p class="font-italic">{{$order['created_at']}}</p></td>
                                <td> <p class="font-italic">{{$order['updated_at']}}</p></td>
                            </tr>
                            @endforeach
                            @endif
                            </tbody>
                    </table>
                    {{--{{ $data->links() }}--}}
                </div>
            </div>

        </div>
    </div>
</div>


{{--end book link--}}
{{--footer--}}
<div>
    <br/><br/><br/><br/>
    {{--footer--}}
    @include('footer')

    {{--</footer>--}}
</div>
{{--end footer--}}
</body>
</html>

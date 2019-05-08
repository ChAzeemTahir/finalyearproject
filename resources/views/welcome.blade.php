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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .header {
            background: #e9605c;
            height: 100px;
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

        .name {

            margin-top: 25px;
            margin-left: 50px;
        }

        .btn {
            margin-top: 30px;
            border-radius: 50px;
            background: #e9605c;
        }

        .demo {
            padding: 45px 0
        }

        .product-grid2 {
            font-family: 'Open Sans', sans-serif;
            position: relative
        }

        .product-grid2 .product-image2 {
            overflow: hidden;
            position: relative
        }

        .product-grid2 .product-image2 a {
            display: block
        }

        .product-grid2 .product-image2 img {
            width: 300px;
            height: 420px;
        }

        .product-image2 .pic-1 {
            opacity: 1;
            transition: all .5s
        }

        .product-grid2:hover .product-image2 .pic-1 {
            opacity: 0
        }

        .product-image2 .pic-2 {
            width: 100%;
            height: 100%;
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            transition: all .5s
        }

        .product-grid2:hover .product-image2 .pic-2 {
            opacity: 1
        }

        .product-grid2 .social {
            padding: 0;
            margin: 0;
            position: absolute;
            bottom: 50px;
            right: 25px;
            z-index: 1
        }

        .product-grid2 .social li {
            margin: 0 0 10px;
            display: block;
            transform: translateX(100px);
            transition: all .5s
        }

        .product-grid2:hover .social li {
            transform: translateX(0)
        }

        .product-grid2:hover .social li:nth-child(2) {
            transition-delay: .15s
        }

        .product-grid2:hover .social li:nth-child(3) {
            transition-delay: .25s
        }

        .product-grid2 .social li a {
            color: #505050;
            background-color: #fff;
            font-size: 17px;
            line-height: 45px;
            text-align: center;
            height: 45px;
            width: 45px;
            border-radius: 50%;
            display: block;
            transition: all .3s ease 0s
        }

        .product-grid2 .social li a:hover {
            color: #fff;
            background-color: #3498db;
            box-shadow: 0 0 10px rgba(0, 0, 0, .5)
        }

        .product-grid2 .social li a:after, .product-grid2 .social li a:before {
            content: attr(data-tip);
            color: #fff;
            background-color: #000;
            font-size: 12px;
            line-height: 22px;
            border-radius: 3px;
            padding: 0 5px;
            white-space: nowrap;
            opacity: 0;
            transform: translateX(-50%);
            position: absolute;
            left: 50%;
            top: -30px
        }

        .product-grid2 .social li a:after {
            content: '';
            height: 15px;
            width: 15px;
            border-radius: 0;
            transform: translateX(-50%) rotate(45deg);
            top: -22px;
            z-index: -1
        }

        .product-grid2 .social li a:hover:after, .product-grid2 .social li a:hover:before {
            opacity: 1
        }

        .product-grid2 .add-to-cart {
            color: #fff;
            background-color: #404040;
            font-size: 15px;
            text-align: center;
            width: 300px;
            padding: 10px 0;
            display: block;
            position: absolute;
            left: 0;
            bottom: -100%;
            transition: all .3s
        }

        .product-grid2 .add-to-cart:hover {
            background-color: #3498db;
            text-decoration: none
        }

        .product-grid2:hover .add-to-cart {
            bottom: 0
        }

        .product-grid2 .product-new-label {
            background-color: #3498db;
            color: #fff;
            font-size: 17px;
            padding: 5px 10px;
            position: absolute;
            right: 0;
            top: 0;
            transition: all .3s
        }

        .product-grid2:hover .product-new-label {
            opacity: 0
        }

        .product-grid2 .product-content {
            padding: 20px 10px;
            text-align: center
        }

        .product-grid2 .title {
            font-size: 17px;
            margin: 0 0 7px
        }

        .product-grid2 .title a {
            color: #303030
        }

        .product-grid2 .title a:hover {
            color: #3498db
        }

        .product-grid2 .price {
            color: #303030;
            font-size: 15px
        }

        @media screen and (max-width: 990px) {
            .product-grid2 {
                margin-bottom: 30px
            }
        }
     #search_input{

    border-radius: 5px;
    }
        #search_btn{

            border-radius: 5px;
        }




    </style>
</head>

<body>
@include('topbar')
<br>
{{--image slide--}}
<div class="container ">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active border"
                 style="background-image: url('https://www.incimages.com/uploaded_files/image/970x450/getty_883231284_200013331818843182490_335833.jpg')">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item border"
                 style="background-image: url('https://static.independent.co.uk/s3fs-public/thumbnails/image/2018/09/04/16/open-book.jpg')">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item border"
                 style="background-image: url('https://www.washingtonpost.com/graphics/entertainment/2016-best-books/img/best-books-2016-promo.jpg')">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
{{--end image slide--}}
<br><br><br>
{{--Search--}}
<div class="container  ">
    <div class="card-header">
        <div class="topnav">
            <div class="search-container" align="right">
                <form action="{{url('/')}}" method="get">
                    <input type="text" placeholder="Search.."  name="search">
                    <button type="submit"  ><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>

    </div>
    {{--endSearch--}}
    {{--Books--}}
    <br><br><br>
    <div id="tag_container">
        @include('Book_Pagination')
    </div>
</div>
<br/><br/><br/><br/>
{{--footer--}}
<div>
@include('footer')

{{--</footer>--}}
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-phone"></i>contacts us</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <br>
                <label>Name :</label>
                <strong>Azeem Tahir</strong>
                <br>
                <label>Phone #</label>
                <strong>03034497159</strong>
                <br>
                <label>E-mail :</label>
                <strong>Azeem.tahir.ch@gmail.com</strong>
            </div>
        </div>
    </div>
</div>

</div>
{{--comments--}}
<div class="modal" id="comment">
    <div class="modal-dialog">
        <div class="modal-content" >

            <!-- Modal Header -->
            <div class="modal-header" >
                <h4 class="modal-title"><i class="far fa-comments"></i>Comment</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->

            <div class="modal-body">
                <form action="{{url('comment')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="comment">Name:</label>
                        <input type="text" class="form-control"  name="name" >
                    </div>
                    <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" rows="5"  name="comment"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>

</div>







<!-- The Modal Order History -->
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
</div>
</div>

</div>
<script type="text/javascript">
    $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            }else{
                getData(page);
            }
        }
    });

    $(document).ready(function()
    {
        $(document).on('click', '.pagination a',function(event)
        {
            event.preventDefault();

            $('li').removeClass('active');
            $(this).parent('li').addClass('active');

            var myurl = $(this).attr('href');
            var page=$(this).attr('href').split('page=')[1];

            getData(page);
        });

    });

    function getData(page){
        $.ajax(
            {
                url: '?page=' + page,
                type: "get",
                datatype: "html"
            }).done(function(data){
            $("#tag_container").empty().html(data);
            location.hash = page;
        }).fail(function(jqXHR, ajaxOptions, thrownError){
            alert('No response from server');
        });
    }
</script>


</body>
</html>

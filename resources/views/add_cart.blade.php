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



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

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
        .name {
            margin-top: 25px;
            margin-left: 50px;
        }

        .table>tbody>tr>td, .table>tfoot>tr>td{
            vertical-align: middle;
        }
        @media screen and (max-width: 600px) {
            table#cart tbody td .form-control{
                width:20%;
                display: inline !important;
            }
            .actions .btn{
                width:36%;
                margin:1.5em 0;
            }

            .actions .btn-info{
                float:left;
            }
            .actions .btn-danger{
                float:right;
            }
            table#cart thead { display: none; }
            table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
            table#cart tbody tr td:first-child { background: #333; color: #fff; }
            table#cart tbody td:before {
                content: attr(data-th); font-weight: bold;
                display: inline-block; width: 8rem;
            }
            table#cart tfoot td{display:block; }
            table#cart tfoot td .btn{display:block;}

        }
        .btn {
            margin-top: 30px;
            border-radius: 50px;
        }

    </style>
</head>

<body>
@include('topbar')
<br><br><br>

{{--addtocart--}}
<div class="container">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>

        <?php $total = 0 ?>

        @if(session('cart'))
            @foreach(session('cart') as $id => $details)

                <?php $total += $details['price'] * $details['quantity'] ?>

                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src=" {{ asset('images/'.$details['photo'])}}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">Rs{{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                    </td>
                    <td data-th="Subtotal" class="text-center">Rs{{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <a class="btn btn-info btn-sm update-cart" data-id="{{ $id }}" ><i class="fas fa-sync-alt"></i></a>
                        {{--<a class="btn btn-danger btn-sm remove-from-cart" delete-id="{{ $id }}"><i class="fa fa-trash" aria-hidden="true"></i></a>--}}
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
        <tfoot>

        <tr>
            <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total Rs{{ $total }}</strong></td>
            <br>
            <td class="hidden-xs text-center"><strong><a href="{{url('checkout')}}" class="btn btn-success pull-right">Checkout</a></strong></td>
        </tr>
        </tfoot>
    </table>

</div>


{{--endaddtocart--}}
{{--footer--}}
<div>
    <br/><br/><br/><br/>
    {{--footer--}}
    @include('footer')

    {{--</footer>--}}
</div>
{{--end footer--}}
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
                    {{--<table class="table table-bordered">--}}
                        {{--<thead>--}}
                        {{--<tr>--}}
                            {{--<th> <p class="font-italic">Payment</p></th>--}}
                            {{--<th> <p class="font-italic">Status</p></th>--}}
                            {{--<th> <p class="font-italic">Ordr Time</p></th>--}}
                            {{--<th> <p class="font-italic">order delivery time</p></th>--}}
                        {{--</tr>--}}
                        {{--</thead>--}}
                        {{--@foreach($orderdetalis as $order)--}}
                            {{--<tr>--}}
                                {{--<td> <p class="font-italic">Rs {{$order['total']}}</p></td>--}}
                                {{--<td> <p class="font-italic">{{$order['status']}}</p></td>--}}
                                {{--<td> <p class="font-italic">{{$order['created_at']}}</p></td>--}}
                                {{--<td> <p class="font-italic">{{$order['updated_at']}}</p></td>--}}
                            {{--</tr>--}}
                            {{--@endforeach--}}

                            {{--</tbody>--}}
                    {{--</table>--}}
                    {{--{{ $data->links() }}--}}
                </div>
            </div>

        </div>
    </div>
</div><div class="modal" id="ordrhistory">

</div>
</div>


</body>
</html>



    {{--<script type="text/javascript">--}}

        {{--$(".update-cart").click(function (e) {--}}
            {{--e.preventDefault();--}}

            {{--var ele = $(this);--}}

            {{--$.ajax({--}}
                {{--url: '{{ url('update-cart') }}',--}}
                {{--method: "patch",--}}
                {{--data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},--}}
                {{--success: function (response) {--}}
                    {{--window.location.reload();--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}

        {{--$(".remove-from-cart").click(function (e) {--}}
            {{--e.preventDefault();--}}

            {{--var ele = $(this);--}}

            {{--if(confirm("Are you Delete this Product")) {--}}
                {{--$.ajax({--}}
                    {{--url: '{{ url('remove-cart') }}',--}}
                    {{--method: "DELETE",--}}
                    {{--data: {_token: '{{ csrf_token() }}', id: ele.attr("delete-id")},--}}
                    {{--success: function (response) {--}}
                        {{--window.location.reload();--}}
                    {{--}--}}
                {{--});--}}
            {{--}--}}
        {{--});--}}

    {{--</script>--}}
<script type="text/javascript">

    $(".update-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ url('update-cart') }}',
            method: "patch",
            data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
            success: function (response) {
                window.location.reload();
            }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure")) {
            $.ajax({
                url: '{{ url('remove-from-cart') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>


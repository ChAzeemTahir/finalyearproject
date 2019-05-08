<!doctype html>
<html lang="en">

<head><!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>

<body>


<div class="container">
    <h>Hi</h>
    <br>
    <h3> {{ Auth::user()->name }}</h3>
    <br>
    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
                <th style="width:50%">Product Name</th>
                <th style="width:8%">Quantity</th>
                <th style="width:10%">Price</th>
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
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                                </div>
                            </div>
                        </td>

                        <td data-th="Price">{{ $details['quantity'] }}</td>
                        <td data-th="Quantity">
                            <h4 class="nomargin">{{ $details['price'] }}</h4>
                            {{--<input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />--}}
                        </td>
                        <td data-th="Subtotal" class="text-center">Rs{{ $details['price'] * $details['quantity'] }}</td>
                    </tr>
                @endforeach
            @endif

            </tbody>
            <tfoot>

            <tr>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Grand Total Rs{{ $total }}</strong></td>

            </tr>
            </tfoot>
        </table>

    </div>
    <br>
    <h1>Thank You  For Order</h1>
    <FOOTER class="container">
        <h1 class="container">E-library</h1>
    </FOOTER>
</div>

</body>


</html>
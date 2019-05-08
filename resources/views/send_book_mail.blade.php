




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="container">
        <h>Hi</h>
        <br>
        <h3> {{ Auth::user()->name }}</h3>
        <br>
        <br>
    </div>

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th>Product Name</th>
            <th>Dowload</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$data['name']}}</td>
            <td><a class="nav-link" href="{{$data['filename']}}">
                    <i class="fas fa-file-download"></i></i>Download</a></td>
            <td>{{$data['description']}}</td>
        </tr>
        </tbody>
    </table>
    <br>
    <br>
    <br><br><br>    <h1>Thank You  For purchasing the Book</h1>
    <FOOTER class="container">
        <h1 class="container">E-library</h1>
    </FOOTER>
</div>

</body>
</html>
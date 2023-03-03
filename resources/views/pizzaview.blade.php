@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     {{--    bootstrap css  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="container">
    <h1 class="pizzaview">Pizza Types</h1>
    <table class="table">
        <tr>
            <th>Type</th>
            <th>Base</th>
            <th>Image</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>Margherrita</td>
            <td>Chissy Crust</td>
            <td><img class="image-table" src="img/pizza1.jpg" alt=""><a class="download" href="https://upload.wikimedia.org/wikipedia/commons/a/a3/Eq_it-na_pizza-margherita_sep2005_sml.jpg">download image</a></td>
            <td>1000 ksh.</td>
        </tr>
    </table>
    {{--  bootstrap  js--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
@endsection
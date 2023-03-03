<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Users</title>
  {{--    bootstrap css  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Export Users Data</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Base</th>
                    <th>Toppings</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach($pizzas as $pizza)
                <tr>
                    <td>{{$pizza->id}}</td>
                    <td>{{$pizza->name}}</td>
                    <td>{{$pizza->type}}</td>
                    <td>{{$pizza->base}}</td>
                    <td>
                        <div class="toppings">
                        <ul>
                        @foreach($pizza->toppings as $topping)
                        <li class="text-decoration-none li-toppings" >{{$topping}}</li>
                        @endforeach
                        </ul>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      
    </div>

    {{--  bootstrap  js--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
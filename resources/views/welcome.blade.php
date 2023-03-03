<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home| WallMeal House</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        {{--  booststrap  --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="css/welcome.css">
        
    </head>
    <body class="">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="img-logo" src="img/pizza-life.jfif" alt=""></a>
            <p class="logo-p">WallMeal House</p>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{route('login')}}">Login</a>
                    </li>
                    {{--  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('register')}}">Register</a>
                    </li>  --}}
                    
                </ul>
            </div>
        </div>
    </nav>

        <div class="container banner">
            <img src="img/pizza-house.png" alt="">
            <p>The north best pizza</p>
            <div class="text-center">
                <a class="btn btn-success" href="{{url('/create')}}">Place order</a>
                <a class="btn btn-success" href="{{ url('/pizzaview')}}">View pizzas</a>
            </div>
        </div>
       <footer>
            <p>Copyright@2023 WallMeal House</p>
       </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>

@extends('layouts.app')

@section('content')
    {{--  <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}


    <div class="container text-center">
        
        <p>Ordred By: {{$pizzas->name}}</p>
        <p>Pizza Type: {{$pizzas->type}}</p>
        <p>Pizza Base: {{$pizzas->base}}</p>
        <p>Extra Toppings:
            <div class="toppings">
                <ul>
                @foreach($pizzas->toppings as $topping)
                <li class="text-decoration-none li-toppings" >{{$topping}}</li>
                @endforeach
                </ul>
            </div>
        </p>
        <p>Created At: {{$pizzas->created_at->diffForHumans()}}</p>


    <form action="/list/{{$pizzas->id}}" method="POST"> 
        {{--  <form action="{{ route('pizzafiles.destroy',$pizzas->id) }}" method="POST">  --}}
        @csrf
        @method('DELETE')
        <button class="btn btn-primary">Complete Order</button>
    </form>


@endsection
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

<div class="container text-center fs-1 table-font">
    <div class="search-list">
        <h1>Pizza Orders</h1>
        <input type="text" class="form-control p-3" placeholder="Search here" id="search-input">
    </div>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Name</th>
            <th>Type</th>
            <th>Base</th>
            <th>Toppings</th>
            <th scope="col" class="a">Action</th>
        </tr>
         @foreach($pizzas as $pizza)
            <tr class="t-data">
                <td>{{$loop->index}}</td>
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
                
                <td><a class="btn btn-primary ms-1" href="/pizzaid/{{$pizza->id}}">View</a></td>
                <td> <form action="/list/{{$pizza->id}}" method="POST"> 
                    
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-primary ms-1">Delete</button>
                     </form>
                </td>
                <td><a class="btn btn-primary ms-1" href="{{url ('/edit/'.$pizza->id) }}">Update</a></td>
                <td><a class="btn btn-primary ms-1" href="{{ url('/pizzas') }}">Pdf</a></td>
                <td><a class="btn btn-primary ms-1" href="{{url('pizza/export/')}}">Csv</a></td>
            </tr>
         @endforeach
        
    </table>
</div>
 {{--  <h1>Pizza Orders</h1>
    @foreach($pizzas as $pizza)
    <p>{{$pizza->name}} -- {{$pizza->type}} -- {{$pizza->base}}</p> 
    <h4> <a href="/pizzaid/{{$pizza->id}}">{{$pizza->name}}</a></h4>
    @endforeach --}}
    
@endsection
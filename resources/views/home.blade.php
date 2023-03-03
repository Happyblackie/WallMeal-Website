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
<div>
    <a href="{{url('/create')}}">Place order</a>
    <a href="{{ url('/pizzaview')}}">View pizzas</a>
</div>
<div class="container text-center text-danger">
    {{session('msg')}}
</div>

@endsection

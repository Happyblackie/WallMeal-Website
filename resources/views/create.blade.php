@extends('layouts.app')
@section('content')
<div class="container  bg-light">
    <div class="row justify-content-center">
                <div class="col-8 text-center ">
                    <div class="create-top-div">
                    <p class="add-pizza">Add new pizza</p>
                     
                    <button class="btn btn-success btn-offcanvas" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" value="Pay Now">Pay</button>
                <div class="offcanvas offcanvas-end bg-light" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Payment Form</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body payform">
                        <label for="">Name</label>
                        <input type="text" placeholder="enter mpesa name"> <br>
                        <label for="">Contact</label>
                        <input type="text" placeholder="enter mpesa name"><br>
                        <label for="">Id number</label>
                        <input type="text" placeholder="enter mpesa name"><br>
                        <button class="btn btn-primary btn">Pay Now</button>
                    </div>
                    </div>
                </div>
                <div class="create-form">
                    <form class="form" action="/home" method="POST">
                        @csrf
                        <label for="name">Your name:</label> <br>
                        <input type="text" name="name" id="name"><br>
                        <label for="type">Choose pizza type:</label><br>
                        <select name="type" id="type">
                            <option value="margheritta">Margheritta</option>
                            <option value="kenyan">Kenyan</option>
                            <option value="veg supreme">Veg supreme</option>
                            <option value="volcano">Volcano</option>
                        </select><br>
                        <label for="base">Choose base type:</label>
                        <select name="base" id="base">
                            <option value="chissy crust">Chissy crust</option>
                            <option value="garlic crust">Garlic crust</option>
                            <option value="thin and crispy">Thin & crispy</option>
                            <option value="thick">Thick</option>
                        </select>
                        <fieldset>
                            <label for="">Extra toppings:</label>
                            <input type="checkbox" name="toppings[]" value="mushrooms">Mushroom<br/>
                            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br/>
                            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br/>
                            <input type="checkbox" name="toppings[]" value="olives">Olives<br/>
                        </fieldset>
                        <input class="btn btn-primary" type="submit" value="Order Pizza">
                        
                    </form>
                    
                </div>
        </div>
    </div>
</div>
   <footer>
            <p>Copyright@2023 WallMeal House</p>
    </footer>
@endsection
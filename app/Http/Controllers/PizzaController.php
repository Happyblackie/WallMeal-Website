<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pizza;

use App\Exports\PizzaExport;
use Maatwebsite\Excel\Facades\Excel;



class PizzaController extends Controller
{
    //
    public function list(){
        $pizzaVar = Pizza::all();
        return view('list',['pizzas'=>$pizzaVar]);
    }

    public function pizzaid($id){
        $pizzas = Pizza::findorFail($id);
        return view('pizzaid',['pizzas'=>$pizzas]);
    }

         //save/create
    public function create(){
        return view('create');
    }
   
    public function save(){
        /*  error_log(request('name'));
         error_log(request('type'));
         error_log(request('base')); */
 
         $pizzas = new Pizza(); //class instance
 
         $pizzas->name = request('name'); //objects
         $pizzas->type = request('type');
         $pizzas->base = request('base');
         $pizzas->toppings = request('toppings');
 
         $pizzas->save(); //now save
         return redirect('/home')->with('msg', 'Thanks for your order');
     }

     //delete
     public function destroy($id){
        $pizza = Pizza::findorFail($id); //finding the record and store it
        //using delete method
        $pizza->delete();

        //redirect to a pizzalist page after deletion
        return redirect('/list');
    }

    public function edit($id)
    {   
        $pizzas = Pizza::find($id);
        return view('edit',compact('pizzas'));
    }

    public function update(Request $request,$id)
    {
        $input = $request->all();

        $pizzas = Pizza::find($id);
        $pizzas->name = $input['name'];
        $pizzas->type = $input['type'];
        $pizzas->base = $input['base'];
       /*  $pizzas->toppings = $input['toppings[]']; */

        $pizzas->save();
        return redirect('/home');
    }


    public function export() 
    {
        return Excel::download(new PizzaExport, 'pizza.xlsx');
    }

   //view pizza
   public function pizzaview(){
     return view('pizzaview');
   }
   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pizza;
use Barryvdh\DomPDF\Facade\Pdf;



class PdfController extends Controller
{
    //
    public function index(){
        $pizzas = Pizza::all();
        return view('pdf',compact('pizzas'));
    }

    public function export(){
        $pizzas = Pizza::all();
     /*    $pdf = Pdf::loadView('pdf', compact('pizzas')); */
	    $pdf = Pdf::loadView('pdfdownload', compact('pizzas'));
    	return $pdf->download('pdfdownload');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function submitClient(Request $request){
        dd($request);
        $pdf = PDF::loadView('client', $data);
        return $pdf->download('client.pdf');    
    }
}

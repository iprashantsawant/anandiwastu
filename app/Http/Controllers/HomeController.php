<?php

namespace App\Http\Controllers;
use App\Models\AvRegistrations;
use Illuminate\Http\Request;
use DataTables;
use PDF;
class HomeController extends Controller
{
    public function submitClient(Request $request){
        // return $request;
        // $pdf = PDF::loadView('client', $data);
        // return $pdf->download('client.pdf');    
        $data= AvRegistrations::create($request->except(['_token']));
        return redirect('/');
    }

    public function getPdf($id)
    {
        $data=AvRegistrations::find($id);
        if($data){
            $pdf = PDF::loadView('clientpdf', ["data"=>$data]);
            // return $pdf->download('client_'.$id.'.pdf');
            return $pdf->stream('client_'.$id.'.pdf');

            
        }
        else{
            return "Invalid id";
        }
    }

    public function getBasic()
    {
        return view('client');
    }

    public function getBasicData()
    {
        return AvRegistrations::getListData();
    }
}

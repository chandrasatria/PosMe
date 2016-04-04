<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use JavaScript;
use Illuminate\Support\Facades\View;

class SaleController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {

        $str = file_get_contents('json/color.json');
        $hasiljson = json_decode( $str, true );
        JavaScript::put([
            'hasiljson' => $hasiljson,
        ]);
        //return view('sales.index');
        return View::make('sales.index2')->with('hasiljson',$hasiljson);
        //return view('sales.index')->with('hasiljson',$hasiljson);
        //d( $hasiljson );
        
    }
}
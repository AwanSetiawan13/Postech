<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaiController extends Controller
{
    public function index(Request $request, $alamat,)
    {
        $result = "Hai kamu ".$request->nama."bertempat di ".$alamat." dengan id ".$request->id;
        return $result;
    }
    
}

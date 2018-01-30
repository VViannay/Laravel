<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DrinkController extends Controller
{

    public function afficherBoisson()
    {
        $drinks = DB::table('boissons') -> get();
        return view('GestionBoisson',['drinks'=>$drinks]);
    }

    public function afficherDetail($id)
    {
        $drinks = DB::select("select * from boissons where `CODE` = '$id' ");
        return view('Details-boisson', ['drinks' => $drinks]);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function afficherBoisson()
    {
        $boissons = DB::select('select* from boissons');
        return view('drinkGesture', ['CAF' => $boissons]);

    }
}


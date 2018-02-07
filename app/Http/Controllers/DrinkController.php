<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Boisson;

class DrinkController extends Controller
{
                    /*
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

                    public function createBoisson()
                    {
                        $drink = DB::post("insert `CODE` `PRIX` `LIBELLE ` from boissons where ");
                    }
                    */

    public function index()
                    {
                        $boissons = \App\Boisson::orderBy('LIBELLE', 'ASC') -> get();



                        return view('GestionBoisson',    $data = [
                            'boissons' => $boissons,
                        ]);
                    }
    public function show()
    {
        $boissons = \App\Boisson::orderBy('PRIX', 'DESC') -> get();



        return view('GestionBoisson',    $data = [
            'boissons' => $boissons,
        ]);
    }

    public function store($id)
    {
        $boisson = \App\Boisson::find($id);

        return view('Details-boisson', $data = [
           'boisson' => $boisson,
    ]);
    }
    // créer une nouvelle boisson
    /**
     *
     */
    public function create(Request $request)
    {
        dump($request);
        $boissons = new Boisson;

        $boissons ->LIBELLE = $request-> DrinkName;
        $boissons ->CODE =  $request-> Code;
        $boissons ->PRIX =  $request-> DrinkPrice;
        $boissons-> save();
        return self::index();

    }

    public function edit($id)
    {
        $boissons = Boisson::find($id);



    }

}




<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Szinesz;

class SzineszController extends Controller
{
    public function index()
    {
        $szallitasok = Szinesz::all();
        return view("szinesz", ["szineszek" => $szinesz]);
    }

    public function save(Request $request){
        $request->validate(
            [
                "nev"=>"required",
                "szerep"=>"required",
                "film"=>"required"
            ],
            [
                "nev.required"=>"A név megadása kötelező",
                "szerep.required"=>"A szerep megadása kötelező",
                "film.required"=>"A film megadása kötelező"
            ]
            );
        
        $szinesz = new Szinesz();
        $szinesz->nev = $request->nev;
        $szinesz->szerep = $request->szerep;
        $szinesz->film = $request->film;
        $szinesz->save();
        return redirect("/szinesz")->with("alert", "Sikeres hozzáadás!");
    }
}
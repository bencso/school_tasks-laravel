<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;

class AutoController extends Controller
{
    public function index()
    {
        $autok = Auto::all();
        return view("autok", ["results" => $autok]);
    }

    public function save(Request $request)
    {
        $request->validate(
            [
                "rendszam" => ["required", "min:6", "max:9", "regex:/^[epvz]-[\d]{5}$|^[a-zA-Z]{3}-[\d]{3}$|^[a-zA-Z]{4}-[\d]{2}$|^[a-zA-Z]{5}-[\d]{1}$|^[mM][\d]{2} [\d]{4}$|^(ck|dt|hc|cd|hx|ma|ot|rx|rr) [\d]{2}-[\d]{2}$|^(c-x|x-a|x-b|x-c) [\d]{4}$|^[A-Z]{2} [A-Z]{2}-[\d]{3}$/"],

                "tipus" => "required",
                "evjarat" => "required|integer",
                "szin" => "required"
            ],
            [
                "rendszam.required" => "A rendszám megadása kötelező!",
                "rendszam.min" => "A rendszám minimum 6 karakter hosszú lehet!",
                "rendszam.max" => "A rendszám maximum 9 karakter hosszú lehet!",
                "rendszam.regex" => "A rendszám formátuma nem megfelelő!",
                "tipus.required" => "A típus megadása kötelező!",
                "evjarat.required" => "Az évjárat megadása kötelező!",
                "evjarat.integer" => "Az évjárat csak szám lehet!",
                "szin.required" => "A szín megadása kötelező!"
            ]
        );
        $auto = new Auto();
        $auto->rendszam = $request->rendszam;
        $auto->tipus = $request->tipus;
        $auto->marka = $request->marka;
        $auto->evjarat = $request->evjarat;
        $auto->szin = $request->szin;
        $auto->save();
        return redirect("/autok")->with("alert", "Az autó sikeresen hozzáadva!");
    }
}

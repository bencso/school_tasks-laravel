<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klipp;

class KlippController extends Controller
{
    public function index()
    {
        $klippek = Klipp::all();
        return view("klippek", ["results" => $klippek]);
    }

    public function save(Request $request)
    {
        $request->validate(
            [
                "eloado" => "required",
                "cim" => "required",
                "youtube" => [
                    "required",
                    "regex:/^(https?\:\/\/)?(www\.youtube\.com|youtu\.?be)\/.+$/",
                ],
                "perc" => "required|integer",
                "masodperc" => "required|integer",
            ],
            [
                "eloado.required" => "Az előadó megadása kötelező!",
                "cim.required" => "A cím megadása kötelező!",
                "youtube.required" => "A YouTube link megadása kötelező!",
                "youtube.regex" => "A YouTube link nem megfelelő formátumú!",
                "perc.required" => "Az idő megadása kötelező!",
                "perc.integer" => "Az idő csak szám lehet!",
                "masodperc.required" => "Az idő megadása kötelező!",
                "masodperc.integer" => "Az idő csak szám lehet!",
            ]
        );
        $klipp = new Klipp();
        $klipp->eloado = $request->eloado;
        $klipp->cim = $request->cim;
        $klipp->youtube = $request->youtube;
        $klipp->hossz = $request->perc . ":" . $request->masodperc;
        $klipp->save();

        return redirect("/klippek")->with("alert", "A klipp sikeresen hozzáadva!");
    }
}

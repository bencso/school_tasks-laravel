<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Szallitas;

class SzallitasController extends Controller
{
    public function index()
    {
        $szallitasok = Szallitas::all();
        return view("szallitas", ["results" => $szallitasok, "korzet" => [1, 20, 30, 50, 70]]);
    }

    public function save(Request $request)
    {
        $request->validate(
            [
                "nev" => "required",
                "irszam" => "required|numeric|digits:4|min:1000|max:9985",
                "varos" => "required|alpha",
                "utca" => "required",
                "hazszam" => "required",
                "tel" => "required|numeric|digits:7",
            ],
            [
                "tel.required" => "A telefonszám megadása kötelező!",
                "tel.numeric" => "A telefonszám csak számokat tartalmazhat!",
                "tel.digits" => "A telefonszám 7 számjegyből kell álljon!",
            ]
        );

        $szallitas = new Szallitas();
        $szallitas->nev = $request->nev;
        $szallitas->irsZ = $request->irszam;
        $szallitas->varos = $request->varos;
        $szallitas->utca = $request->utca;
        $szallitas->hazszam = $request->hazszam;
        $szallitas->emelet = $request->emelet ?? null;
        $szallitas->tel = "+36" . $request->tel_korzet . $request->tel;
        $szallitas->erintesmentes = $request->erintesmentesmentes ? $request->erintesmentes : "n";
        $szallitasok = $szallitas->save();
        if ($szallitasok) {
            return redirect("/szallitas")->with("success", "Sikeres mentés!");
        }
    }
}

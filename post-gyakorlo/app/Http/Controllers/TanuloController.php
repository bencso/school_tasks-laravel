<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanulo;
use function Laravel\Prompts\alert;

class TanuloController extends Controller
{
    public function index()
    {
        return view(
            "welcome",
            [
                "results" => Tanulo::all(),
                "agazatok" => ["Elektronika és elektrotechnika", "Informatika és távközlés", "Rendészet és közszolgálat"]
            ]
        );
    }

    public function save(Request $req)
    {
        $req->validate(
            [
                'nev' => 'required',
                'lakhely' => 'required',
                'nem' => 'required',
            ],
            [
                'nev.required' => 'A név megadása kötelező!',
                'lakhely' => 'A lakhely megadása kötelező!',
                'nem' => 'Kérem válassza ki a nemét!',
            ]
        );

        $data = new Tanulo();
        $data->nev = $req->nev;
        $data->kor = $req->kor;
        $data->lakhely = $req->lakhely;
        $data->nem = $req->nem;
        $data->agazat = $req->agazat;

        $data->save();
        return redirect('/')->with('alert', 'Sikeres mentés!');
    }
}

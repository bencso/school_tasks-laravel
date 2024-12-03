<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function akcios()
    {
        return view('welcome', [
            'result' => Pizza::where('akcios', 1)
                ->orderBy('id', 'asc')
                ->get()
        ]);
    }

    public function adatlap($id)
    {
        return view(
            'adatlap',
            [
                'result' => Pizza::find($id)
            ]
        );
    }

    public function all()
    {
        return view('all', [
            'result' => Pizza::all()
        ]);
    }

    public function allRend($q)
    {
        switch ($q) {
            case 1:
                return view('all', [
                    'result' => Pizza::orderBy(
                        'nev',
                        'asc'
                    )->get()
                ]);
            case 2:
                return view('all', [
                    'result' => Pizza::orderBy(
                        'nev',
                        'desc'
                    )->get()
                ]);
            case 3:
                return view('all', [
                    'result' => Pizza::orderBy(
                        'ar',
                        'asc'
                    )->get()
                ]);
            case 4:
                return view('all', [
                    'result' => Pizza::orderBy(
                        'ar',
                        'desc'
                    )->get()
                ]);
        }
    }

    public function random()
    {
        $last = Pizza::count('id');
        return view('adatlap', [
            'result' => Pizza::inRandomOrder()->first()
        ]);
    }

    function add(Request $req){
        $req->validate([
            'nev' => 'required|unique:pizza,nev',
            'ar' => 'required|numeric|min:1000|max:5000',
            'feltet' => 'required'
        ],
        [
            '*.required' => 'Nem lehet üres!',
            'ar.numeric'   => "Csak számot adhat meg!",
            'ar.min'       => 'Min. ár 1000 HUF',
            'ar.max'        => 'Max. ár 5000 HUF',
            'nev.unique' => "Van már ilyen pizza!"
        ]);

        $data = new Pizza();
        $data->nev = $req->nev;
        $data->feltet = $req->feltet;
        $data->ar = $req->ar;
        $req->has('akcios') ? $data->akcios = 1 : $data->akcios = 0;
        $data->save();
        return view("/sucess",[
            "sv" => $data->nev
        ]);
    }


    public function mod()
    {
        return view('modify', [
            'result' => Pizza::all()
        ]);
    }

    public function modForm($id){
        return view('modifyForm', [
            'result' => Pizza::find($id)]
        );
    }

    public function modData(Request $req){
        $req->validate([
            'ar' => 'required|numeric|min:1000|max:5000',
            'feltet' => 'required'
        ],
        [
            '*.required' => 'Nem lehet üres!',
            'ar.numeric'   => "Csak számot adhat meg!",
            'ar.min'       => 'Min. ár 1000 HUF',
            'ar.max'        => 'Max. ár 5000 HUF',
        ]);

    }
}

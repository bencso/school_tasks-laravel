<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Szallitas;

class SzallitasController extends Controller
{
    public function index()
    {
        $szallitasok = Szallitas::all();
        return view("szallitas", ["results" => $szallitasok]);
    }

    public function save(Request $request)
    {

        return redirect("/szallitas");
    }
}

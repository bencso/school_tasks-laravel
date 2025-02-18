<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orszag;
use App\Models\Kontinens;

class OrszagController extends Controller
{
    function index()
    {
        $userLocation = file_get_contents("http://ip-api.com/json");
        $timezone = json_decode($userLocation)->timezone;
        $kontinens = explode("/", $timezone)[0];
        $magyarositas = [
            "Europe" => "Európa",
            "Asia" => "Ázsia",
            "Africa" => "Afrika",
            "America" => "Amerika",
            "Australia" => "Ausztrália és Óceánia",
        ];
        $kontinens = $magyarositas[$kontinens];
        $continents = Kontinens::has('orszagok')->orderBy('nev')->get();
        $aktkontinens = Kontinens::with('orszagok')->where('nev', $kontinens)->first();
        return view('orszagok', ['kontinensek' => $continents, 'aktkontinens' => $aktkontinens]);
    }

    function show($id)
    {
        $continents = Kontinens::has('orszagok')->orderBy('nev')->get();
        $aktkontinens = Kontinens::with('orszagok')->find($id);
        return view('orszagok', ['kontinensek' => $continents, 'aktkontinens' => $aktkontinens]);
    }
}

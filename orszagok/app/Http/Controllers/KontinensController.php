<?php

namespace App\Http\Controllers;

use App\Models\Orszag;
use GeoIp2\Exception\GeoIp2Exception;
use Illuminate\Http\Request;
use App\Models\Kontinens;
use GeoIp2\Database\Reader;

class KontinensController extends Controller
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
        $continents = Kontinens::orderBy('nev')->get();
        $aktkontinens = Kontinens::where('nev', $kontinens)->first();
        $orszagok_szama = Orszag::where('kontinens_id', $aktkontinens->kontinens_id)->count();
        return view('kontinensek', ['kontinensek' => $continents, 'aktkontinens' => $aktkontinens, 'orszagok_szama' => $orszagok_szama]);
    }

    function show($id)
    {
        $continents = Kontinens::orderBy('nev')->get();
        $aktkontinens = Kontinens::find($id);
        $orszagok_szama = Orszag::where('kontinens_id', $id)->count();
        return view('kontinensek', ['kontinensek' => $continents, 'aktkontinens' => $aktkontinens, 'orszagok_szama' => $orszagok_szama]);
    }
}

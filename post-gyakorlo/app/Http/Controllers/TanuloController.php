<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanulo;

class TanuloController extends Controller
{
    public function index()
    {
        return view("welcome",
        [
            "results" => Tanulo::all(),
            "agazat"=> ["Elektronika és elektrotechnika", "Informatika és távközlés", "Rendészet és közszolgálat" ]
        ]);
    }
}

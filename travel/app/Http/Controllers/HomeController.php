<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Travel;

class HomeController extends Controller
{
    use HasFactory;



    public function index()
    {
        $routes = Travel::select('uticel')->distinct()->get();
        $travels = Travel::select('uticel','megnevezes','idotartam','ar','id')->orderBy('uticel')->get();
        return view('welcome', compact('routes', 'travels'));
    }


    public function uticel($p)
    {
        $routes = Travel::select('uticel')->distinct()->get();
        $travels = Travel::where('uticel', $p)->get();
        return view('uticel', compact('travels', 'routes', 'p'));
    }


    public function adatlap($id)
    {
        $routes = Travel::select('uticel')->distinct()->get();
        $travel = Travel::find($id);
        return view('adatlap', compact('travel', 'routes'));
    }
}

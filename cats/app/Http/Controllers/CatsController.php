<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class CatsController extends Controller
{
    public function index()
    {
        return view(
            "welcome",
            [
                "cats" => Image::all()
            ]
        );
    }

    public function show($id)
    {
        return view(
            "show",
            [
                "cat" => Image::find($id),
                "total" => Image::count()
            ]
        );
    }

    public function authors(){
        return view(
            "authors",
            [
                "authors"=> Image::select("author","author_link")->groupBy('author','author_link')->get()
            ]
        );
    }


    public function random(){
        return view(
            "random",
            [
                "cat" => Image::inRandomOrder()->first(),
                "total" => Image::count()
            ]
        );
    }
}

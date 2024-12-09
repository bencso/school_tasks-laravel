<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vendegkonyv;
use App\Models\hirek;

class KomplexController extends Controller
{
    public function Hirek(){
        return view('hirek',[
            'result'=> hirek::get()->reverse()
        ]);
    }

    public function Vendegkonyv(){
        return view('vendegkonyv',[
            'result'=> vendegkonyv::get()->reverse()
        ]);
    }

    public function VendegkonyvBekuldes(
        Request $request
    ){
        $request->validate([
            'nev' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ],
        [
            'nev.required' => 'A név megadása kötelező!',
            'email.required' => 'Az email cím megadása kötelező!',
            'email.email' => 'Az email cím formátuma nem megfelelő!',
            'message.required' => 'A szöveg megadása kötelező!',
            'nev.min' => 'A név minimum 3 karakter hosszú legyen!',
            'message.min' => 'A szöveg minimum 10 karakter hosszú legyen!'
        ]
    );
        $vendegkonyv = new vendegkonyv();
        $vendegkonyv->nev = $request->nev;
        $vendegkonyv->email = $request->email;
        $vendegkonyv->message = $request->message;
        $vendegkonyv->date = date('Y-m-d');
        $vendegkonyv->save();
        return redirect('/vendegkonyv');
    }
}

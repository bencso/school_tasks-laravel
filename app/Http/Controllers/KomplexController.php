<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\vendegkonyv;
use App\Models\hirek;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

class KomplexController extends Controller
{
    public function Hirek()
    {
        return view('hirek', [
            'result' => hirek::get()->reverse()
        ]);
    }

    public function Vendegkonyv()
    {
        return view('vendegkonyv', [
            'result' => vendegkonyv::get()->reverse()
        ]);
    }

    public function VendegkonyvBekuldes(
        Request $request
    ) {
        $request->validate(
            [
                'message' => 'required|min:10'
            ],
            [
                'message.required' => 'A szöveg megadása kötelező!',
            ]
        );
        $vendegkonyv = new vendegkonyv();
        $vendegkonyv->nev = Auth::user()->nev;
        $vendegkonyv->email = Auth::user()->email;
        $vendegkonyv->message = $request->message;
        $vendegkonyv->date = date('Y-m-d');
        $vendegkonyv->save();
        return redirect('/vendegkonyv');
    }

    public function Profil()
    {
        if (Auth::check()) {
            return view('profil', [
                'user' => Auth::user()
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function Register(Request $REQ)
    {
        $REQ->validate(
            [
                'name' => "required|min:5|unique:user,nev",
                "password" => [
                    'required',
                    Password::min(size: 8)
                        ->letters()
                        ->numbers()
                        ->symbols()
                        ->mixedCase(),
                    'confirmed',
                ],
                "password_confirmation" => "required",
                "email" => "required|email|unique:user,email"
            ],
            [
                'name.required' => "A név megadása kötelező!",
                "name.unique" => "Az alábbi névvel már regisztrálva van egy felhasználó!",
                "name.min" => "A név legalább 5 karakter kell legyen!",
                "email.required" => "Az email cím megadása kötelező!",
                "email.email" => "Az email cím formátuma nem megfelelő!",
                "email.unique" => "Az alábbi email címmel már regisztrálva van egy felhasználó!",
                "password.required" => "A jelszó megadása kötelező!",
                "password.min" => "A jelszó legalább 8 karakter kell legyen!",
                "password.numbers" => "A jelszónak tartalmaznia kell számot!",
                "password.letters" => "A jelszónak tartalmaznia kell betűt!",
                "password.mixed" => "A jelszónak tartalmaznia kis és nagybetűt is!",
                "password.symbols" => "A jelszónak tartalmaznia kell speciális karaktert!",
                "password.confirmed" => "A jelszónak és a megerősítő jelszónak meg kell egyeznie!",
            ]
        );

        $data = new User();
        $data->nev = $REQ->name;
        $data->email = $REQ->email;
        $data->password = Hash::make(value: $REQ->password);
        $data->save();
        return redirect(to: "/login");
    }

    public function Login(Request $REQ)
    {
        $REQ->validate(
            rules: ['*' => "required"]
        );

        if (
            Auth::attempt(credentials: ["email" => $REQ->email, "password" => $REQ->password])
        ) {
            return redirect(to: "/");
        } else {
            return redirect(to: "/login");
        }
    }

    public function Logout()
    {
        Auth::logout();
        return redirect(to: "/");
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Lotto;
use Illuminate\Http\Request;

class LottoController extends Controller
{
    public function evekLekerd()
    {
        return view(
            "welcome",
            ["result" => Lotto::all()->groupBy("ev")->keys()]
        );
    }

    public function evLekerd($ev)
    {
        return view(
            'huzasok',
            ['ev' => $ev],
            ['result' => Lotto::select('id', 'het')->where('ev', $ev)->get()]
        );
    }

    public function hetLekerd($id)
    {
        return view(
            'adatlap',
            ['result' => Lotto::where('id', $id)->get()]
        );
    }

    public function mikor()
    {
        return view(
            'mikor',
            ['result' => Lotto::select('id', 'ev', 'het', 'talalat5_db', 'talalat5_huf')->where('ev', '>', 1997)->where('talalat5_db', '>', 0)->get()],
            ['sv' => 1]
        );
    }

    public function random()
    {
        $randomNumbers = [];
        $i = 0;
        while ($i < 5) {
            $number  = random_int(1, 99);
            if (!in_array($number, $randomNumbers)) {
                $randomNumbers[$i] = $number;
                $i++;
            }
        }
        sort($randomNumbers);
        return view("random", ['result' => $randomNumbers]);
    }

    public function ujhuzasPost(Request $req)
    {
        $year = Lotto::select('ev')->orderBy('ev', 'desc')->first()->ev;
        $req->validate(
            [
                "ev" => "required|numeric|min:" . $year . "|max:" . date("Y"),
                "het" => "required|numeric|min:1|max:52",
                "szam1" => "required|numeric|min:1|max:99",
                "szam2" => "required|numeric|min:1|max:99",
                "szam3" => "required|numeric|min:1|max:99",
                "szam4" => "required|numeric|min:1|max:99",
                "szam5" => "required|numeric|min:1|max:99",
            ],
            [
                "ev.required" => "Az év megadása kötelező!",
                "ev.numeric" => "Az év csak szám lehet!",
                "ev.min" => "Az év nem lehet kisebb, mint " . $year . "!",
                "ev.max" => "Az év nem lehet nagyobb, mint " . date("Y") . "!",
                "het.required" => "A hét megadása kötelező!",
                "het.numeric" => "A hét csak szám lehet!",
                "het.min" => "A hét nem lehet kisebb, mint 1!",
                "het.max" => "A hét nem lehet nagyobb, mint 52!",
                "szam1.required" => "Az első szám megadása kötelező!",
                "szam1.numeric" => "Az első szám csak szám lehet!",
                "szam1.min" => "Az első szám nem lehet kisebb, mint 1!",
                "szam1.max" => "Az első szám nem lehet nagyobb, mint 99!",
                "szam2.required" => "A második szám megadása kötelező!",
                "szam2.numeric" => "A második szám csak szám lehet!",
                "szam2.min" => "A második szám nem lehet kisebb, mint 1!",
                "szam2.max" => "A második szám nem lehet nagyobb, mint 99!",
                "szam3.required" => "A harmadik szám megadása kötelező!",
                "szam3.numeric" => "A harmadik szám csak szám lehet!",
                "szam3.min" => "A harmadik szám nem lehet kisebb, mint 1!",
                "szam3.max" => "A harmadik szám nem lehet nagyobb, mint 99!",
                "szam4.required" => "A negyedik szám megadása kötelező!",
                "szam4.numeric" => "A negyedik szám csak szám lehet!",
                "szam4.min" => "A negyedik szám nem lehet kisebb, mint 1!",
                "szam4.max" => "A negyedik szám nem lehet nagyobb, mint 99!",
                "szam5.required" => "Az ötödik szám megadása kötelező!",
                "szam5.numeric" => "Az ötödik szám csak szám lehet!",
                "szam5.min" => "Az ötödik szám nem lehet kisebb, mint 1!",
                "szam5.max" => "Az ötödik szám nem lehet nagyobb, mint 99!",
            ]
        );

        $data = new Lotto;
        $data->id = Lotto::select('id')->orderBy('id', 'desc')->first()->id + 1;
        $data->ev = $req->ev;
        $data->het = $req->het;
        for ($i = 1; $i <= 5; $i++) {
            $data->{"szam" . $i} = $req->{"szam" . $i};
        }
        for ($i = 2; $i <= 5; $i++) {
            $data->{"talalat" . $i . "_huf"} = 0;
        }
        $data->save();
        return redirect('/')->with('success', 'Az adatok mentése sikeres!');
    }

    function nyeremenySzam($id)
    {
        return view('nyeremenySzam', ['result' => Lotto::where('id', $id)->get()]);
    }

    function nyeremenySzamData(Request $req)
    {
        $req->validate(
            [
                'szam1' => 'required|numeric|between:1,99|different:szam2,szam3,szam4,szam5',
                'szam2' => 'required|numeric|between:1,99|different:szam1,szam3,szam4,szam5',
                'szam3' => 'required|numeric|between:1,99|different:szam1,szam2,szam4,szam5',
                'szam4' => 'required|numeric|between:1,99|different:szam1,szam2,szam3,szam5',
                'szam5' => 'required|numeric|between:1,99|different:szam1,szam2,szam3,szam4',
            ],
            [
                "szam1.required" => "Az első szám megadása kötelező!",
                "szam1.numeric" => "Az első szám csak szám lehet!",
                "szam1.between" => "Az első szám csak 1 és 99 között lehet!",
                "szam1.different" => "Az első számnak különböző értéket kell tartalmaznia!",
                "szam2.required" => "A második szám megadása kötelező!",
                "szam2.numeric" => "A második szám csak szám lehet!",
                "szam2.between" => "A második szám csak 1 és 99 között lehet!",
                "szam2.different" => "A második számnak különböző értéket kell tartalmaznia!",
                "szam3.required" => "A harmadik szám megadása kötelező!",
                "szam3.numeric" => "A harmadik szám csak szám lehet!",
                "szam3.between" => "A harmadik szám csak 1 és 99 között lehet!",
                "szam3.different" => "A harmadik számnak különböző értéket kell tartalmaznia!",
                "szam4.required" => "A negyedik szám megadása kötelező!",
                "szam4.numeric" => "A negyedik szám csak szám lehet!",
                "szam4.between" => "A negyedik szám csak 1 és 99 között lehet!",
                "szam4.different" => "A negyedik számnak különböző értéket kell tartalmaznia!",
                "szam5.required" => "Az ötödik szám megadása kötelező!",
                "szam5.numeric" => "Az ötödik szám csak szám lehet!",
                "szam5.between" => "Az ötödik szám csak 1 és 99 között lehet!",
                "szam5.different" => "Az ötödik számnak különböző értéket kell tartalmaznia!",
            ]
        );
        $data = Lotto::find($req->id);
        $data->szam1 = $req->szam1;
        $data->szam2 = $req->szam2;
        $data->szam3 = $req->szam3;
        $data->szam4 = $req->szam4;
        $data->szam5 = $req->szam5;
        $data->save();
        return redirect('/')->with('success', 'Az adatok módoítása sikeres!');
    }

    function nyeremeny($id)
    {
        return view('nyeremeny', ['result' => Lotto::where('id', $id)->get()]);
    }

    function nyeremenyData(Request $req)
    {
        $req->validate(
            [
                'talalat2_db' => 'required|numeric|min:0',
                'talalat3_db' => 'required|numeric|min:0',
                'talalat4_db' => 'required|numeric|min:0',
                'talalat5_db' => 'required|numeric|min:0',
                'talalat5_huf' => 'required|numeric|min:0',
                'talalat4_huf' => 'required|numeric|min:0',
                'talalat3_huf' => 'required|numeric|min:0',
                'talalat2_huf' => 'required|numeric|min:0',
            ],
        );
        $data = Lotto::find($req->id);
        $data->talalat2_db = $req->talalat2_db;
        $data->talalat3_db = $req->talalat3_db;
        $data->talalat4_db = $req->talalat4_db;
        $data->talalat5_db = $req->talalat5_db;
        $data->talalat5_huf = $req->talalat5_huf;
        $data->talalat4_huf = $req->talalat4_huf;
        $data->talalat3_huf = $req->talalat3_huf;
        $data->talalat2_huf = $req->talalat2_huf;
        $data->save();
        return redirect('/')->with('success', 'Az adatok mentése sikeres!');
    }
}

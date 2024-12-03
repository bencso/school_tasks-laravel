<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telepules;

class TelepulesController extends Controller
{
    public function index()
    {
        $varosSzam = Telepules::where('jogallas', 'LIKE', '%város')->count();
        $nagyKozsegSzam = Telepules::where('jogallas', 'nagyközség')->count();
        $kozsegSzam = Telepules::where('jogallas',  'község')->count();
        return view('welcome', [
            'varosSzam' => $varosSzam,
            'nagyKozsegSzam' => $nagyKozsegSzam,
            'kozsegSzam' => $kozsegSzam
        ]);
    }

    public function all(){
        return view('all',[
            'results'=> Telepules::select('*')->paginate(100)
        ]);
    }

    public function abc(){
        $betuk=Telepules::selectRaw('LEFT(helyseg,1) as betu')->distinct()->get();
        $result = Telepules::select('*')
                    ->where('helyseg','LIKE','A%')
                    ->paginate(100);
        return view('abc', [
            'betuk'=>$betuk,
            "results"=>$result,
            "parameter"=>'A',
            "sv"=>1
        ]);
    }

    public function parameter($p){
        $betuk=Telepules::selectRaw('LEFT(helyseg,1) as betu')->distinct()->get();
        $result = Telepules::select('*')
                    ->where('helyseg','LIKE',$p.'%')
                    ->paginate(100);
        return view('abc', [
            'betuk'=>$betuk,
            "results"=>$result,
            "parameter"=>$p,
            "sv"=>1
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deelnemers as Deelnemers;

class HomeController extends Controller
{

    public function index()
    {

        $data = [
            "deelnemers" => Deelnemers::get_match()
        ];

        return view('home.home', $data);

    }

    public function refresh()
    {

    }


    public function vote(){

        //Request $request
        //dd(request('hot'));
        Deelnemers::vote(request()->all());
        return redirect()->route('home');

    }

}

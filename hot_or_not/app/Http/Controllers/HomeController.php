<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deelnemers as Deelnemers;
use Response;

class HomeController extends Controller
{

    public function index()
    {

        $data = [
            "deelnemers" => Deelnemers::get_match()
        ];

        return view('home.home', $data);

    }

    public function refresh( Request $request)
    {
        $data = "sup";
        return Response::json(Deelnemers::get_match());
    }


    public function vote(){

        //dd(request('hot'));
        Deelnemers::vote(request()->all());
        return redirect()->route('home');

    }

}

<?php

namespace App\Http\Controllers;

use App\Deelnemers as Deelnemers;
use Illuminate\Support\Facades\Input;

class LeaderboardController extends Controller
{
    public function index()
    {
        $data = [
            "deelnemers" => Deelnemers::get_leaderboard()
        ];

        return view("leaderboard.leaderboard", $data);
    }

    public function add()
    {
        return view("leaderboard.add");
    }

    public function upload()
    {
        if(Input::hasFile('file')){

            $file = Input::file('file');
            $file_name = Input::get('name') ."_" . microtime() . "_" . $file->getClientOriginalName();
            $file->move( 'img/candidates', $file_name);
            echo "<img src='/img/candidates/$file_name'>";

        } else {
            echo "no file";
        }

    }
}

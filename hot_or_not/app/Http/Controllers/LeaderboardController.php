<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

            echo 'uploaded';
        } else {
            echo "no file";
        }

    }
}

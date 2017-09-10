<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deelnemers as Deelnemers;

class LeaderboardController extends Controller
{
    public function index()
    {
        $data = [
            "deelnemers" => Deelnemers::get_leaderboard()
        ];

        return view("leaderboard.leaderboard",$data);
    }

    public function add()
    {
        return view("leaderboard.add");
    }
}

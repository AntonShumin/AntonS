<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deelnemers as Deelnemers;

class LeaderboardController extends Controller
{
    public function index()
    {
        $data = [];
        $data['deelnemers'] = Deelnemers::all();

        return view("leaderboard.leaderboard",$data);
    }
}

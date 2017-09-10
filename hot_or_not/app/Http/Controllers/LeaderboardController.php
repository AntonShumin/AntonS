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

    public function get_by_id($id)
    {

        $id = (int)$id;
        $data = [
            "deelnemers" => Deelnemers::get_leaderboard("id = $id")
        ];
        return view("leaderboard.leaderboard",$data);
    }

    public function add()
    {
        return view("leaderboard.add");
    }

    public function upload()
    {
        if (Input::hasFile('file')) {

            try {

                $file = Input::file('file');
                $name = Input::get('name');
                $index = Deelnemers::upload_picture($file, $name);
                return $this->get_by_id($index);

            } catch (\Exception $e) {

                route('add');

            }

        } else {
            echo route('add');
        }

    }
}

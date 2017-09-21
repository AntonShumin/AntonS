<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Imagecow\Image;
use DB;


class Deelnemers extends Model
{

    protected $fillable = array('name', 'filename'); //tegen de mass assignment exception https://laravel.com/docs/4.2/eloquent#mass-assignment
    public $test;

    //
    public static function get_match()
    {

        //set vars
        $row_count = self::get_rows();
        if (!$row_count) $row_count = self::set_default(); //fill db with default files

        //get picture index
        $index_array = self::get_pairs($row_count);

        //objecten ophalen op basis van id
        $deelnemers = self::where('id', $index_array[0])->orWhere('id', $index_array[1])->get();

        //elkaars tegenstanders toevoegen
        $deelnemers[0]->setAttribute('oponent_id', $index_array[1]);
        $deelnemers[1]->setAttribute('oponent_id', $index_array[0]);

        return $deelnemers;
    }

    public static function get_pairs($max_pictures)
    {
        //set vars
        $n = $max_pictures;
        $max_combinations = ($n * $n - $n) / 2;
        $x = self::get_diagonal_index($max_combinations);
        $index = 0;
        $max_diagonal = 0;


        if ($x > $max_combinations) exit("matrix index exceeds the scope");

        //loop through all diagonals
        do {
            $index++;
            $max_diagonal += $n - $index;

        } while ($x / $max_diagonal > 1);

        //set column and row
        $column = ($n - $index) - ($max_diagonal - $x);
        $row = $index + $column;

        //return
        return array($column, $row);

    }

    public static function set_default()
    {
        //get pic directory
        $pictures = scandir(public_path() . "/img/candidates", 1);

        //clear table indexes
        static::truncate();

        //create objects
        foreach ($pictures as $picture) {

            if (strlen($picture) > 4) {

                //transactie?
                Deelnemers::create([
                    'name' => ucfirst(substr($picture, 0, strpos($picture, '.'))),
                    'filename' => $picture
                ]);

            }
        }

        //return
        return self::get_rows();
    }

    public static function vote($request)
    {
        self::where('id', (int)$request['hot'])->increment('hot', 1);
        self::where('id', (int)$request['not'])->increment('not', 1);
    }

    public static function get_rows()
    {
        return static::count();
    }

    public static function get_diagonal_index($max_combinaties)
    {

        $index = app('session')->get('index', rand(0, $max_combinaties));
        $index++;
        if ($index > $max_combinaties) $index = 1;
        app('session')->put(['index' => $index]);

        //app('session')->save();
        //dd($index);

        //return
        return $index;

    }

    public static function get_leaderboard($condition = "id > 0")
    {

        //division by 0 fix met GREATEST(). Het werkte goed op localhost zonder, maar wie weet
        return Deelnemers::selectRaw((
        '*, deelnemers.hot/(GREATEST(deelnemers.hot+deelnemers.not, 1)) * 100 as sum'
        ))->whereRaw($condition)->orderby('sum', 'DESC')->get();

    }

    public static function upload_picture($file, $name)
    {

        //set vars
        $name = ucfirst($name);
        $file_name = $name . "_" . microtime() . '.jpg';

        //crop and save image
        Image::fromFile($file)
            ->resizeCrop(500, 500, 'center', 'middle')
            ->format('jpg')
            ->save("img/candidates/$file_name");

        //reset db index
        DB::statement('ALTER TABLE deelnemers AUTO_INCREMENT = 1');

        //create deelnemer
        $index = Deelnemers::create([
            'name' => $name,
            'filename' => $file_name
        ])->id;
        /* ook mogelijk
        $deelnemer = new Deelnemers();
        $deelnemer->insert(['name' => 'iets']);
        */

        //clear session
        app('session')->forget('index');

        //return
        return $index;

    }
    public function test(){

    }


}

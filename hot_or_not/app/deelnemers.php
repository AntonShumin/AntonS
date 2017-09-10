<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deelnemers extends Model
{

    protected $fillable = array('name', 'filename'); //tegen de mass assignment exception https://laravel.com/docs/4.2/eloquent#mass-assignment

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
        //app('session')->forget('index');
        $index = app('session')->get('index', rand(0,$max_combinaties));
        $index++;
        if($index > $max_combinaties) $index = 1;
        app('session')->put( ['index' => $index] );

        //app('session')->save();
        //dd($index);

        //return
        return $index;

    }


}

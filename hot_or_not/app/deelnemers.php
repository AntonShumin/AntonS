<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deelnemers extends Model
{

    protected $fillable = array('name', 'filename'); //tegen de mass assignment exception https://laravel.com/docs/4.2/eloquent#mass-assignment
    public $oponent_id;

    //
    public static function get_match()
    {

        //set vars
        $row_count = self::get_rows();
        if (!$row_count) $row_count = self::set_default(); //fill db with default files
        $desired_position = rand(1, $row_count);

        //get picture index
        $index_array = self::get_pairs($row_count, $desired_position);

        //objecten ophalen op basis van id
        $deelnemers = self::where('id', $index_array[0])->orWhere('id', $index_array[1])->get();

        //elkaars tegenstanders toevoegen
        $deelnemers[0]->oponent_id = $index_array[1];
        $deelnemers[1]->oponent_id = $index_array[0];

        return $deelnemers;
    }

    public static function get_pairs($max_pictures, $diagonal_position)
    {
        //set vars
        $n = $max_pictures;
        $x = $diagonal_position;
        $index = 0;
        $max_diagonal = 0;

        //x kan nooit meer zijn dan het maximum aantal combinaties
        $max_combinations = ($n * $n - $n) / 2;
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
                    'name' => substr($picture, 0, strpos($picture, '.')),
                    'filename' => $picture
                ]);

            }
        }

        //return
        return self::get_rows();
    }

    public static function vote($request)
    {
        self::where('id', (int)$request['hot'])->increment('hot',1);
        self::where('id', (int)$request['not'])->increment('not',1);
    }

    public static function get_rows()
    {
        return static::count();
    }


}

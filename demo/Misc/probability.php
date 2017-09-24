<?php

class Wheel
{
    private static $probability = [0, 500, 200, 50, 5];

    public function turn_wheel()
    {

        $seed = mt_rand (1, 1000);
        var_dump($seed);
        $max = 0;
        $min = 0;
        $result = 0;

        for ($i = 1; $i < count(static::$probability); $i++) {

            $max += static::$probability[$i];
            $min += static::$probability[$i - 1];

            if ($seed > $min && $seed <= $max) {

                $result = $i;

            }

        }

        return $result;

    }

}

$obj = new Wheel();
var_dump($obj->turn_wheel());
<?php

//global vars
$rotations_count = 0;
$biggest_array = [0, 0];


function read_file($filename)
{


    if (file_exists($filename)) {

        $handle = fopen($filename, "r");

        if ($handle) {

            $nr_sections = fgets($handle);
            $sections = [];

            while (!feof($handle)) {

                $line = fgets($handle);
                $sections[] = explode(",", $line);

                if (!is_numeric($line[0])) {
                    process_section($sections);
                    $sections = [];
                }

            }

            fclose($handle);

            return $nr_sections;

        }

    } else {

        exit("file not found");

    }

}


function process_section($array)
{

    global $biggest_array;

    //preset vars
    $section_dimention = array_shift($array);
    $section_modifier = array_pop($array);
    $iterations = substr($section_modifier[0], 1) % 4;
    $clockwise = $section_modifier[0][0] == 'R' ? true : false;
    if ($section_dimention[0] + $section_dimention[1] > $biggest_array[0] + $biggest_array[1]) $biggest_array = $section_dimention;

    //functions
    $rotated_array = rotate($clockwise, $array, $iterations);


    save($rotated_array, implode(",", $section_dimention), $section_modifier[0]);

}

function rotate($clockwise, $array, $iterations)
{

    global $rotations_count;

    //right or left rotation
    $rotation = $clockwise ? array(-1 => null) + array_reverse($array) : array(-1 => null) + array_map('array_reverse', $array);

    for ($i = 1; $i <= $iterations; $i++) {

        //count rotations
        if ($clockwise) $rotations_count++;

        //rotate matrix
        $array = call_user_func_array(
            'array_map',
            $rotation

        );

    }

    return $array;


}

function save($array, $dimensions, $modifier)
{
    global $db;

    $serialized = serialize($array);

    $sql = "INSERT INTO results (matrix,dimensions,modifier) VALUES('$serialized','$dimensions','$modifier')";
    $db->exec($sql);


}
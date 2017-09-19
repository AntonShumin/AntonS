<?php

require_once ('functions.php');

//set vars
$db = new SQLite3('db.sqlite');
$filename = "file.txt";

//run
$nr_sections = read_file($filename);

//result
echo "Performed $rotations_count right rotations from $nr_sections sections<br>";
echo "Biggest array is $biggest_array[0] x $biggest_array[1]";


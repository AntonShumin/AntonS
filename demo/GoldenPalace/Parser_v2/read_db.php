<?php

require_once('functions.php');

$db = new SQLite3('db.sqlite');

$results = $db->query('SELECT matrix,dimensions,modifier FROM results');

while ($row = $results->fetchArray()) {


    //get matrix from db
    $array = unserialize($row['matrix']);

    //calculate rotation
    $clockwise =$row['modifier'][0]  == 'R' ? false : true; //reversed
    $iterations = substr($row['modifier'], 1) % 4;

    //rotate revert matrix
    $array = rotate($clockwise,$array,$iterations);

    //output

    echo "dimensions " . $row['dimensions'] . "<br>";

    foreach ($array  as $line ){
        echo implode(',',$line) .  "<br>";
    }

    echo "modifier " . $row['modifier'] . "<br>";



}


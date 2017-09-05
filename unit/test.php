<?php

//set vars
$n = 5;
$index = 0;
$max_diagonal = 0;

$x = 1;

//x kan nooit meer zijn dan het maximum aantal combinaties
$max_combinations = ($n * $n - $n) / 2;
if ($x > $max_combinations) exit("matrix index exceeds the scope");

do {
    $index++;
    $max_diagonal += $n - $index;

} while ($x / $max_diagonal > 1);

$log = array(
    "diagonal length" => $n - $index,
    "x" => $x,
    "max diag" => $max_diagonal,
    "column" => ($n - $index) - ($max_diagonal - $x),
    "row" => $index + ($n - $index) - ($max_diagonal - $x)
);

var_dump($log);
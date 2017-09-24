<?php

$json = file_get_contents('http://localhost:8000/form');
$obj = json_decode($json);
var_dump($obj);
<?php

class People {

    protected $parent_number = 5;

}

class Person extends People{

    private $number = 1;


    public function count(){
        return $this->number + $this->parent_number;
    }

}

$person = new Person();
echo $person->count();
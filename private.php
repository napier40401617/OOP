<?php

class Animal{

    private $name = 'Aung Net';

    public function tname($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }



}


class Dog extends Animal{


}


$obj = new Animal;
$obj->tname('Gote Kyar');
echo $obj->getName();
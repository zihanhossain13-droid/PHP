<?php

class Animal{
    public function sound(){
        return "Animal Sound";
    }
}

class Dog extends Animal{
    public function sound(){
        return parent::sound() . " + DOG BARKS";
    }
}

$obj = new Dog();
$output = $obj->sound();

echo $output;
?>
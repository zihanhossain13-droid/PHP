<?php

class Animal{
    final public function sound(){
        return "Animal Sound";
    }
}

class Dog extends Animal{
}

$obj = new Dog();
$output = $obj->sound();

echo $output;
?>
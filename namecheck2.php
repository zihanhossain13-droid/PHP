<?php

function isValidName(string $name): bool
{
    if (preg_match("/^[a-zA-Z]+$/", $name)) {
        return true;
    } else {
        return false;
    }
}

$result = isValidName("Zihan");

var_dump($result);

?>
<?php
$age = 22;
$hasId = true;
$marks = 65;

if ($age >= 18) {

    if ($hasId == true) {

        if ($marks >= 70) {
            echo "Eligible";
        } else {
            echo "Marks too low";
        }

    } else {
        echo "ID required";
    }

} else {
    echo "Underage";
}
?>
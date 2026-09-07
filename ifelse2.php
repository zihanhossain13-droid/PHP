<?php
$marks = 82;
$attendance = 68;

if ($marks >= 80 && $attendance >= 75) {
    echo "A+";
} elseif ($marks >= 80 && $attendance >= 60) {
    echo "A";
} elseif ($marks >= 70 && $attendance >= 60) {
    echo "B";
} else {
    echo "Fail";
}
?>
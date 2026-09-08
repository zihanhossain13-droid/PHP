<?php

if (file_exists("data.txt")) {
    unlink("data.txt");
    echo "File deleted";
} else {
    echo "File not found";
}

?>
<?php
$string = $_POST['string'];

function daLiJePalindrom($string) {

    $string = str_replace(' ', '', $string);


    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);


    $string = strtolower($string);

    $reverse = strrev($string);

    if ($string == $reverse) {
        echo "String je Palindrom!";
    }
    else {
        echo "String nije Palindrom!";
    }
}

daLiJePalindrom($string);

?>
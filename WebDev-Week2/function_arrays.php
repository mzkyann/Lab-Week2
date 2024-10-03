<?php 

function greet($name) {
    return "Halo, " . $name . "!";
}

$students = ["Piang", "Franklin", "Excel", "Apryadi", "Ryan"];

foreach ($students as $name){
    echo greet($name) . "<br>";
}
?>
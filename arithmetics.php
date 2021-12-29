<?php

$start = 2;
$stop = 400;

$mod = 7;

if ($start % $mod != 0) {
    for ($i = $start; $i % $mod != 0; $i++) {
        //echo $i."<br>";
    }
    //echo $i;
    for ($a = $i; $a < $stop; $a = $a + $mod) {
        echo $a . "<br>";
    }
} else {
    for ($b = $start; $b < $stop; $b = $b + $mod) {
        echo $b . "<br>";
    }
}

?>

<?php

$start = 1;
$stop = 25;

while ($start < $stop) {
    $start++;

    if ($start % 2 == 0) {
        echo $start . " is even<br>";
    } else {
        echo $start . " is odd<br>";
    }
}

$number = range(0, 5);
print_r($number);

$number2 = range(0, 15, 2);
print_r($number2);

?>

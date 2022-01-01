<?php

$numbers = 2;
$exponential = 5;

$res = 1;

for ($i = 0; $i < $exponential; $i++) {
    $res = $numbers * $res;

    echo $res . "<br>";
}
//echo $res;

?>

<?php

$base = 2;
$power = 5;

$result = 1;

for ($i = 0; $i < $power; $i++) {
    $result = $base * $result;

    //echo $result . "<br>";
}
echo $result;

?>

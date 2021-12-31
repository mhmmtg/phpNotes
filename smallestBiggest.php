<?php

$numbers = array(12, 43, 6, 88, 9, 65);

$biggest = 0;
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] > $biggest) {
        $biggest = $numbers[$i];
    }
}
echo $biggest;


?>

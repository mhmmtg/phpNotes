<?php

$number = 36;

$sqrRoot = 1;
for ($i = 1; $sqrRoot < $number; $i++) {
    $sqrRoot = $i * $i;
    //echo $sqrRoot."<br>";
}

if ($sqrRoot == $number) {
    echo $sqrRoot / ($i - 1);
} 
else {
    echo "not a square";
}


$root = $number / 3;
for ($i = 0; $i < 32; $i++) {
    $root = ($root + ($number / $root)) / 2;
    echo $root . "<br>";
}

// r    n
// 27 = 81 / 3;

// r2   r1    n  r1
// 15 = (27 + (81/27)) / 2;

// r3	   r2    n  r2
// 10.2 = (15 + (81/15)) / 2

echo $root;


?>

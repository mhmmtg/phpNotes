<?php

$number = 5;
$factorial = 1;

for ($i = 2; $i <= $number; $i++){
    $factorial = $factorial * $i;

    // 2   = 1 * 2
    // 6   = 2 * 3
    // 24  = 6 * 4
    // 120 = 24 * 5
    
    //echo $factorial."<br>";  
}
echo $factorial;



$number = 5;
//$fact = 1;

for ($i=$number-1; $i>1; $i--){
    $number = $number * $i;

    // 20 = 5 * 4
    // 60 = 20 * 3
    // 120 = 60 * 2
    
    //echo $number ."*". $i."<br>";
    //echo $number."<br>";   
}
echo $number;



$fact = 1;
$start = 3;
$stop = 6;

$prog = $start;

for ($a = $prog; $a < $stop; $a++) {
    for ($i = $prog; $i > 1; $i--) {
        $fact = $i * $fact;

        //echo $i."<br>";
    }

    echo $fact . "<br>";
    $fact = 1;
    $prog++;
}


?>

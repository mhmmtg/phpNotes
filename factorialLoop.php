<?php

$number = 5;

$factorial = 1;
for ($i = 2;$i <= $number;$i++)
{
    $factorial = $factorial * $i;

    // 2   = 1 * 2
    // 6   = 2 * 3
    // 24  = 6 * 4
    // 120 = 24 * 5
    

    //echo $factorial."<br>";
    
}
echo $factorial;
?>

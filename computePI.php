<?php

$piPlus = 1;
$piMinus = 1.0 / 3;

for ($i = 4; $i < 100; $i += 4) {
    $piPlus = $piPlus + 1.0 / ($i + 1); // 1 + 1/5...
    $piMinus = $piMinus + 1.0 / ($i + 3); // 1/3 + 1/7...
}
echo $piPlus . "<br>";
echo $piMinus . "<br>";
echo 4 * ($piPlus - $piMinus);

?>

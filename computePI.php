<?php

$piPlus = 1;
$piMinus = 1 / 3;

$attempts = 500;

for ($i = 4; $i < $attempts; $i += 4) {
    $piPlus = $piPlus + 1 / ($i + 1); // 1 + 1/5...
    $piMinus = $piMinus + 1 / ($i + 3); // 1/3 + 1/7...
}
$approximatePI = 4 * ($piPlus - $piMinus);
echo $approximatePI;

?>

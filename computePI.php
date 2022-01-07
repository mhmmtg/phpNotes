<?php

$piPlus = 1;
$piMinus = 1.0 / 3;

$attempt = 500;

for ($i = 4; $i < $attempt; $i += 4) {
    $piPlus = $piPlus + 1.0 / ($i + 1); // 1 + 1/5...
    $piMinus = $piMinus + 1.0 / ($i + 3); // 1/3 + 1/7...
}
echo 4 * ($piPlus - $piMinus);

?>

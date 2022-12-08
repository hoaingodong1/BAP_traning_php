<?php
function isPrimeNumber($n) {
    if ($n < 2) {
        return false;
    }
    $squareRoot = sqrt ( $n );
    for($i = 2; $i <= $squareRoot; $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
$total=0;
for($i = 0; $i < 100; $i ++) {
    if (isPrimeNumber ( $i )) {
        $total+=$i;
    }
}
echo $total;
?>
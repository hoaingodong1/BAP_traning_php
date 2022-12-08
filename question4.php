<?php
function roots($a, $b, $c)
{
    $D = $b * $b - 4 * $a * $c;
    if ($D >= 0) {
        $x1 = (-$b + sqrt($D)) / (2 * $a);
        $x2 = (-$b - sqrt($D)) / (2 * $a);
        echo "Roots are: $x1, $x2 \n";
    } else {
        $x1 = -$b / (2 * $a);
        $x2 = sqrt(-$D) / (2 * $a);
        echo "Roots are: $x1 ± $x2 i \n";
    }
}


roots(6,58,10);


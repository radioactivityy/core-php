<?php
// parameter
function add($a, $b) {
    return $a + $b;
}
// argument is actual values you are passing
echo add(1, 2);


function addAll(...$args)
{
    $total = 0;
    foreach ($args as $arg) {
        $total += $arg;

    }
    return $total;
}
echo "<br>";
echo addAll(1, 2, 4, 5, 6)  ;
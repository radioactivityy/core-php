<?php
#arrow function
$add = fn  ($a, $b) => $a + $b;

//echo $add(1,2 );

$nums = [1,2,3];
// callback and arrow func
$squaredNumbers = array_map(fn ($number) => $number * $number, $nums);


print_r($squaredNumbers);
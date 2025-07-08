<?php

$num = [1, 2, 3];
var_dump($num);
$num[] = 5;
array_push($num, 4);


$num[0] = 6;
var_dump($num);

unset($num[0]);
var_dump($num);
$nums = array_values($num);
var_dump($nums);
?>
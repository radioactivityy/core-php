<?php

class Math
{
    public static $pi = 3.14;

    public static function add(...$nums) {
        return array_sum($nums);
    }
}
echo Math::$pi * Math::$pi;
echo "<br>";
echo Math::add(2,3,4);
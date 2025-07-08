<?php

declare(strict_types=1);

function addNum(int $a, int $b): int{
    return $a + $b;
}

echo addNum(1,2);

function sayHello(string $name): void{

    echo "Hello  $name";
}
sayHello("John");
echo addNum(1,2);
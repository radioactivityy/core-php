<?php

//global scope

$name = 'Alice';

function sayHello() {
//    local scope
    global $name;
//we can change the global var within our function
    $name = 'Bob';
    echo "Hello" . "<br>" .$name;
}
sayHello();
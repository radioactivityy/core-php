<?php
define('APP_NAME','My App');
define('APP_VERSION','1.0.0');

//const usually will be config values.as you can see we didnt need
// to use global to use inside of our function

// you cannot reassign a constant

const DB_NAME = ' mydb';
const DB_HOST = 'localhost';


function run() {
    echo APP_NAME;
    echo "<br>";
    echo APP_VERSION;
    echo"<br>";
    echo DB_NAME, DB_HOST;
}
run();
<?php

//$num = 1;
//
//while ($num < 10) {
//    if ($num % 2 == 0) {
//        echo $num . ' is even <br>';
//    } else {
//        echo $num . ' is not even <br>';
//    }
//    $num++;
//}

for($i = 0; $i < 10; $i++) {
    if ($i == 5){
        continue;
    }
    echo $i . '<br>';
}
$studentGrades = array(
    'John' => 76,
    'Jim' => 78,
    'Peter' => 90,
);

foreach ($studentGrades as $name => $grade) {
    if($grade > 78) {
        echo $name . '<br>';
    }
}
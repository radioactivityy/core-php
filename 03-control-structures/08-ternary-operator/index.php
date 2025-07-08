<!--Condition (Condition to check) ? Expression1 : (If True) : Expression2 (If False)
-->
<?php

$score = 50;

if($score > 40) {
    echo 'High score';
} else {
    echo 'Low score';
}
$result = $score > 40 ? "True" : "False";
echo "<p>$result</p>";
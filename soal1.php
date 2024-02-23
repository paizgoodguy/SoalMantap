<?php

$numb = array(1, 2, 3, 4, 5);
$range = 3;


for ($x = 1; $x <= $range; $x++) {
    $initial = $numb[0];
    array_push($numb, $initial);
    array_splice($numb, 0,1);
};

print_r($numb);

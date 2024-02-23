<?php


$resultMantap = mantap(6);
$realHasil = array();


for ($i = 0; $i < count($resultMantap); $i++) {
    if ($i % 2 == 0) {
        for ( $j = 0; $j <= count($resultMantap[$i]) - 1; $j++) {
            array_push($realHasil, $resultMantap[$i][$j]);
        }
    }

 else if ($i % 2 != 0) {
        for ($j = count($resultMantap[$i]) - 1; $j >= 0; $j--) {
            array_push($realHasil, $resultMantap[$i][$j]);
        }
    }
}

function mantap($paramMantap)
{
    $pangkatMantap = $paramMantap * $paramMantap;
    $x = $pangkatMantap - 1;
    $arraymantap = range(0, $x);
    $hasilMantap = array();
    for ($i = 1; $i <= $paramMantap; $i++) {
        $y = $paramMantap * $i - 1;
        $z = $paramMantap * ($i - 1);
        $belumMantap[$i] = range($z, $y);
        array_push($hasilMantap, $belumMantap[$i]);
    };
    return $hasilMantap;
};

print_r($realHasil);

 ?>
<?php 

$ingput = array(1,2,5,1243,3,31,2);
$temp = array();
$final = array();

$tempValue = count($temp);

for ($i = 0; $i < count($ingput); $i++){

    $next = $ingput[$i+1];
    if ($ingput[$i] >= $next ){
        array_push($temp, $ingput[$i]);
    }
    else if ( $ingput[$i] < $next  ) continue; {
        $tempFinal = array_replace($final, $temp);
        $newFinal = $tempFinal;
        // $newFinalValue = count($newFinal);
        $finalValue = count($newFinal);
    }

}; 


print_r($finalValue);

echo $finalValue;


// if ($tempValue > $finalValue){
//     continue;
//     array_replace($final, $temp);
// }

// for ($j = 0; $j < range(0, count($ingput)); $j++){

// };
?>
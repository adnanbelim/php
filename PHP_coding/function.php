<?php

function total($marks){
    $sum = 0;
    foreach($marks as $value){
        $sum += $value;
    }

    return $sum;
}
/*first method to print*/ 
// $adnan = [35,65,85];

// $totalmarks = total($adnan);

// echo $totalmarks;

/*second method to print*/

$adnan = [10,20,20];

echo total($adnan);




?>
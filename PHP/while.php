<?php

// $amount = 1000;
// $year = 0;

// while($amount < 2000){
//     $year++;
//     $amount = $amount*1.05;
// }

// echo $year.'年';

$num = 0;

while($num < 10){
    
    $score = rand(1,100);
    if($score >= 60){
        echo $num.'回目：'.$score.'（合格）'.'<br>';
    }else{
        echo $num.'回目：'.$score.'<br>';
    }
    $num++;
}

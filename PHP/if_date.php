<?php

date_default_timezone_set('Asia/Tokyo');
$week = ['日','月','火','水','木','金','土'];
$weekday = $week[date('w')];
echo date('w');

// switch($pref){
//  case 'tokyo':
//  case 'kyoto':
//  echo 'city';
//  break;
// }

switch($weekday){
    case '日';
    echo $weekday.'曜日';
    break;

    case '月';
    echo $weekday.'曜日';
    break;

    case '火';
    echo $weekday.'曜日';
    break;

    case '水';
    echo $weekday.'曜日';
    break;

    case '木';
    echo $weekday.'曜日';
    break;

    case '金';
    echo $weekday.'曜日';
    break;

    case '土';
    echo '土曜日';
    break;
}
//date_default_timezone_set('Asia/Tokyo');
//echo date('Y-m-d H:i:s');
// $month = date('m');
// echo $month.'<br>';

//  if($month >= 3 && $month <= 5 ){
//     echo $month.'月は春です。';
//  }else if($month >= 6 && $month <= 8 ){
//     echo $month.'月は夏です。';
//  }else if($month >= 9 && $month <= 11 ){
//     echo $month.'月は秋です。';
//  }else if($month >= 12 && $month <= 2 ){
//     echo $month.'月は冬です。';
//  }
// $line = 30;
// $math = rand(0,100);
// $english = rand(0,100);
// $science = rand(0,100);

// echo '数学は'.$math.'点です。<br>';
// echo '英語は'.$english.'点です。<br>';
// echo '理科は'.$science.'点です。<br>';


//  if($line > $math || $line > $english || $line > $science){
//     if($math < 30){
//     echo '数学が30点未満です。<br>';
//    }else if($english < 30){
//     echo '英語が30点未満です。<br>';
//    }else if($science < 30){
//     echo '理科が30点未満です。<br>';
//    }
//     echo '不合格';
//  }else{
//    if($math == 100){
//     echo '数学が100点です。<br>';
//    }else if($english == 100){
//     echo '英語が100点です。<br>';
//    }else if($science == 100){
//     echo '理科が100点です。<br>';
//    }
//     echo '合格';
//  }
// if(!($line < $math && $line < $english && $line < $science)){
//     echo '不合格';
// }
// if($line > $score){
//     echo '赤点';
// }
// elseif($score == 100){
//     echo '満点';
// }else{
//     echo '合格';
// }
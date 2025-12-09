<?php

// $str = 'example@gmail.com';
// echo strstr($str,'@',true);
// echo '<br>';

// $st = 'TECH I.S.&テックアイエス';
// echo strstr($st,'&',true);

// $str = 'example@gmail.com';
// echo substr($str,0,strpos($str,'@'));
// echo '<br>';

// $st = 'TECH I.S.&テックアイエス';
// echo substr($st,0,strpos($st,'&'));

// echo strlen(substr($str,0,strpos($str,'@')));
// echo strlen(substr($st,0,strpos($st,'&')));

// $result = array(
//     '太郎'=>"2位",
//     '次郎'=>"4位",
//     '三郎'=>"1位",
//     '四郎'=>"3位"
// );
//  asort($result);
//  print_r($result);
//下の奴は数字しか抽出できてない
//  foreach ($result as $key => $val){
//      $number[$key] = (int)preg_replace('/\D/','',$val);
//  }
//   asort($number);
//   print_r($number);

function sayhello($name){
    return $name.'さん、こんにちは';
}

echo sayhello('工藤');
<?php
define('GREETING','こんにちは');

$string = "aaa";
$integer = 200;
$bool = true;
$float = 1.5;

$today =date('Y年m月d日');
// echo "りんごが$num 個あります";
// echo '今日は'.$month.'月'.$day.'日'.'です。';
//echo "<br>";

echo '$string:'."\n";
var_dump( $string );
echo "\n"; 

echo '$integer:'."\n";
var_dump( $integer );
echo "\n";

echo '$bool:'."\n";
var_dump( $bool );
echo "\n"; 

echo '$float:'."\n";
var_dump( $float );
echo "\n"; 
// $msg = <<< EOD
// おっすおら悟空！
// 今日は、{$today}です。
// "Let's Start's!"
// EOD;
// echo $msg;


?>
<!-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo GREETING;
    ?>
</body>
</html> -->
<?php
// $loop_max = 10;
// $count = 0;

// while( $count < 100 ){
//     echo "{$count}\n";
//     $count ++;
//     if( $count == $loop_max ){
//         break;
//     }
// }
// echo "\n";
// echo "処理終了";

// $skip = 10;
// $count = 0;

// while( $count < 100 ){
    
//     if( $count == $skip ){
//         $count ++;
//         continue;
//     }
//     echo "{$count}.\n";
//     $count ++;
// }
// echo "\n";
// echo "処理終了";

// $loop_max = 45;

// for($num = 1; $num <= 50; $num++){
//     if($num == 10 || $num ==20){
//         continue;
//     }
//     else if($num%8 == 0){
//         continue;
//     }
//     else if($num == 45){
//         break;
//     }
//     echo $num."<br>";
// }
// echo '<br>';
// echo '処理終了';

// $score = rand(0,100);

// for($i = 1; $i <= 10; $i++){
//     $score = rand(0,100);
//     echo $i.'回目：'.$score.'<br>';

//     if($score >= 60){
//         echo '合格です！';
//         break;
//     }
   
// }


?>

<?php
$start = 0;
$end = 20;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzzGame</title>
</head>
<body>
    <h1>FizzBuzzGame</h1>
    <p>開始の数字：<?php echo $start; ?></p>
    <p>終了の数字：<?php echo $end; ?></p>
    <?php for($i = $start; $i <= $end; $i++): ?>
        
        <?php if($i % 3 == 0 && $i % 5 == 0): ?>
            <?php echo 'FizzBuzz<br>'; ?>
        <?php elseif($i%3 == 0): ?>
            <?php echo 'Fizz'.'<br>'; ?>
        <?php elseif($i%5 == 0): ?>
            <?php echo 'Buzz'.'<br>'; ?>
        <?php else: ?>
            <?php echo $i.'<br>'; ?>
        <?php endif; ?>
    <?php endfor; ?>
</body>
</html>

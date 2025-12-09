
<?php
//$amount = 1000;

//for($year = 0; $year < 10; $year++){
//    $amount *= 1.05;
//}

//echo $amount;  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    //<?php $k = 1; ?>
    <?php for($i = 1; $i <10; $i++): ?>
         <?php for($j = 1; $j <10; $j++): ?>
            <?php $k = $i * $j; ?>
         <p><?php echo $i.'×'.$j.'='.$k.'<br>'; ?></p>
         <?php endfor; ?>
    <?php endfor; ?>
   
</body>
</html>
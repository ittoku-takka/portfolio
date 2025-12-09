 <?php
    
$result = 0;
$dentaku1 = 0;
$dentaku2 = 0;
$hugou = "+";
   if( isset($_POST["dentaku1"]) && isset($_POST["hugou"]) && isset($_POST["dentaku2"]) ){
      print_r($_POST);
      $dentaku1 = $_POST['dentaku1'];
      $dentaku2 = $_POST['dentaku2'];
      $hugou = $_POST['hugou'];
    }else{
        $dentaku1 = 0;
        $dentaku2 = 0;
        $hugou = "+";
    }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>電卓プログラム</title>
     
</head>
<body>
    <header>
       <h1> 電卓</h1>
    </header>
  
    
    <form action="" method="post" >
        <p> 
        <input type="number" name ="dentaku1" id="" value="<?= $dentaku1; ?>" >
        <select name="hugou">
                <option value="+" selected>+</option>
                <option value="-" >-</option>
                <option value="*">×</option>
                <option value="/">÷</option>
        </select>
         <input type="number" name ="dentaku2" id="" value="<?= $dentaku2; ?>" >
          <!-- <input type="text" name ="dentaku2" id="" value="<?php echo htmlspecialchars($dentaku2); ?>" multiple> -->
         <input type="submit" value="送信">
        </P>
    </form>
<?php if ($dentaku1 === null || $hugou === null|| $dentaku2 === null): ?>
        <p>計算式を入れてください。</p>
<?php elseif($hugou == "/" && $dentaku2 == 0): ?>
        <b>計算不可</b>
<?php else: ?>
     <?php 
        $formula = "$dentaku1 $hugou $dentaku2";
        $result = eval("return $formula;");
        echo  $dentaku1." ".$hugou." ".$dentaku2." = ".$result;
     ?>
<?php endif; ?>

</body>
</html> 

<!-- <?php
$res = "";
$errorflg = 0;
$num1 = 0;
$num2 = 0;
$fugou = "+";

if( isset($_POST["target1"]) && isset($_POST["fugou"]) && isset($_POST["target2"]) ){
    $num1 = $_POST["target1"];
    $num2 = $_POST["target2"];
    $fugou = $_POST["fugou"];

    if($num2 == 0 && $fugou == "÷"){
        $errorflg = 1;
    }

    if($errorflg == 0){
        switch($fugou){
            case "+":
                $work = $num1 + $num2;
                break;
            case "-":
                $work = $num1 - $num2;
                break;
             case "×":
                $work = $num1 * $num2;
                break;
            case "÷":
                $work = $num1 / $num2;
                break;
            default:
                $work = "異常";
                break;    
            }
    }else{
        $work = "計算不可";
    }
    $res = $num1." ".$fugou." ".$num2." = ".$work;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>電卓アプリ</title>
</head>
<body>
    <main>
        <h1>電卓</h1>
        <div>
            <form action="#" method ="post">
                 <input type="number" name="target1" value="<?= $num1; ?>">
                 <select name="fugou" >
                    <option value="+" <?php if($fugou == "+"){echo "selected";} ?>>+</option>
                    <option value="-" <?php if($fugou == "-"){echo "selected";} ?>>-</option>  
                    <option value="×" <?php if($fugou == "×"){echo "selected";} ?>>×</option>  
                    <option value="÷" <?php if($fugou == "÷"){echo "selected";} ?>>÷</option>     
                 </select>
                 <input type="number" name="target2" value="<?= $num2; ?>">
                 <button type="submit" >送信</button>
            </form>


        </div>
        <p><?= $res ?></p>
    </main>
    
</body>
</html> -->
 <!-- <?php
    
    if(isset($_POST)){
      print_r($_POST);
      $YMD = $_POST['YMD'];
    }else{
        $YMD = null;
    }
   
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>曜日判定プログラム</title>
     
</head>
<body>
    <header>
       <h1> 曜日判定</h1>
    </header>
     <p>
        日付を選んでください。
    </p>
    
    <form action="" method="post" >
        <p> 
         <input type="date" name ="YMD" id="" value="年/月/日" multiple>
         <input type="submit" value="送信">
        </P>
    </form>
<?php if ($YMD === null): ?>
        <p>日付を入れてください。</p>
<?php else: ?>
     <?php $timestamp = strtotime($YMD);
            $week = ['日', '月', '火', '水', '木', '金', '土'];
            echo $week[date('w', $timestamp)].'曜日';
     ?>
<?php endif; ?>
</body>
</html> -->

<!-- （TECH I.S.解答例） -->
 <?php
 $res = "";
 $val = "";
 if(isset($_POST["target"])){
    $val = $_POST["target"];
    $week = date("w", strtotime($_POST["target"]));
    switch($week){
        case 0:
            $res = "日曜日";
        break;
        case 1:
            $res = "月曜日";
        break;
        case 2:
            $res = "火曜日";
        break;
        case 3:
            $res = "水曜日";
        break;
        case 4:
            $res = "木曜日";
        break;
        case 5:
            $res = "金曜日";
        break;
        case 6:
            $res = "土曜日";
        break;


    }

 }
?>

 <!DOCTYPE html>
 <html lang="ja">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>曜日判定プログラム</title>
 </head>
 <body>
    <main>
        <h1>曜日判定</h1>
        日付を選んでください
        <div>
            <form action="#" method ="post">
                <input type="date" name="target" value="<?= $val ?>">
                <button type="submit" >送信</button>
                <!-- <button type="submit" class="send-button">送信</button> -->
            </form>
        </div>
        <p><?= $res ?></p>
    </main>
    
 </body>
 </html>

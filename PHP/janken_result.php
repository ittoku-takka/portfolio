 <!-- <?php
    
    if(isset($_POST)){
      print_r($_POST);
      $user = $_POST['janken'];
    }else{
        $user = null;
    }
    $HANDS = ['グー','チョキ','パー'];
    $index = array_rand($HANDS);
    echo $PC = $HANDS[$index];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>結果は・・・</title>
</head>
<body>
    <h1>結果は・・・</h1>
    <?php if ($user === null): ?>
        <p>フォームから手を選んでください。</p>
        
    <?php elseif ($_POST['janken'] == $PC): ?>
        <b>引き分け!</b>
        <p>あなた：<?php echo $user; ?></p>
        <p>コンピュータ：<?php echo $PC; ?></p>
    <?php elseif ($_POST['janken'] =='グー' && $PC == 'パー'): ?>
        <p><b>負け!</b></p>
        <p>あなた：グー</p>
        <p>コンピュータ：パー</p>
    <?php elseif ($_POST['janken'] =='グー' && $PC == 'チョキ'): ?>
        <p><b>勝ち!</b></p>
        <p>あなた：グー</p>
        <p>コンピュータ：チョキ</p>
    <?php elseif ($_POST['janken'] =='チョキ' && $PC == 'パー'): ?>
        <p><b>勝ち!</b></p>
        <p>あなた：チョキ</p>
        <p>コンピュータ：パー</p>
    <?php elseif ($_POST['janken'] =='チョキ' && $PC == 'グー'): ?>
        <p><b>負け!</b></p>
        <p>あなた：チョキ</p>
        <p>コンピュータ：グー</p>
    <?php elseif ($_POST['janken'] =='パー' && $PC == 'グー'): ?>
        <p><b>勝ち!</b></p>
        <p>あなた：パー</p>
        <p>コンピュータ：グー</p>
    <?php elseif ($_POST['janken'] =='パー' && $PC == 'チョキ'): ?>
        <p><b>負け!</b></p>
        <p>あなた：パー</p>
        <p>コンピュータ：チョキ</p> 
    <?php endif; ?> 

    <form action="" method="get" >
       
        <a href="janken_start.php">>>もう一回勝負する</a>
    </form>
    
</body>
</html> -->


<!-- （解答例）一般化ver.
<?php
// じゃんけんの手をランダムに決定
$HANDS = ['グー', 'チョキ', 'パー'];
$index = array_rand($HANDS);
$PC = $HANDS[$index];

// POSTデータがあるかチェック
if (isset($_POST['janken'])) {
    $user = $_POST['janken'];
} else {
    $user = null;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>結果は・・・</title>
</head>
<body>
    <h1>結果は・・・</h1>

    <?php if ($user === null): ?>
        <p>フォームから手を選んでください。</p>

    <?php elseif ($user === $PC): ?>
        <p><b>引き分け!</b></p>
        <p>あなた：<?= $user ?></p>
        <p>コンピュータ：<?= $PC ?></p>

    <?php elseif (
        ($user === 'グー' && $PC === 'チョキ') ||
        ($user === 'チョキ' && $PC === 'パー') ||
        ($user === 'パー' && $PC === 'グー')
    ): ?>
        <p><b>勝ち!</b></p>
        <p>あなた：<?= $user ?></p>
        <p>コンピュータ：<?= $PC ?></p>

    <?php else: ?>
        <p><b>負け!</b></p>
        <p>あなた：<?= $user ?></p>
        <p>コンピュータ：<?= $PC ?></p>
    <?php endif; ?>

</body>
</html> -->

<!-- （TECH I.S.解答例） -->
 
<?php
$hands = ["グー","パー","チョキ"];

if(isset($_POST["janken"])){
    $playerHand = $_POST["janken"];
    $key = array_rand($hands);
    $pcHand = $hands[$key];
    if($playerHand == $pcHand){
        $result = "あいこ";
    }else if( ($playerHand == "グー" && $pcHand == "チョキ") ||
              ($playerHand == "パー" && $pcHand == "グー") ||
              ($playerHand == "チョキ" && $pcHand == "パー")  ){
                $result = "勝ち";
    }else{
        $result = "負け";
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>じゃんけん</title>
</head>
<body>
    <main>
        <h1>結果は・・・</h1>
        <div>
            <p><b><?= $result ?>!</b></p>
            <p>
            あなた：<?= $playerHand ?><br>
            コンピューター：<?= $pcHand ?>
            </p>
            <a href="janken_start.php">＞＞もう一回勝負する</a>
        </div>
    </main>
</body>
</html>
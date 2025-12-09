<?php
print_r($_POST)
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>じゃんけんプログラム</title>
     
</head>
<body>
    <!-- h1だけでいい -->
    <header>
       <h1> じゃんけんプログラム</h1>
    </header>
    <p>
        出す手を選んで勝負してください。
    </p>
    <form action="janken_result.php" method="post" >
        <p> <!-- 多分lavel forとphpは統一しないといけない label　も id　も必須ではないけどinput
            だけでいい（解答例）  -->
        <label for="janken_GU"><input id="janken_GU" type="radio" name="janken" value="グー">グー</label>
        <label for="janken_CHOKI"><input id="janken_CHOKI" type="radio" name="janken" value="チョキ">チョキ</label>
        <label for="janken_PAA"><input id="janken_PAA" type="radio" name="janken" value="パー">パー</label>
        <input type="submit" value="勝負する！">
        </P>
    </form>
   
</body>
</html>
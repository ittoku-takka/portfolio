<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formについて</title>
</head>
<body>
    <form method= "データ送信方法(get or post)" action="データ送信先（空白なら自身のファイルform.php）">
    <input or textarea
    </form>
</body>
</html> -->

<?php
    // print_r($_POST)
     var_dump($_POST)
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_POSTについて</title>
</head>
<body>
    <form action="form_test.php" method="post" >
        <!-- enctype=form-data> -->
    
        <p>氏名
            <input type="text" name ="name" id="" value="ここに入力" multiple>
        </p>
 
        <p>性別
            <label for="gender_male"><input id="gender_male" type="radio" name="gender"  value="male" checked>男性</label>
            <label for="gender_woman"><input id="gender_woman" type="radio" name="gender"  value="woman">女性</label>
        </p>
        <p>
        <label for="fruits_1"><input type="checkbox" name="fruits1" id="" value="apple" checked="checked">りんご</label>
        <label for="fruits_2"><input type="checkbox" name="fruits2" id="" value="orange" >みかん</label>
        <label for="fruits_3"><input type="checkbox" name="fruits3" id="" value="peach" >もも</label> 
        </p>
        <p>メールアドレス
            <input type="email" name ="name" id="" value="" multiple>
        </p>
        <p>パスワード
            <input type="password" name ="name" id="" value="" multiple>
        </p>

            <select name="age" multiple="multiple">
                 <?php for($i = 0; $i <= 100; $i++): ?>
                    <option name="" value="<?php echo $i; ?>"><?php echo $i; ?>歳</option>
                 <?php endfor; ?>
            </select> 
        <!-- <p>言語
            <select name="language" multiple="multiple
            ">
                <option value="en">英語</option>
                <option value="ja" selected>日本語</option>
                <option value="zh">中国語</option>
            </select>
        </p> -->
        <!-- --name重複してしまう悪例↓--
        <label for="fruits_1"><input type="checkbox" name="gender" value="apple" checked="checked">りんご</label>
        <label for="fruits_2"><input type="checkbox" name="gender" value="orange" >みかん</label>
        <label for="fruits_3"><input type="checkbox" name="gender" value="peach" >もも</label> 
        --------- -->
        
        <p><input type="submit" value="送信"></p>
     </form>
</body>
</html>
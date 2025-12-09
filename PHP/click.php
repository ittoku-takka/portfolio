<!-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クリックイベント</title>
    <style>
    .box{
        width: 100px;
        height: 100px;
        background: skyblue;
        cursor: pointer;
        transition: 0.8s;
    }
    .circle{
        background: pink;
        border-radius: 50%;
        transform: rotate(360deg);

    }

    </style>


</head>
<body>
    <h1>クリックイベント</h1>
    クリックするとcircleのクラスを追加するクリックイベント
    <div class="box" id="target"></div>
    <script>
        'use strict';
        document.getElementById('target').addEventListener('click' , () => {
            document.getElementById('target').classList.add('circle');
        });
    </script>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クリックイベント</title>
    <style>

    </style>


</head>
<body>
    <h1>クリックイベント</h1>
    <button type="button"  id="target">押してください</button>
    <script>
        'use strict';
        document.getElementById('target').addEventListener('click' , function () {
            alert('ボタンが押されました！');
        });
    </script>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日付、現在時刻</title>
    <style>

    </style>


</head>
<body>
    
    <button type="button"  id="day">今日の日付</button>
    <button type="button"  id="time">現在の時刻</button>
    <script>
        'use strict';

        // const today = new Date();
       
        
       //以下の解答例では、varではなくletだった。「クリックイベント2⃣演習」
       
        document.getElementById('day').addEventListener('click' , function () {
             
             var today = new Date();
             var year = today.getFullYear();
             var month = today.getMonth()+1;
             var date = today.getDate();
            alert(year + '年' + month + '月' + date + '日');
        });
        document.getElementById('time').addEventListener('click' , function () {
             var today = new Date(); 
             var hour = today.getHours();
             var minute = today.getMinutes();
             var second = today.getSeconds();
            alert(hour + '時' + minute + '分' + second + '秒');
        });
    </script>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>合計金額 計算</title>
    <style>

    </style>


</head>
<body>
    <h1>合計金額 計算</h1>
    <?php
    $val = 0;   // 初期値を設定
    $num = 0;   // 個数も同様
    ?>
    <p>
    <!-- 価格<input type="text" id ="val" value="<?= $val; ?>"> -->
     <!-- 価格<input type="text" id ="val"> 
    </p>
    
    <p> -->
    <!-- 個数<input type="text" id ="num" value="<?= $num; ?>"> -->
      <!-- 個数<input type="text" id ="num">
    </p>
    
    <button type="button"  id="cal">計算する</button>
    
      //以下の解答例では、constではなくletだった。「クリックイベント2計算演習」 -->
    <!-- <script>
        'use strict';
       
        document.getElementById('cal').addEventListener('click' , function () {
            //  const price = parseFloat(document.getElementById('val').value) || 0;
            //  const quantity = parseFloat(document.getElementById('num').value) || 0;
             const price = document.getElementById('val').value;
             const quantity = document.getElementById('num').value;
             let total = price * quantity;
            // alert("合計は" + total + "円です。");
            alert(`合計は${total}円です。`);
        })
       
    </script>
</body>
</html> --> 


<!-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>さん、おはようございます！</title>
    <style>

    </style>


</head>
<body>
    <h1>さん、おはようございます！</h1>
    
    <p>
      <input type="text" id ="name" name="name">名前
    </p>
    
    <!-- <button type="button"  id="hello">送信</button> 
    <input type="button"  id="hello" value = "送信" >
    
    <script>
        'use strict';
       
        document.getElementById('hello').addEventListener('click' , function () {
     
            const name = document.getElementById('name').value;

            console.log("名前" + name);
            alert(`${name}さん、おはようございます！`);
        })
       
    </script>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>さん、おはようございます！</title>
    <style>

    </style>


</head>
<body>
    <h1>さん、おはようございます！</h1>
    
    <p>
      <input type="url" id ="url" name="url">URL
    </p> -->
    
    <!-- <button type="button"  id="hello">送信</button> -->
    <!-- <input type="button"  id="link" value = "送信" > -->
     <!-- //以下の解答例では、constではなくletだった。「クリックイベント2計算演習」 -->
    <!-- <script>
        'use strict';
       
        document.getElementById('link').addEventListener('click' , function () {
     
            const url = document.getElementById('url').value;

           window.location.href = url;
        })
       
    </script>
</body>
</html> -->


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL</title>
    <style>

    </style>


</head>
<body>
    <h1>URL</h1>
    
    <p>
      <input type="url" id ="url" name="url">URL
    </p>
    
    <!-- <button type="button"  id="hello">送信</button> -->
    <input type="button"  id="link" value = "送信" >
     <!-- //以下の解答例では、constではなくletだった。「クリックイベント2計算演習」 -->
    <script>
        'use strict';
       
        document.getElementById('link').addEventListener('click' , function () {
           
           const url = document.getElementById('url').value;
           if(!url){
            alert("URLを入力してください");
            return;
           }
           if(confirm("以下のURLにリダイレクトしますが、よろしいでしょうか？\n" + url)){
                window.location.href = url;
           }else{
            alert("処理を中断しました。")
           }
           /////
        //    var checkflg = confirm("以下のURLにリダイレクトしますが、よろしいでしょうか？\n" + url);
        //    if(checkflg == true){
        //     location.href = url;
        //    }else{
        //     alert("処理を中断しました。");
        //    }
           /////

           
        })
       
    </script>
</body>
</html>
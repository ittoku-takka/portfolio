<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <button id="tag">ボタン</button>

    <script> //onメソッド
       $('#tag').on('click',function() {
       alert('クリックされました');
       }); 
    // 非推奨  バージョンの問題
    //  $('#tag').click(function() {
    //    console.log('クリックされました');
    //    });
    // javaScript 
    // document.getElementById('tag').onclick = function(){
    //     alert('クリックされました');
    </script>-->

    <!-- <input type="text">
    <script>
      $('input').change(function(){
        alert('入力されました');
      });
    </script> -->
  
    <div id="parent">
       <p>テキスト</p>
       <div id="child"><img class="child-image" src="sample.png" /></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <p id ="tag" style="display: none">サンプル</p> -->
     <p id ="tag" >サンプル</p>
    <script>
        $('#parent').find('.child-image')  //子要素以下全て探し出す//子だけはchildrenメソッド
        $('#tag').hide().fadeIn(1000, function(){
             alert('フェードインしました')
        });
    //     $(document).ready(function(){
    //   $('#tag').fadeIn(1000); // 1000ミリ秒＝1秒でふわっと表示
    // });
        
    </script>
</body>
</html>
<!-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>さいころ</title>
</head>
<body>
    <h1>さいころプログラム</h1>
    <div>
        <button id="throw">サイコロを振る</button>
        <img id="dice" src="saikoro/sai1.png" alt="さいころ">
    </div>


    <script>
        'use strict'
       
        document.getElementById('throw').addEventListener('click' , function () {
            
             const dicenum = Math.floor(Math.random()*6)+1;
        document.getElementById('dice').src = "saikoro/sai" + dicenum + ".png";
        document.getElementById('dice').alt = dicenum + "の目";
        });    
    </script>
</body>
</html> -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>さいころ</title>
</head>
<body>
    <h1>さいころプログラム</h1>
    <div class="throw-box">
        <button id="throw" onclick="tdice()">サイコロを振る</button>
    </div>
    <div class="img-dice">
         <img id="dice" src="saikoro/sai1.png" alt="さいころ">
         <p id ="msg"></p>
    </div>


    <script>
        'use strict'
    var count = 25;
    var mSec = 80;
    
        function tdice() {
            document.getElementById('throw').setAttribute("disabled", true);

            var dicenum = Math.floor(Math.random()*6)+1;
            document.getElementById('dice').src = "saikoro/sai" + dicenum + ".png";
            document.getElementById('dice').alt = dicenum + "の目";
            document.getElementById('msg').innerHTML = `サイコロの目は???です。`;
           

            //さいころを回転させる
            count--;
            if (count >=1) {
               var tim = setTimeout(tdice,mSec);
            }else if(count == 0){
                count = 25;
                document.getElementById('msg').innerHTML = `サイコロの目は${dicenum}です。`;
                document.getElementById('throw').removeAttribute('disabled');

            }
        }
    </script>
</body>
</html>

<!--<< function getRandomint(max) {
    return Math.floor(Math.random()*max);
}>>
0~5
<script>
    var imgList = [
     "img/1.png",
     "img/2.png",
     "img/3.png",
     "img/4.png",
     "img/5.png",
     "img/6.png"
    
    ]

var dice_random =  Math.floor(Math.random()*imglist/length);  //imglist/lengt配列の長さ
console.log(imgList[dice_random]);
document.getElementById('dice').src = imgList[dice_random];
    </script>
-->
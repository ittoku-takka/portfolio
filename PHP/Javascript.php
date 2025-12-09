<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>javaScript</title>
</head>
<body>
    <h1>console.log</h1>
    <script>
        // const val = 'HELLO TECH I.S.'; //定数

        // let key = val + 1; //変数
        // var price = 600;

        // 'use strict';

        // console.log('文字列');
        // console.log(val);
        // console.log(key);

        // price *= 10;
        
        // alert(price);

        ///////////////////////////////////補足動画
        // var hoge = "varで定義";
        // console.log(hoge);

        // if(true){
        //     var fuga = "ifの中で定義";
        // }
        // console.log(fuga);

        // var fuga = "最初の宣言";
        // var fuga = "2回目の宣言";
        // console.log(fuga);
        
        // const hoge = "定数";
        // console.log(hoge);
        ///////////////////////////////////補足動画
        //①配列コンストラクタ
        // let list = new Array('山田','愛媛','20才');
        // let list = new Array(5);
        // console.log(list)
        //②配列リテラル →推奨
        let list2 = ['山田','愛媛','20才'];
        // let list2 = [5];
        // console.log(list2) 

        // list2.forEach( function(value){
        //     console.log(value);
        // }

        // );
        // let list3 = {名前:"名前",住所:"愛媛",年齢:"20才"}
        // console.log(list3)
        // Object.keys(list3).forEach(function(key){
        //     console.log(key +'='+ list3[key]);
        // });

        'use strict';

        let lists = [
                {名前:'山田',住所:'愛媛',年齢:'20才'},
                {名前:'井上',住所:'香川',年齢:'36才'},
                {名前:'佐藤',住所:'高知',年齢:'42才'}
        ];
        console.log(lists);

        for(let i = 0; i<lists.length; i++){
            Object.keys(lists[i]).forEach(function(key){
                 console.log(key +"="+ lists[i][key]);
            });

        }
    </script>
</body>
</html>
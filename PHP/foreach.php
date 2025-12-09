<?php



// $array[] = '山田';
// $array[] = '愛媛';
// $array[] = '２０歳';

// echo $array[0];
// echo $array[1];
// echo $array[2];

// $array = [1,2,3,4,5];

// echo "\n";
// echo 'print_r:'."\n";
// print_r($array);
// echo "\n";
// echo 'var_dump:'."\n";
// var_dump($array);

// $array = ['愛媛',1,true];

// echo "\n";
// echo 'var_dump:'."\n";
// print_r($array);

// $array = array(
//     '名前' => 'テック',
//     '概要' => 'プログラミング',
//     '一言' => 'がんにバル'
// );

// echo $array['名前'];
// echo $array['概要'];
// echo $array['一言'];

// $array = array(
//     array('名前' => 'テック','概要' => 'プログラミング','一言' => 'がんにバル'), //0番目
//     array('名前' => 'nagai','概要' => 'poro','一言' => 'gangan')
// );

// echo $array[0]['名前'];//0番目の中の名前を取り出す

// $price = array(100,200,300);

// foreach($price as $value){
//     $result = $value * 1.1;
//     echo $result;
// }

// $array = array(
//     '名前' => 'テック',
//     '概要' => 'プログラミング',
//     '一言' => 'がんにバル'
// );

// foreach($array as $key => $val){
//     echo $key.':';
//     echo $val.'<br>';
// }

$info = array(
    array('名前' => '上杉','出身' => '愛媛','電話' => '089-1231-2485','趣味' => 'ボードゲーム'), //0番目
    array('名前' => '佐藤','出身' => '徳島','電話' => '082-4492-2485','趣味' => 'サッカー'),
    array('名前' => '東','出身' => '香川','電話' => '080-4242-5355','趣味' => '野球'),
    array('名前' => '寺島','出身' => '高知','電話' => '089-4562-1045','趣味' => 'テニス')
);

// foreach($info as $nm => $ary){
//     echo $nm+1;
//     foreach($ary as $key => $val){
//         echo $val;
//     }
//     echo '<br>';
// }

// for($i=0; $i<count($info); $i++){

//         echo ($i+1);
//         echo $info[$i]['名前'];
//         echo $info[$i]['出身'];
//         echo $info[$i]['電話'];
//         echo $info[$i]['趣味'];
//         echo '<br>';
    

// }
?>

 <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1">
        <tr>
            <th>No.</th>
            <th>名前</th>
            <th>出身</th>
            <th>電話</th>
            <th>趣味</th>
        </tr>
       
         <?php foreach($info as $key => $val): ?>
            <tr>
            <td><?php echo ($key+1); ?></td>
            <td><?php echo $val['名前']; ?></td>
            <td><?php echo $val['出身']; ?></td>
            <td><?php echo $val['電話']; ?></td>
            <td><?php echo $val['趣味']; ?></td>
            <?php echo '<br>'; ?>
            </tr>
        <?php endforeach; ?> 
    </table>
</body>
</html>
<!-- ---for文ver.---- -->
  <!-- <?php for($i=0; $i<count($info); $i++): ?>
            <tr>
            <td><?php echo ($i+1); ?></td>
            <td><?php echo $info[$i]['名前']; ?></td>
            <td><?php echo $info[$i]['出身']; ?></td>
            <td><?php echo $info[$i]['電話']; ?></td>
            <td><?php echo $info[$i]['趣味']; ?></td>
            <?php echo '<br>'; ?>
            </tr>
        <?php endfor ?> -->
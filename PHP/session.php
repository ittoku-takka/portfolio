<?php

// session_start();

// $_SESSION['name'] = 'テスト太郎';
// $_SESSION['age'] = 20;
// $_SESSION['address'] = '愛知';

// var_dump( $_SESSION );
// echo '<br>';

// echo $_SESSION['name'].'<br>';
// echo $_SESSION['age'].'<br>';
// echo $_SESSION['address'].'<br>';

// unset($_SESSION['age'] );

// var_dump( $_SESSION );

$array = array ( 
    'name' => 'テスト太郎',
    'age' => 20,
    'address' => '愛知'
);

session_start();

session_destroy();
session_start();

$_SESSION['user'] = $array;

echo $_SESSION['user']['name'].'<br>';
echo $_SESSION['user']['age'].'<br>';
echo $_SESSION['user']['address'].'<br>';

var_dump($_SESSION);
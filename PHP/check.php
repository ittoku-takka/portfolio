<?php
$login="";
if($login){
    echo "login Sucsess";
}else{
    header('Location: https://techis.jp/access/?referral=%E3%83%9B%E3%83%BC%E3%83%A0%E3%83%9A%E3%83%BC%E3%82%B8');
    exit;
    header('Location: ./redirect.php');

}
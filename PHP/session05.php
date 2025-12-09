<?php
session_start();

$_SESSION['aaa'] = 'aaa';
$_SESSION['bbb'] = 'bbb';
$_SESSION['ccc'] = 'ccc';
$_SESSION['ddd'] = 'ddd';

var_dump( $_SESSION );
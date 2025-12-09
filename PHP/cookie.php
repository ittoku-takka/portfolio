<?php

//  setcookie('Hello','World');
//  echo "setcookie run";

//  setcookie( 'hello2','world', time() + 10);
//  echo "setcookie expire set";

var_dump( $_COOKIE );
echo "<br/>\n";
echo "<br/>\n";

$_COOKIE['hello'] = "ワールド";

var_dump( $_COOKIE );

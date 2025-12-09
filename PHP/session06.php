<?php
session_start();

var_dump( $_SESSION );

unset( $_SESSION['bbb'] );
echo"<br/>\n";
echo"<br/>\n";

var_dump( $_SESSION );
<?php
session_start();
$_SESSION["count"]=$_SESSION["count"]+1;
echo "count=$_SESSION[count]\n"
 ?>

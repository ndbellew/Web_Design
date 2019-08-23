<?php

$command = escapeshellcmd('Flask_App_1/Flaskapp1.py');
$output = shell_exec($command);
echo $output;

?>

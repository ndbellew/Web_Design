<!doctype html>
<?php $title = "Pewter City Gym"; ?>
<html>
<head>
  <title><?php echo $title ?></title>
<?php
session_start();
if (array_key_exists("username",$_SESSION)){
  echo "Welcome, $_SESSION[username] !\n";
}
define("ROOT_URL","https://dashboard.heroku.com/apps/web-design-bellew");

function connect($db,$user,$pass){

}
connect("mydb","myuser","mypass");

<!doctype html>
<?php $title = "yee"; ?>
<html>
  <head>
    <title>
      <?php
      echo $title;
      ?>
    </title>
  </head>
  <?php
    $name = "Nathan Bellew";

    echo "Welcome, our name is $name\nHow can we service you in this unholy hour?"

    $items = array(
      "alpha","beta", "gamma","kirby"
    );
    foreach ($items as $item){
      echo "<li>$item</li>\n";
    };
  ?>


</html>

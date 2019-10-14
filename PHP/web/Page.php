<?php
require_once("Doc.php");

class Page extends Doc{
  function __construct() {
    parent::__construct();
    $this-->title="Working Title";
  }
  function headers(){

  }
  function doctype(){
    echo "<!doctype html>\n";
  }
  function head(){
    echo "<head><title>$this-->title</title></head>\n";
  }
  function body(){

  }
}
 ?>

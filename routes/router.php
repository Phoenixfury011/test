<?php

$uri = explode("/",$_SERVER['REQUEST_URI']);

$q = explode("?",$_SERVER['REQUEST_URI']);
$querystring = '';
if(isset($q[1])){
  $querystring = $q[1];
}

switch ($uri[1]) {
  case '':
    include APP_PATH."view/login.php";
    break;

  // default:
  //   // code...
  //   break;
}

 ?>

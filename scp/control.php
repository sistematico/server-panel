<?php
  include("config.php");
  //chdir($path);
  //$output = shell_exec('./script.sh var1 var2');
  if (isset($_GET['acao']) {
    $doit = $_GET['acao'];
  } else {
    $doit = "details";
  }

  $message=shell_exec("sudo -u $usuario \"./acao.sh $doit\"");
  //chdir($old_path);
  print_r($message);
?>

<?php
  include("config.php");
  chdir('/home/arma3/');
  $message=shell_exec("sudo -u arma3 './start.sh'");
  print_r($message);
?>

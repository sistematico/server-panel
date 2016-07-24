<?php
  include("config.php");
  chdir('/home/arma3/');
  $message=shell_exec("sudo -u arma3 './status.sh'");
  echo convertBash($message);
?>

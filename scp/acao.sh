#!/bin/sh

usuario="$(grep -oE '\$usuario = .*;' config.php | tail -1 | sed 's/$usuario = //g;s/;//g')"
game="$(grep -oE '\$game = .*;' config.php | tail -1 | sed 's/$game = //g;s/;//g')"

#$message=shell_exec("sudo -u arma3 './start.sh'");

cd /home/$usuario
./$game $1

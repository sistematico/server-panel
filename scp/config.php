<?php
  $usuario  = "arma3";
  $path = "/home/$usuario";
  $game     = "arma3server";

  function convertBash($code) {
      $dictionary = array(
          '[1;30m' => '<span style="color:black">',
          '[1;31m' => '<span style="color:#EF2929">',
          '[31m'   => '<span style="color:#EF2929">',
          '[1;32m' => '<span style="color:#8AE234">',
          '[K[[32m' => '<span style="color:#8AE234">',
          '[32m'   =>  '<span style="color:#8AE234">',
          '[1;33m' => '<span style="color:yellow">',
          '[1;34m' => '<span style="color:#729FCF">',
          '[34m'   => '<span style="color:#729FCF">',
          '[1;35m' => '<span style="color:purple">',
          '[1;36m' => '<span style="color:cyan">',
          '[K[[36m' => '<span style="color:cyan">',
          '[1;37m' => '<span style="color:white">',
          '[m'     => '</span>',
          '[0m'    => '</span>',
          '[0m]'   => '</span>',
          '[K[ .... ]' => '<br />'
      );
      $htmlString = str_replace(array_keys($dictionary), $dictionary, $code);
      return $htmlString;
  }

?>

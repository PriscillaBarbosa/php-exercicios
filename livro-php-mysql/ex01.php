<?php

setlocale(LC_TIME, 'pt_BR.UTF-8');
  echo strftime('%A');

  echo " Hoje é dia " . date('d/m/y');
  echo " Hoje é " . date('l');
  echo " agora são " . date('H:i:s');
  echo " agora são " . date('g:i a');

?>
<?php

date_default_timezone_set('Europe/Paris');
  if (file_exists('../private/chat')) {
    $content = unserialize(file_get_contents('../private/chat'));
    foreach ($content as $elem) {
      echo '[' . date('H:i', $elem['time']) . '] ' . $elem['login'] . ' : ' . $elem['message'];
      echo "<br />";
    }
  }

 ?>

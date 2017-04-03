<?php

if ($_POST['login'] != "" && $_POST['passwd'] != "" ) {
  if ($_POST['submit'] == "OK") {
    $passwd = hash('whirpool', $_POST['passwd'])
    if (file_get_contents('../private/passwd') == FALSE) {
      $tab = array(array('login' => $_POST['login'], 'passwd' => ''));
      $passwd = serialize($passwd);
      file_put_contents("../private/passwd")

    }
  }
}

?>

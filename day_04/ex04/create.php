<?php
header("Location: index.html");
if ($_POST['login'] != "" && $_POST['passwd'] != "" && $_POST['submit'] == "OK") {
    $passwd = hash('whirlpool', $_POST['passwd']);
    if (file_exists("../private") == FALSE) {
      mkdir("../private", 0777, TRUE);
    }
    if (file_exists('../private/passwd') == FALSE) {
      $tmp['login'] = $_POST['login'];
      $tmp['passwd'] = $passwd;
      $account[] = $tmp;
      $ser = serialize($account);
      file_put_contents("../private/passwd", $ser);
      echo "OK\n";
    }
    else {
      $found = 0;
      $unser = unserialize(file_get_contents('../private/passwd'));
      foreach ($unser as $elem) {
        if ($elem['login'] == $_POST['login'])
          $found = TRUE;
      }
      if (!$found) {
        $tmp['login'] = $_POST['login'];
        $tmp['passwd'] = $passwd;
        $unser[] = $tmp;
        $ser = serialize($unser);
        file_put_contents("../private/passwd", $ser);
        echo "OK\n";
        exit();
      }
      else {
        echo "ERROR\n";
        exit();
      }
    }
}
else {
  echo "ERROR\n";
  exit();
}
?>

<?php
header("Location: index.html");
if ($_POST['login'] != "" && $_POST['oldpwd'] != "" && $_POST['newpwd'] != "" && $_POST['submit'] == "OK") {
    $modify = FALSE;
    if (file_exists("../private") == FALSE) {
        mkdir("../private", 0777, TRUE);
    }
    if (file_exists('../private/passwd') == TRUE) {
      $unser = unserialize(file_get_contents('../private/passwd'));
      foreach ($unser as $index => $elem) {
        if ($elem['login'] == $_POST['login']) {
          $oldpwd = hash('whirlpool', $_POST['oldpwd']);
          if ($elem['passwd'] == $oldpwd) {
            $newpwd = hash('whirlpool', $_POST['newpwd']);
            $unser[$index]['passwd'] = $newpwd;
            $ser = serialize($unser);
            file_put_contents("../private/passwd", $ser);
            $modify = TRUE;
          }
        }
      }
    }
    if ($modify == TRUE)
      echo "OK\n";
    else
      echo "ERROR\n";
}
else
  echo "ERROR\n";
?>

<?php
session_start();

require ('auth.php');

if ($_POST['submit'] && $_POST['submit'] == 'OK' && auth($_POST['login'], $_POST['passwd']) == TRUE) {
    $_SESSION['loggued_on_user'] = $_POST['login'];
    ?>
    <html><body>
      <iframe name="chat" src="chat.php" width="100%" height="550px"></iframe>
      <iframe name="speak" src="speak.php" width="100%" height="50px"></iframe>
    </body></html>
    <?php
}
else {
  $_SESSION['loggued_on_user'] = "";
  header("Location: index.html");
  echo "ERROR\n";
  exit();
}
?>

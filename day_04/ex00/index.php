<?php
session_start();
if ($_GET["submit"]) {
  if ($_GET['submit'] == "OK") {
    $_SESSION['login'] = $_GET['login'];
    $_SESSION['passwd'] = $_GET['passwd'];
  }
}
 ?>
<html><body>
  <form method="get">
    Login  :<input style="width: 500px; height: 25px" type="text" size="80" name="login" value="<?= $_SESSION['login'] ?>"/>
    <br />
    Passwd :<input style="width: 500px; height: 25px" type="password" size="80" name="passwd" value="<?= $_SESSION['passwd'] ?>"/>
    <input style="width: 200px; height: 25px" type="submit" size="80" name="submit" value="OK">
  </form>
</body></html>

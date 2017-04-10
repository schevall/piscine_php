<?php
session_start();
if ($_SESSION['loggued_on_user'] != "") {
  if ($_POST['submit'] && $_POST['submit'] == "Envoyer") {
    if (file_exists("../private/chat") == FALSE) {
      $content = array(array('time' => time(), 'login' => $_SESSION['loggued_on_user'], 'message' => $_POST['message']));
      $ser = serialize($content);
      file_put_contents('../private/chat', $ser);
    }
    else {
      $fd = fopen("../private/chat", 'r+');
      flock($fd, LOCK_SH | LOCK_EX);
      $unser = unserialize(file_get_contents('../private/chat'));
      $msg = $_POST['message'] . "\n";
      $unser[] = array('time' => time(), 'login' => $_SESSION['loggued_on_user'], 'message' => $msg);
      $ser = serialize($unser);
      file_put_contents("../private/chat", $ser);
      flock($fd, LOCK_UN);
    }
  }
}

?>

<html>
<head>
  <script langage="javascript">top.frames['chat'].location = 'chat.php';</script>
</head>
<body>
  <form method="post" action="">
    <input type="text" name="message" value="" />
    <input type="submit" name="submit" value="Envoyer" />
  </form>
</html></body>

<?php
	if ($_SERVER['PHP_AUTH_USER'] == "zaz" && $_SERVER['PHP_AUTH_PW'] == "jaimelespetitsponeys")
	{
    $img = file_get_contents("../img/42.png");
    $file = base64_encode($img);
		?>
      <html><body>Bonjour Zaz<br />
      <img src='data:image/png;base64, <?php echo $file ?>'>
      </body></html>
    <?php
	}
	else
	{
    header("WWW-Authenticate: Basic realm=''Espaced membres''");
	  header('HTTP/1.0 401 Unauthorized');
    ?>
<html><body>Cette zone est accessible uniquement aux membres du site</body></html>
<?php

  }
?>

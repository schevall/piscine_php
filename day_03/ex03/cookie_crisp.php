<?php
if ($_GET["action"] != "") {
  if ($_GET["action"] == "del")
    setcookie($_GET["name"], "", time() - 3600);
  elseif ($_GET["action"] == "set" && $_GET['name'] != "")
    setcookie($_GET["name"], $_GET["value"], time() + (7 * 24 * 60 * 60));
  elseif ($_GET["action"] == "get") {
    if ($_COOKIE[$_GET["name"]] != "") {
      echo ($_COOKIE[$_GET["name"]]) . "\n";
    }
  }
}
?>

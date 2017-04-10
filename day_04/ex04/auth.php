<?php
function auth($login, $passwd) {
  if (file_exists('../private/passwd')) {
    $auth = FALSE;
    $unser = unserialize(file_get_contents('../private/passwd'));
    foreach ($unser as $index => $elem) {
      if ($login == $elem['login']) {
        $testpwd = hash('whirlpool', $passwd);
        if ($testpwd == $elem['passwd'])
          $auth = TRUE;
      }
    }
    if ($auth == TRUE)
      return TRUE;
    else
      return FALSE;
  }
  else
    return FALSE;
}
?>

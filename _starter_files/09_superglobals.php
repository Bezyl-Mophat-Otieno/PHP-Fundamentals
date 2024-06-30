<?php
/* ---------- Superglobals ---------- */
/*
  Built in variables that are always available in all scopes
*/

/*
  $GLOBALS - A superglobal variable that holds information about any variables in global scope.
  $_GET - Contains information about variables passed through a URL or a form.
  $_POST -  Contains information about variables passed through a form.
  $_COOKIE - Contains information about variables passed through a cookie.
  $_SESSION - Contains information about variables passed through a session.
  $_SERVER - Contains information about the server environment.
  $_ENV - Contains information about the environment variables.
  $_FILES -  Contains information about files uploaded to the script.
  $_REQUEST - Contains information about variables passed through the form or URL.
*/

// print_r ($GLOBALS);

$keys_in_server_object = array_keys($_SERVER);

// print_r($keys_in_server_object)
print_r($_GET['name']);
print_r($_GET['age']);
?>


<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=JOHN&age=30"> Click Me</a>
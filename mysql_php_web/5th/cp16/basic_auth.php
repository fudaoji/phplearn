<?php

//$_SERVER['PHP_AUTH_USER'] = 0;$_SERVER['PHP_AUTH_PW']=0;$_SERVER['HTTP_AUTHORIZATION']='';die(1);
if ((!isset($_SERVER['PHP_AUTH_USER'])) &&
    (!isset($_SERVER['PHP_AUTH_PW'])) &&
    (isset($_SERVER['HTTP_AUTHORIZATION']) && substr($_SERVER['HTTP_AUTHORIZATION'], 0, 6) == 'Basic ')
   ) {

  /*list($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']) =
    explode(':', base64_decode(substr($_SERVER['HTTP_AUTHORIZATION'], 6)));*/
}

echo 2 . '<br>';
var_dump($_SERVER);
// Replace this if statement with a database query or similar
if ((empty($_SERVER['PHP_AUTH_USER']) && $_SERVER['PHP_AUTH_USER'] != 'user') ||
   (empty($_SERVER['PHP_AUTH_PW']) && $_SERVER['PHP_AUTH_PW'] != 'pass')) {

   // visitor has not yet given details, or their
   // name and password combination are not correct

  header('WWW-Authenticate: Basic realm="Realm-Name"');
  header('HTTP/1.0 401 Unauthorized');
} else {
?>
<!DOCTYPE html>
<html>
<head>
   <title>Secret Page</title>
</head>
<body>
<?php

echo '<h1>Here it is!</h1>
      <p>I bet you are glad you can see this secret page.</p>';
}
?>
</body>
</html>
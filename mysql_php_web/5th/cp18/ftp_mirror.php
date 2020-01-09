<!DOCTYPE html>
<html>
<head>
   <title>Mirror Update</title>
</head>
<body>
   <h1>Mirror Update</h1>

<?php
// set up variables - change these to suit application
$host = '192.168.232.129';
$user = 'ftpuser1';
$password = '123456';
$remotefile = 'log1.txt';
$localfile = dirname(__FILE__) . '/../imgs/log1.txt';
//var_dump(dirname(__FILE__));exit;

// connect to host
$conn = ftp_connect($host);

if (!$conn)
{
  echo 'Error: Could not connect to '.$host;
  exit;
}

echo 'Connected to '.$host.'<br />';

// log in to host
$result = @ftp_login($conn, $user, $password);
if (!$result)
{
  echo 'Error: Could not log in as '.$user;
  ftp_quit($conn);
  exit;
}

echo 'Logged in as '.$user.'<br />';

// Turn on passive mode
ftp_pasv($conn, true); 

// Check file times to see if an update is required
echo 'Checking file time...<br />';
if (file_exists($localfile))
{
  $localtime = filemtime($localfile);
  echo 'Local file last updated ';
  echo date('G:i j-M-Y', $localtime);
  echo '<br />';
} else {
  //mkdir($localfile, 0777);
  $localtime = 0;
}

$remotetime = ftp_mdtm($conn, $remotefile);
if (!($remotetime >= 0))
{
   // This doesn't mean the file's not there, server may not support mod time
   echo 'Can\'t access remote file time.<br />';
   $remotetime = $localtime + 1;  // make sure of an update
}
else
{
  echo 'Remote file last updated ';
  echo date('G:i j-M-Y', $remotetime);
  echo '<br />';
}

if (!($remotetime > $localtime))
{
   echo 'Local copy is up to date.<br />';
   exit;
}

// download file
// echo 'Getting file from server...<br />';
// $fp = fopen($localfile, 'wb');

// if (!$success = ftp_fget($conn, $fp, $remotefile, FTP_BINARY))
// {
//   echo 'Error: Could not download file.';
//   fclose($fp);
//   ftp_quit($conn);
//   exit;
// }

// fclose($fp);
// echo 'File downloaded successfully.';

echo 'Uploading file from server...<br />';

if (!$success = ftp_put($conn, $remotefile, $localfile, FTP_BINARY))
{
  echo 'Error: Could not upload file.';
  fclose($fp);
  ftp_quit($conn);
  exit;
}

echo 'File uploaded successfully.';


// close connection to host
ftp_close($conn);

?>
</body>
</html>

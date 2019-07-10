<?php
  define('DBHOST', 'localhost');
  define('DBUSER', 'root');
  define('DBPASS', '');
  define('DBNAME', 'hotel_management');
  $mysqli = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
  if ( !$mysqli ) {
    die("Connection Failed : " . mysql_error());
  }
 ?>

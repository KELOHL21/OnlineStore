<?php

$database = mysqli_connect('localhost','root','','store_users');

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
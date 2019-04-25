<?php

$conn = mysqli_connect("localhost","ffd_user","Ffd@pnt786!","ffd2019");


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



?>
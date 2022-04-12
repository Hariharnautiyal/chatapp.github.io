<?php
  $hostname = "localhost";
  $username = "id18761284_harihar";
  $password = "3E(#z35!1wqj_rCS";
  $dbname = "id18761284_chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>

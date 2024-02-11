<?php
  $server = "http://sql6.freesqldatabase.com/";
  $username = "sql6683358";
  $password = "rYyqGBZfi1";
  $database = "sql6683358";

  $conn = mysqli_connect($server, $username, $password, $database);

  if (!$conn) {
      die("Koneksi gagal: " . mysqli_connect_error());
  }
  echo "Koneksi berhasil";
?>
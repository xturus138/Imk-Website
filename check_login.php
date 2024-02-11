<?php
    require("koneksi.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Penghuni WHERE nama='$username' AND password='$password'";
    $hasil = mysqli_query($conn, $sql);

    if (mysqli_num_rows($hasil) == 1) {
        header("Location: Penghuni/FramesetPenghuni.html");
        exit();
    } else {
        echo "Username atau password salah!";
    }
?>

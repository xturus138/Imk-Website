<?php
    require("koneksi.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sqlP = "SELECT * FROM penghuni WHERE username = '$username' AND password = '$password'";
    $sqlB = "SELECT * FROM pemilik WHERE username = '$username' AND password = '$password'";
    $hasilP = mysqli_query($conn, $sqlP);
    $hasilB = mysqli_query($conn, $sqlB);

    if (mysqli_num_rows($hasilP) == 1) {
        header("Location: Penghuni/FramesetPenghuni.php");
        exit();
    } else if (mysqli_num_rows($hasilB) == 1) {
        header("Location: Pemilik/FramesetPemilik.php");
        exit();
    }else{
        echo "<script>alert('Username atau password salah!'); window.history.back();</script>";
    }
       
    
?>

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
    } else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alert</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .alert {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 300px;
            text-align: center;
        }
        .alert h2 {
            margin-bottom: 10px;
            color: #333;
        }
        .alert p {
            margin-bottom: 20px;
            color: #666;
        }
        .alert .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .alert .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body style="background-color:paleturquoise;">
    <div class="alert">
        <h2>Pesan Peringatan</h2>
        <p>Username atau password salah!</p>
        <a href="javascript:history.back()" class="btn">OK</a>
    </div>
</body>
</html>
<?php } ?>

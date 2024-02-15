<html>
<head>
    <title>Kost</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../w3.css">
    <style>
        .navbar-button {
                width: 10% !important;
            }
    </style>
    <script>
        function Logout() {
            window.top.location.href = "alert.php"; 
        }
    </script>
</head>
<body>
    <div class="w3-bar w3-blue">
        <a href="PenghuniLobby.php" target="bawah">
            <button class="w3-bar-item w3-button  w3-border-right navbar-button">Lobby</button>
        </a>
        <a href="laporanPenghuni.php" target="bawah">
            <button class="w3-bar-item w3-button  w3-border-right navbar-button">Laporan</button>
        </a>
        <a href="listKamarPenguni.php" target="bawah">
            <button class="w3-bar-item w3-button  w3-border-right navbar-button">List Kamar</button>
        </a>
        <button class="w3-bar-item w3-button w3-right w3-red  w3-border-right navbar-button" onclick="Logout()">Logout</button>
    </div>
</body>
</html>

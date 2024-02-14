<html>
    <head>
    <title>Aplikasi Kosan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../w3.css">
    <script>
        function Logout() {
            window.top.location.href = "alert.php"; 
        }
    </script>
<body>
    <div class="w3-bar w3-blue">
        <a href="PemilikLobby.php" target="bawah">
            <button class="w3-bar-item w3-button  w3-border-right">Lobby</button></a>
        <a href="PengumumanPemilik.php" target="bawah">
            <button class="w3-bar-item w3-button  w3-border-right">Pengumuman</button></a>
        <a href="LaporanPemilik.php" target="bawah">
            <button class="w3-bar-item w3-button  w3-border-right">Laporan</button></a>
        <a href="PembayaranPemilik.php" target="bawah">
            <button class="w3-bar-item w3-button  w3-border-right">Pembayaran</button></a>
        <a href="ListKamarPemilik.php" target="bawah">
            <button class="w3-bar-item w3-button  w3-border-right">List Kamar</button></a>
        <button class="w3-bar-item w3-button w3-right w3-red  w3-border-right" onclick="Logout()">Logout</button>
    </div>
</body>
</html>
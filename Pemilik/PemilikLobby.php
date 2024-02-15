<!DOCTYPE html>
<html>
<title>Pemilik Lobby</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../w3.css">
<body style="background-color:paleturquoise;">
    <div class="w3-animate-zoom">
        <style>
            .profile-container {
                display: flex;
                align-items: top;
                justify-content: center;
            }
        </style>
        <?php
            require("../koneksi.php");
            $sqlPengumuman = "SELECT isipengumuman FROM pengumuman";
            $resultPengumuman = mysqli_query($conn, $sqlPengumuman);
            $pengumumanList = "";
            while ($row = mysqli_fetch_assoc($resultPengumuman)) {
                $pengumumanList .= $row['isipengumuman'] . "\n";
            }

            $sqlLaporan = "SELECT isilaporan FROM laporan";
            $resultLaporan = mysqli_query($conn, $sqlLaporan);
            $laporanList = "";
            while ($row = mysqli_fetch_assoc($resultLaporan)) {
                $laporanList .= $row['isilaporan'] . "\n";
            }
        ?>
        <div class="w3-col w3-container w3-margin-top profile-container" style="width:60%; position: relative;">
            <label style="position: absolute; pointer-events: none;"><h3>Pengumuman</h3></label>
            <textarea class="w3-input w3-border w3-round-xxlarge w3-center" id="PPenghuni" readonly style="padding-top: 75px; height: 700px; font-size: 16px;"><?php echo $pengumumanList; ?></textarea>
        </div>
        <div class="w3-col w3-container w3-margin-top profile-container" style="width:40%; position: relative;">
            <label style="position: absolute; pointer-events: none;"><h3>Laporan Terbaru</h3></label>
            <textarea class="w3-input w3-border w3-round-xxlarge w3-center" id="LaporanTerbaru" readonly style="padding-top: 75px; height: 700px; font-size: 16px;">Kamar 1 :<?php echo $laporanList; ?></textarea>
        </div>        
    </div>
</body>
</html>

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
        <div class="w3-col w3-container w3-margin-top profile-container" style="width:60%; position: relative;">
            <label style="position: absolute; pointer-events: none;"><h3>Pengumuman</h3></label>
            <textarea class="w3-input w3-border w3-round-xxlarge" id="PPenghuni" readonly style="padding-top: 75px; height: 700px;"></textarea>
        </div>
        <div class="w3-col w3-container w3-margin-top profile-container" style="width:40%; position: relative;">
            <label style="position: absolute; pointer-events: none;"><h3>Laporan Terbaru</h3></label>
            <textarea class="w3-input w3-border w3-round-xxlarge" id="LaporanTerbaru" readonly style="padding-top: 75px; height: 700px;"></textarea>
        </div>        
    </div>
</body>
</html>       
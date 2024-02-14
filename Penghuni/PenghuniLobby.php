<?php
require("../database.php");
require("../koneksi.php");
?>
<!DOCTYPE html>
<html>
<title>Penghuni Lobby</title>
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
        <div class="w3-col w3-container w3-margin-top profile-container" style="width:15%; position: relative;">
            <label style="position: absolute; pointer-events: none;">
                <h3>Profile</h3>
            </label>
            <?php
            $db = new database();
            $datas = $db->tampil_data("SELECT * FROM profilepenghuni");

            foreach ($datas as $data) {
            ?>
                <textarea class="w3-input w3-border w3-round-large" id="ProfilePenghuni" readonly style="padding-top: 75px; height: 200px;">Halo <?= $data['nama']?></textarea>
            <?php
            }
            ?>
        </div>
        <div class="w3-col w3-container w3-margin-top profile-container" style="width:70%; position: relative;">
            <label style="position: absolute; pointer-events: none;">
                <h3>Pengumuman</h3>
            </label>
            <textarea class="w3-input w3-border w3-round-large" id="PPenghuni" readonly style="padding-top: 75px; height: 700px;"></textarea>
        </div>
        <div class="w3-col w3-container w3-margin-top profile-container" style="width:15%; position: relative;">
            <label style="position: absolute; pointer-events: none;">
                <h3>Jatuh Tempo</h3>
            </label>
            <textarea class="w3-input w3-border w3-round-large" id="JtPenghuni" readonly style="padding-top: 75px; height: 150px;"></textarea>
        </div>
    </div>

</body>

</html>
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
            
            <textarea class="w3-input w3-border w3-round-large" id="ProfilePenghuni" readonly style="padding-top: 50px; height: 300px;">
            <?php
            $db = new database();
            $datas = $db->tampil_data("SELECT * FROM penghuni");

            foreach ($datas as $data) {
                echo "\n" ;
                echo "Username: ". $data['username']. "\n";
                echo "Nama :". $data['nama']. "\n";
                echo "TglLahir :". $data['tglLahir']. "\n";
                echo "Alamat :". $data['alamat']. "\n";
                echo "Status :". $data['perkawinan']. "\n";
                echo "Pekerjaan :". $data['pekerjaan']. "\n";
                echo "Kamar :". $data['listkamar']. "\n";
                echo "Kelamin: Laki-Laki";
            }
            
            ?>

            <?php
                $sqlPengumuman = "SELECT isipengumuman FROM pengumuman";
                $resultPengumuman = mysqli_query($conn, $sqlPengumuman);
                $pengumumanList = "";
                while ($row = mysqli_fetch_assoc($resultPengumuman)) {
                    $pengumumanList .= $row['isipengumuman'] . "\n";
                }
            ?>
        </textarea>
        </div>
        <div class="w3-col w3-container w3-margin-top profile-container" style="width:70%; position: relative;">
            <label style="position: absolute; pointer-events: none;">
                <h1>Pengumuman</h1>
            </label>
            <textarea class="w3-input w3-border w3-round-large w3-center" id="PPenghuni" readonly style="padding-top: 75px; height: 700px; font-size: 20px;"><?php echo $pengumumanList; ?></textarea>
        </div>
        <div class="w3-col w3-container w3-margin-top profile-container" style="width:15%; position: relative;">
            <label style="position: absolute; pointer-events: none;">
                <h3>Jatuh Tempo</h3>
                <p>08-09-2024</p>
            </label>
            <textarea class="w3-input w3-border w3-round-large" id="JtPenghuni" readonly style="padding-top: 75px; height: 150px;"></textarea>
        </div>
    </div>
</body>
</html>
    <html>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../w3.css">
        <head>
            <title>LaporanMahasiswa</title>
        </head>
        <body style="background-color:paleturquoise;">
            <div>
                <style>
                    .w3-input::placeholder {
                        text-align: left;
                        padding: 10px;
                        font-size: 14px; 
                        position: relative;
                        color: black;
                        top: 0;
                        left: 0;
                        width: 100%;
                    }
                </style>
                <?php
                    require("../koneksi.php");
                    $sqlP = "SELECT listkamar FROM penghuni";
                    $hasilP = mysqli_query($conn, $sqlP);
                    $rowP = mysqli_fetch_assoc($hasilP);
                    $listkamar = $rowP['listkamar'];
                    $sqlL = "SELECT isilaporan FROM laporan WHERE listkamarlaporan = '$listkamar'";
                    $hasilL = mysqli_query($conn, $hasilL);
                    while($rowL = mysqli_fetch_assoc($hasilL)) {
                        echo $rowL['isilaporan'] . "<br>";
                    }
                ?>
                <script>
                    function kirim(){
                        <?php
                            $sql = "INSERT INTO isilaporan FROM laporan";
                        ?>
                    }
                </script>
            </div>
            <div class="w3-container w3-margin w3-animate-zoom">
                <div style="position: relative;">
                    <label for="inlap" style="position: absolute; top: 5px; left: 10px;">Isi Laporan Disini</label>
                    <textarea id="inlap" class="w3-input w3-border w3-round-large" name="inputLaporan" style="width: 100%; height: 150px; overflow:hidden; padding-top: 30px;"></textarea>
                </div>
                <button class="w3-button w3-green w3-margin-top w3-round-xxlarge" style="width:15%">Kirim</button>
                <div style="position: relative;">
                    <label for="outlap" style="position: absolute; top: 5px; left: 10px;">Laporan Anda</label>
                    <textarea id="outlap" class="w3-input w3-border w3-round-large w3-margin-top" name="outputLaporan" readonly type="text" style="width: 100%; height: 150px; overflow:hidden; padding-top: 30px;"></textarea>
                </div>
            </div>
        </body>
    </html>
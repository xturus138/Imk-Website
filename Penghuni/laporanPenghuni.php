<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../w3.css">
    <title>LaporanMahasiswa</title>
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
</head>
<body style="background-color:paleturquoise;">
    <?php
        require("../koneksi.php");
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['inputLaporan'])) {
            $laporan = $_POST['inputLaporan'];
            $sql = "UPDATE laporan SET isilaporan = '$laporan'";
            if(mysqli_query($conn, $sql)) {
                echo '<script>alert("Laporan berhasil diperbarui. Menunggu di konfirmasi pemilik!");</script>';
            } else {
                echo '<script>alert("Laporan tidak berhasil diperbaharui.");</script>';
            }
        }
        $sqlLaporan = "SELECT isilaporan FROM laporan";
        $resultLaporan = mysqli_query($conn, $sqlLaporan);
        $row = mysqli_fetch_assoc($resultLaporan);
        $laporan_terbaru = $row['isilaporan'];
    ?>

    <div class="w3-container w3-margin w3-animate-zoom">
        <form method="post" action="">
            <div style="position: relative;">
                <label for="inlap" style="position: absolute; top: 5px; left: 10px;">Isi Laporan Disini</label>
                <textarea id="inlap" class="w3-input w3-border w3-round-large" name="inputLaporan" style="width: 100%; height: 150px; overflow:hidden; padding-top: 30px;"></textarea>
            </div>
            <button type="submit" class="w3-button w3-green w3-margin-top w3-round-xxlarge" style="width:15%">Kirim</button>
        </form>
        <div style="position: relative;">
            <label for="outlap" style="position: absolute; top: 5px; left: 10px;">Laporan Terbaru</label>
            <textarea id="outlap" class="w3-input w3-border w3-round-large w3-margin-top" name="outputLaporan" readonly type="text" style="width: 100%; height: 150px; overflow:hidden; padding-top: 30px;"></textarea>
        </div>
    </div>

    <script>
        document.getElementById("outlap").value = "<?php echo $laporan_terbaru; ?>";
    </script>
</body>
</html>

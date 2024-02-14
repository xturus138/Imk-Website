<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../w3.css">
    <title>Pengumuman</title>
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
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['inputPengumuman'])) {
            $updatedPengumuman = $_POST['inputPengumuman'];
            $sqlUpdate = "UPDATE pengumuman SET isipengumuman = '$updatedPengumuman'"; 
            if(mysqli_query($conn, $sqlUpdate)) {
                echo '<script>alert("Pengumuman berhasil ditambahkan.");</script>';
            } else {
                echo '<script>alert("Pengumuman tidak berhasil ditambahkan.");</script>';
            }
        }
        $sqlPengumuman = "SELECT isipengumuman FROM pengumuman";
        $resultPengumuman = mysqli_query($conn, $sqlPengumuman);
        $pengumumanList = "";
        while ($row = mysqli_fetch_assoc($resultPengumuman)) {
            $pengumumanList .= $row['isipengumuman'] . "\n";
        }
    ?>

    <div class="w3-container w3-margin w3-animate-zoom">
        <form method="post" action="">
            <div style="position: relative;">
                <label for="inPengumuman" style="position: absolute; top: 5px; left: 10px;">Tulis Pengumuman Disini</label>
                <textarea id="inPengumuman" class="w3-input w3-border w3-round-large" name="inputPengumuman" style="width: 100%; height: 150px; overflow:hidden; padding-top: 30px;"></textarea>
            </div>
            <button type="submit" class="w3-button w3-green w3-margin-top w3-round-xxlarge" style="width:15%">Kirim</button>
        </form>
        <div style="position: relative;">
            <label for="outPengumuman" style="position: absolute; top: 5px; left: 10px;">List Pengumuman</label>
            <textarea id="outPengumuman" class="w3-input w3-border w3-round-large w3-margin-top" name="outputPengumuman" readonly type="text" style="width: 100%; height: 150px; overflow:hidden; padding-top: 30px;"><?php echo $pengumumanList; ?></textarea>
        </div>
    </div>

</body>
</html>

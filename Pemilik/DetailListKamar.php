<!DOCTYPE html>
<html>
<head>
    <title>List Kamar 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../w3.css">
    <style>
        .ccontainer {
            display: flex;
            align-items: top;
            justify-content: center;
        }
    </style>
</head>
<body style="background-color:paleturquoise;">
    <div class="w3-animate-zoom">
        <?php
        require("../koneksi.php");
        $listkamar = $_POST['listkamar'];
        $sql = "SELECT * FROM penghuni WHERE listkamar = '$listkamar'";
        $hasil = mysqli_query($conn, $sql);

        $dataPenghuni = "";
        $data = "";
        while ($row = mysqli_fetch_assoc($hasil)) {
            $dataPenghuni .= $row['nama'] . " ";

            $data .= "NIK: " . $row['nik'] . "\n";
            $data .= "Nama: " . $row['nama'] . "\n";
            $data .= "Tanggal Lahir: " . $row['tglLahir'] . "\n";
            $data .= "Jenis Kelamin: " . $row['jenisKelamin'] . "\n";
            $data .= "Alamat: " . $row['alamat'] . "\n";
            $data .= "Perkawinan: " . $row['perkawinan'] . "\n";
            $data .= "Pekerjaan: " . $row['pekerjaan'] . "\n";
            $data .= "List Kamar: " . $row['listkamar'] . "\n\n";
            $data .= "Username: " . $row['username'] . "\n";
            $data .= "Password: " . $row['password'] . "\n";
        }
        ?>
        <div class="w3-col w3-container w3-margin-top ccontainer" style="width:100%; position: relative;">
            <label style="position: absolute; pointer-events: none;"><h3>Data Penghuni Kamar - <?php echo $dataPenghuni; ?></h3></label>
            <textarea class="w3-input w3-border w3-round-xxlarge" id="DataPenghuni" readonly style="padding-top: 75px; height: 550px;"><?php echo $data; ?></textarea>
        </div>
        <button class="w3-button w3-green w3-margin-top w3-round-xxlarge" style="width:10%; position: fixed; bottom: 50px; right: 165px;">EDIT</button>
        <button class="w3-button w3-green w3-margin-top w3-round-xxlarge" style="width:10%; position: fixed; bottom: 50px; right: 15px;">HAPUS</button>
    </div>
</body>
</html>

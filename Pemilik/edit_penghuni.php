<?php
require("../koneksi.php");
if(isset($_GET['listkamar'])) {
    $listkamar = $_GET['listkamar'];
    $sql = "SELECT * FROM penghuni WHERE listkamar = '$listkamar'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
?>
            <!DOCTYPE html>
            <html>
            <head>
                <title>Edit Data Penghuni</title>
                <link rel="stylesheet" href="../w3.css">
            </head>
            <body style="background-color: paleturquoise;">
                <div class="w3-container w3-margin-top" style="max-width: 500px; margin: auto;">
                    <h2 class="w3-center">Edit Data Penghuni</h2>
                    <form class="w3-container" action="" method="POST">
                        <input type="hidden" name="listkamar" value="<?php echo $listkamar; ?>">
                        <label class="w3-text-blue">NIK</label>
                        <input class="w3-input w3-border" type="text" name="nik" value="<?php echo $row['nik']; ?>">
                        <label class="w3-text-blue">Nama</label>
                        <input class="w3-input w3-border" type="text" name="nama" value="<?php echo $row['nama']; ?>">
                        <label class="w3-text-blue">Tanggal Lahir</label>
                        <input class="w3-input w3-border" type="text" name="tglLahir" value="<?php echo $row['tglLahir']; ?>">
                        <label class="w3-text-blue">Jenis Kelamin</label>
                        <input class="w3-input w3-border" type="text" name="jenisKelamin" value="<?php echo $row['jenisKelamin']; ?>">
                        <label class="w3-text-blue">Alamat</label>
                        <input class="w3-input w3-border" type="text" name="alamat" value="<?php echo $row['alamat']; ?>">
                        <label class="w3-text-blue">Perkawinan</label>
                        <input class="w3-input w3-border" type="text" name="perkawinan" value="<?php echo $row['perkawinan']; ?>">
                        <label class="w3-text-blue">Pekerjaan</label>
                        <input class="w3-input w3-border" type="text" name="pekerjaan" value="<?php echo $row['pekerjaan']; ?>">
                        <label class="w3-text-blue">List Kamar</label>
                        <input class="w3-input w3-border" type="text" name="listkamar" value="<?php echo $row['listkamar']; ?>">
                        <center>
                        <button class="w3-btn w3-green w3-round-large w3-margin-top" type="submit" style="width: 200px;">Simpan Perubahan</button>
                        <a href="listKamarPemilik.php" class="w3-btn w3-green w3-round-large w3-margin-top" style="width: 200px;">Kembali</a>
                        </center>
                    </form>
                </div>
            </body>
            </html>
<?php
        }
    } else {
        echo "Data penghuni tidak ditemukan.";
    }
} else {
    echo "Parameter listkamar tidak ditemukan.";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if(isset($_POST['listkamar']) && isset($_POST['nik']) && isset($_POST['nama']) && isset($_POST['tglLahir']) && isset($_POST['jenisKelamin']) && isset($_POST['alamat']) && isset($_POST['perkawinan']) && isset($_POST['pekerjaan'])) {
        
        $listkamar = $_POST['listkamar'];
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $tglLahir = $_POST['tglLahir'];
        $jenisKelamin = $_POST['jenisKelamin'];
        $alamat = $_POST['alamat'];
        $perkawinan = $_POST['perkawinan'];
        $pekerjaan = $_POST['pekerjaan'];
        $sql = "UPDATE penghuni SET nik='$nik', nama='$nama', tglLahir='$tglLahir', jenisKelamin='$jenisKelamin', alamat='$alamat', perkawinan='$perkawinan', pekerjaan='$pekerjaan' WHERE listkamar='$listkamar'";
        if(mysqli_query($conn, $sql)) {
            echo '<script>alert("Perubahan Telah Disimpan."); window.location.href = "listKamarPemilik.php";</script>';
        } else {
            echo '<script>alert("Gagal Menyimpan Perubahan.");</script>' . mysqli_error($conn);
        }
    } else {
        echo '<script>alert("Semua Data Diperlukan!");</script>';
    }
}
mysqli_close($conn);
?>

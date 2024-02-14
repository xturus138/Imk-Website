<!DOCTYPE html>
<html>
<title>List Kamar 2</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../w3.css">
<body style="background-color:paleturquoise;">
    <div class="w3-animate-zoom">
    <style>
        .ccontainer {
            display: flex;
            align-items: top;
            justify-content: center;
          }
    </style>
    <?php
        require("../koneksi.php");
        $listkamar = $_POST['listkamar'];
        $sql = "SELECT * FROM penghuni WHERE listkamar = '$listkamar'";
        $hasil = mysqli_query($conn, $sql);
    ?>
        <div class="w3-col w3-container w3-margin-top ccontainer" style="width:100%; position: relative;">
            <label style="position: absolute; pointer-events: none;"><h3>Data Penghuni Kamar -</h3></label>
            <textarea class="w3-input w3-border w3-round-xxlarge" id="DataPenghuni" readonly style="padding-top: 75px; height: 550px;"></textarea>
        </div>
        <button class="w3-button w3-green w3-margin-top w3-round-xxlarge" style="width:10%; position: fixed; bottom: 50px; right: 165px;">EDIT</button>
        <button class="w3-button w3-green w3-margin-top w3-round-xxlarge" style="width:10%; position: fixed; bottom: 50px; right: 15px;">HAPUS</button>        
    </div>
</body>
</html> 

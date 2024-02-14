<?php
    class database {
        var $host = "localhost";
        var $username = "root";
        var $password = "";
        var $database = "kosan";
        var $koneksi = "";
        function __construct() {
            $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
            if (mysqli_connect_errno()) {
                echo "Koneksi database gagal : " . mysqli_connect_error();
            }
        }

        function tampil_data($query) {
            $sql = mysqli_query($this->koneksi, $query);
            while ($data = mysqli_fetch_array($sql)) {
                $hasil[] = $data;
            }
            return $hasil;
        }

        function query_data($query) {
            $sql = mysqli_query($this->koneksi, $query);
            if($sql = true) {
                return true;
            } else {
                return false;
            }
        }
        function get_data($query) {
            $sql = mysqli_query($this->koneksi, $query);
            return $sql->fetch_assoc();
        }
    }
?>
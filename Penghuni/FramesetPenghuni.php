<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Kosan</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden; 
        }
        #menuatas {
            height: 4.9%;
            width: 100%;
            border: none;
            display: block; 
        }
        #bawah {
            height: 100%;
            width: 100%;
            border: none;
            display: block; 
        }

        /* Media queries untuk responsif */
        @media screen and (max-width: 768px) {
            /* Aturan CSS yang akan diterapkan saat lebar layar maksimum 768px */
            #menuatas {
                height: 10%; /* Misalnya, ubah tinggi menu atas */
            }
            #bawah {
                /* Aturan CSS tambahan jika diperlukan */
            }
        }

        /* Tambahkan media queries lain sesuai kebutuhan */
    </style>
</head>
<body>

<iframe id="menuatas" src="menuAtasPenghuni.php"></iframe>
<iframe id="bawah" src="PenghuniLobby.php" name="bawah"></iframe>

</body>
</html>

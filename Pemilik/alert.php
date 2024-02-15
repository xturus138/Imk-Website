<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alert</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: center;
            animation: zoomIn 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) both;
        }
        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        h2 {
            margin-top: 0;
            color: #333;
        }
        .button1 {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .button2 {
            padding: 10px 20px;
            font-size: 16px;
            background-color: red;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: gray;
        }
    </style>
</head>
<body style="background-color:paleturquoise;">
    <div class="container">
        <h2>Apakah Anda yakin ingin keluar?</h2>
        <button class="button2" onclick="redirect('../index.html')">Ya</button>
        <button class="button1" onclick="redirect('FramesetPemilik.php')">Tidak</button>
    </div>

    <script>
        function redirect(url) {
            window.top.location.href = url;
        }
    </script>
</body>
</html>

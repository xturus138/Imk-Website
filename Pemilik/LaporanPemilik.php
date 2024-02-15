<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../w3.css">
    <style>

        .marginCustom {
            margin-top: 20px;
            margin-bottom: 0px;
            margin-right: 20px;
            margin-left: 0px;
          }

        .w3-button {
            width: 200%;
            height: 150px;
            background-color: white;
            border: 1px solid black;
            margin: 5px;
            position: relative;
            text-align: center;
            cursor: pointer;
        }

        .occupied {
            background-color: #d3d3d3;
        }

        .status-text {
            position: absolute;
            bottom: 5px;
            right: 5px;
            font-size: 25px;
            color: black;
        }

        .w3-button h1 {
            position: absolute;
            top: 5px;
            left: 5px;
            font-size: 30px;
            color: black;
            margin: 0;
            padding: 0;
        }

    </style>
</head>
<body style="background-color:paleturquoise;">

<div class="w3-row w3-animate-opacity">
    <div class="w3-half w3-container">
        <div class="w3-row">
            <div class="w3-col marginCustom">
                <button class="w3-button w3-ripple w3-hover"><h1>Kamar 1 Bocor</h1><span class="status-text">06-06-2024</span></button>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col marginCustom">
                <button class="w3-button w3-ripple w3-hover"><h1>Kamar 2 Berisik</h1><span class="status-text">06-06-2024</span></button>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col marginCustom">
                <button class="w3-button w3-ripple w3-hover"><h1>Kamar 5 Bocor</h1><span class="status-text">06-06-2024</span></button>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col marginCustom">
                <button class="w3-button w3-ripple w3-hover"><h1>Sampah Depan Numpuk</h1><span class="status-text">06-06-2024</span></button>
            </div>
        </div>
    </div>
</div>

</body>
</html>

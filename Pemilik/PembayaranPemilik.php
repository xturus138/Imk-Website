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
            width: 100%;
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
            left: 5px;
            font-size: 30px;
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

        .checkbox-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        input.largerCheckbox {
            width: 30px;
            height: 30px;
        }

        .custom-checkbox {
            position: absolute;
            top: 50%;
            right: 5px;
            transform: translateY(-50%);
            width: 50px; 
            height: 50px; 
        }

    </style>
</head>
<body style="background-color:paleturquoise;">

<div class="w3-row w3-animate-opacity">
    <div class="w3-half w3-container">
        <div class="w3-row">
            <div class="w3-col marginCustom">
                <button class="w3-button occupied w3-ripple w3-hover-green" >
                    <h1>Kamar 1</h1><span class="status-text">Jatuh Tempo</span>
                    <input type="checkbox" id="kamar1" name="kamar1" value="Kamar1" class="custom-checkbox"></button>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col marginCustom">
                <button class="w3-button occupied w3-ripple w3-hover-green">
                    <h1>Kamar 2</h1><span class="status-text">Jatuh Tempo</span>
                    <input type="checkbox" id="kamar2" name="kamar2" value="kamar2" class="custom-checkbox"></button>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col marginCustom">
                <button class="w3-button occupied w3-ripple w3-hover-green">
                    <h1>Kamar 3</h1><span class="status-text">Jatuh Tempo</span>
                    <input type="checkbox" id="kamar3" name="kamar3" value="kamar3" class="custom-checkbox"></button>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col marginCustom">
                <button class="w3-button occupied w3-ripple w3-hover-green">
                <h1>Kamar 4</h1><span class="status-text">Jatuh Tempo</span>
                <input type="checkbox" id="kamar4" name="kamar4" value="kamar4" class="custom-checkbox"></button>
            </div>
        </div>
    </div>
    <div class="w3-half w3-container">
        <div class="w3-row">
            <div class="w3-col marginCustom">
                <button class="w3-button occupied w3-ripple w3-hover-green">
                <h1>Kamar 5</h1><span class="status-text">Jatuh Tempo</span>
                <input type="checkbox" id="kamar5" name="kamar5" value="kamar5" class="custom-checkbox"></button>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col marginCustom">
                <button class="w3-button occupied w3-ripple w3-hover-green">
                <h1>Kamar 6</h1><span class="status-text">Jatuh Tempo</span>
                <input type="checkbox" id="kamar6" name="kamar6" value="kamar6" class="custom-checkbox"></button>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col marginCustom">
                <button class="w3-button w3-ripple w3-hover-green occupied">
                <h1>Kamar 7</h1><span class="status-text">Jatuh Tempo</span>
                <input type="checkbox" id="kamar7" name="kamar7" value="Kamar7" class="custom-checkbox"></button>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col marginCustom">
                <button class="w3-button w3-ripple w3-hover-green">
                <h1>Kamar 8</h1><span class="status-text">Kosong</span>
            </div>
        </div>
    </div>
</div>

</body>
</html>

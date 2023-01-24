<?php
$display = "";

if (isset($_POST['equals'])) {
    $display = eval('return ' . $_POST['display'] . ';');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <style>

    /* menu*/
        .menu-container {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .menu-button {
            background-color: #00bfff; /* or any color you like */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.2rem;
        }

        .menu-button:hover {
            background-color: #0095d9; /* or any color you like */
        }

        .menu {
            display: none;
            position: absolute;
            top: 50px;
            right: 20px;
            background-color: #fff;
            border-radius: 5px;
            padding: 10px;
        }

        .menu-item {
            color: #000;
            display: block;
            text-decoration: none;
            margin-bottom: 10px;
        }

        .menu-item:hover {
            color: #00bfff;
        }

        .menu-item {
            color: #000;
            display: block;
            text-decoration: none;
            margin-bottom: 10px;
            padding: 10px 20px;
            background-color: #00bfff; /* or any color you like */
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .menu-item:hover {
            background-color: #0095d9; /* or any color you like */
        }


    /* Calculator Container */
    #calculator {
    width: 250px;
    height: 350px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f3f3f3;
    border-radius: 10px;
}

    #display {
        width: 100%;
        height: 50px;
        margin-bottom: 20px;
        padding: 10px;
        font-size: 1.5em;
        text-align: right;
        background-color: #ffffff;
        border: none;
        border-radius: 5px;
    }

    button {
        width: 60px;
        height: 60px;
        margin: 0;
        padding: 0;
        font-size: 1.5em;
        background-color: #ffffff;
        border: 1px solid #cccccc;
        border-radius: 5px;
        color: #333333;
        transition: all 0.2s;
    }

    button:hover {
        background-color: #cccccc;
    }

    #clear {
        width: 100%;
        margin-top: 20px;
        background-color: #ff0000;
        color: #ffffff;
    }
    </style>
</head>
    <body>

    <div class="menu-container">
    <button class="menu-button" onclick="toggleMenu()">Menu</button>
    <div class="menu" id="menu">
        <a href="https://ipaiotmh.azurewebsites.net" class="menu-item">Form</a>
        <a href="https://ipaiotmh.azurewebsites.net/data.txt" class="menu-item">Data</a>
        <a href="https://ipaiotmh.azurewebsites.net/calculator.php" class="menu-item">Calc</a>
    </div>
</div>


    <form>
        <div id="calculator">
            <input type="text" id="display">
            <br>
            <button onclick="performOperation('7')">7</button>
            <button onclick="performOperation('8')">8</button>
            <button onclick="performOperation('9')">9</button>
            <button onclick="performOperation('/')">/</button>
            <br>
            <button onclick="performOperation('4')">4</button>
            <button onclick="performOperation('5')">5</button>
            <button onclick="performOperation('6')">6</button>
            <button onclick="performOperation('*')">*</button>
            <br>
            <button onclick="performOperation('1')">1</button>
            <button onclick="performOperation('2')">2</button>
            <button onclick="performOperation('3')">3</button>
            <button onclick="performOperation('-')">-</button>
            <br>
            <button onclick="performOperation('0')">0</button>
            <button onclick="performOperation('.')">.</button>
            <button id="equals" onclick="calculate()">=</button>
            <button onclick="performOperation('+')">+</button>
            <br>
            <button type="button" id="clear" onclick="clearDisplay()">clear</button>
        </div>
    </form>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>

    function appendToDisplay(btn) {
        var btnValue = btn.value;
        document.getElementById("display").value += btnValue;
    }

    function calculate() {
        let display = document.getElementById("display").value;
        if (display === "") {
            swal.fire({
                title: "Invalid Input!",
                text: "Please enter a valid input before pressing equals.",
                icon: "error",
                showConfirmButton: true,
                confirmButtonText: "Ok",
            });
            return;
        }
        var expr = document.getElementById("display").value;
        var result = eval(expr);
        document.getElementById("display").value = result;
    }

    function clearDisplay() {
        document.getElementById("display").value = "";
    }

    function toggleMenu() {
        let menu = document.getElementById("menu");
        menu.style.display = (menu.style.display === "block") ? "none" : "block";
    }

    document.getElementById("equals").addEventListener("click", function(event){
        event.preventDefault();
        calculate();
    });

</script>

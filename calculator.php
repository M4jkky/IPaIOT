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
        .calculator {
            text-align:center;
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #ccc;
            display: flex;
            flex-wrap: wrap;
        }

        #display {
            width: 100%;
            height: 50px;
            font-size: 1.5rem;
            padding: 10px -50px;
            border-radius: 5px;
            border: none;
            box-shadow: 0px 0px 5px #ccc;
            text-align: center;
            margin: 20px auto;
            background-color: #fff;
            color: #333;
        }

        .row {
            width: 100%;
            display: flex;
        }

        input[type="submit"] {
            background-color : #32a869;
            width: 25%;
            height: 40px;
            font-size: 1.2rem;
            margin: 5px;
            border-radius: 5px;
            border: none;
            color: #333;
            transition: all 0.2s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: #c8cf48;
            cursor: pointer;
        }

        input[type="button"] {
            width: 25%;
            height: 40px;
            font-size: 1.2rem;
            margin: 5px;
            border-radius: 5px;
            border: none;
            background-color: #ddd;
            color: #333;
            transition: all 0.2s ease-in-out;
        }

        input[type="button"]:hover {
            background-color: #ccc;
            cursor: pointer;
        }

        input[name="plus"],
        input[name="minus"],
        input[name="times"],
        input[name="divide"] {
            background-color: #f44336;
            color: #fff;
        }

        input[name="plus"]:hover,
        input[name="minus"]:hover,
        input[name="times"]:hover,
        input[name="divide"]:hover {
            background-color: #e53935;
        }

        #clear {
            width: 29%;
            height: 50px;
            font-size: 1.2rem;
            margin: 5px;
            border-radius: 5px;
            border: none;
            background-color: #38c2c2;
            color: #fff;
            transition: all 0.2s ease-in-out;
            display: inline-block;
            align-self: center;
            text-align: center;
            margin-left: 10px;
        }   

        #clear:hover {
            background-color: #156b6b;
        }
        
        .display-wrapper {
            display: flex;
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

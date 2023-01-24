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
            padding: 10px -35px;
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
        input[name="divide"]:hover {
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
            width: 25%;
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
    <div class="calculator">
    <form method="post" action="">
        <div class="display-wrapper">
            <input type="text" id="display" name="display" value="<?php echo $display; ?>" readonly/>
            <button id="clear" onclick="clearDisplay()">C</button>
        </div>
        <div class="row">
            <input type="button" name="one" value="1" onclick="appendToDisplay(this)"/>
            <input type="button" name="two" value="2" onclick="appendToDisplay(this)"/>
            <input type="button" name="three" value="3" onclick="appendToDisplay(this)"/>
            <input type="button" name="plus" value="+" onclick="appendToDisplay(this)"/>
        </div>
        <div class="row">
            <input type="button" name="four" value="4" onclick="appendToDisplay(this)"/>
            <input type="button" name="five" value="5" onclick="appendToDisplay(this)"/>
            <input type="button" name="six" value="6" onclick="appendToDisplay(this)"/>
            <input type="button" name="minus" value="-" onclick="appendToDisplay(this)"/>
        </div>
        <div class="row">
            <input type="button" name="seven" value="7" onclick="appendToDisplay(this)"/>
            <input type="button" name="eight" value="8" onclick="appendToDisplay(this)"/>
            <input type="button" name="nine" value="9" onclick="appendToDisplay(this)"/>
            <input type="button" name="times" value="*" onclick="appendToDisplay(this)"/>
        </div>
        <div class="row">
            <input type="button" name="dot" value="." onclick="appendToDisplay(this)"/>
            <input type="button" name="zero" value="0" onclick="appendToDisplay(this)"/>
            <input type="submit" name="equals" value="=" onclick="calculate()"/>
            <input type="button" name="divide" value="/" onclick="appendToDisplay(this)"/>
        </div>
    </form>
</div>

<script>
    function appendToDisplay(btn) {
        var btnValue = btn.value;
        document.getElementById("display").value += btnValue;
    }

    function calculate() {
        var expr = document.getElementById("display").value;
        var result = eval(expr);
        document.getElementById("display").value = result;
    }

    function clearDisplay() {
        document.getElementById("display").value = "";
    }
</script>
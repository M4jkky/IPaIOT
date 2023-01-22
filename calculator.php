<html> 
    <head>
        <style media="screen">
            /* Calculator Container */
            .calculator {
                width: 300px;
                margin: 50px auto;
                background-color: #f5f5f5;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px #ccc;
            }

            /* Calculator Display */
            .calculator input[name="display"] {
                width: 100%;
                height: 50px;
                font-size: 1.5rem;
                padding: 10px;
                border-radius: 5px;
                border: none;
                box-shadow: 0px 0px 5px #ccc;
                text-align: right;
                margin-bottom: 20px;
            }

            /* Calculator Buttons */
            .calculator input[type="button"] {
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

            .calculator input[type="button"]:hover {
                background-color: #ccc;
                cursor: pointer;
            }

            /* Calculator Operators */
            .calculator input[name="plus"],
            .calculator input[name="minus"],
            .calculator input[name="times"],
            .calculator input[name="divide"] {
                background-color: #f44336;
                color: #fff;
            }

            .calculator input[name="plus"]:hover,
            .calculator input[name="minus"]:hover,
            .calculator input[name="times"]:hover,
            .calculator input[name="divide"]:hover {
                background-color: #e53935;
            }
        </style>
    </head>
</html>

<form method="post" action="calculator.php">
    <form method="post" action="calculator.php">
    <input type="text" name="display" value="<?php echo $display; ?>"/>
    <br>
    <input type="button" name="one" value="1" onclick="document.forms[0].display.value+='1'"/>
    <input type="button" name="two" value="2" onclick="document.forms[0].display.value+='2'"/>
    <input type="button" name="three" value="3" onclick="document.forms[0].display.value+='3'"/>
    <input type="button" name="plus" value="+" onclick="document.forms[0].display.value+='+'"/>
    <br>
    <input type="button" name="four" value="4" onclick="document.forms[0].display.value+='4'"/>
    <input type="button" name="five" value="5" onclick="document.forms[0].display.value+='5'"/>
    <input type="button" name="six" value="6" onclick="document.forms[0].display.value+='6'"/>
    <input type="button" name="minus" value="-" onclick="document.forms[0].display.value+='-'"/>
    <br>
    <input type="button" name="seven" value="7" onclick="document.forms[0].display.value+='7'"/>
    <input type="button" name="eight" value="8" onclick="document.forms[0].display.value+='8'"/>
    <input type="button" name="nine" value="9" onclick="document.forms[0].display.value+='9'"/>
    <input type="button" name="times" value="*" onclick="document.forms[0].display.value+='*'"/>
    <br>
    <input type="button" name="clear" value="c" onclick="document.forms[0].display.value=''"/>
    <input type="button" name="zero" value="0" onclick="document.forms[0].display.value+='0'"/>
    <input type="button" name="divide" value="/" onclick="document.forms[0].display.value+='/'"/>
    <input type="submit" name="equals" value="="/>
</form>

<?php
if (isset($_POST['equals'])) {
    $display = eval('return ' . $_POST['display'] . ';');
}
?>

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
    <input type="submit" name="equals" value="="/>
    <input type="button" name="divide" value="/" onclick="document.forms[0].display.value+='/'"/>
</form>

<?php
if (isset($_POST['equals'])) {
    $display = eval('return ' . $_POST['display'] . ';');
}

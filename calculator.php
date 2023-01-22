<form>
    <input type="text" id="display" value="" />
    <br>
    <input type="button" name="one" value="1" onclick="appendToDisplay(this)"/>
    <input type="button" name="two" value="2" onclick="appendToDisplay(this)"/>
    <input type="button" name="three" value="3" onclick="appendToDisplay(this)"/>
    <input type="button" name="plus" value="+" onclick="appendToDisplay(this)"/>
    <br>
    <input type="button" name="four" value="4" onclick="appendToDisplay(this)"/>
    <input type="button" name="five" value="5" onclick="appendToDisplay(this)"/>
    <input type="button" name="six" value="6" onclick="appendToDisplay(this)"/>
    <input type="button" name="minus" value="-" onclick="appendToDisplay(this)"/>
    <br>
    <input type="button" name="seven" value="7" onclick="appendToDisplay(this)"/>
    <input type="button" name="eight" value="8" onclick="appendToDisplay(this)"/>
    <input type="button" name="nine" value="9" onclick="appendToDisplay(this)"/>
    <input type="button" name="times" value="*" onclick="appendToDisplay(this)"/>
    <br>
    <input type="button" name="clear" value="c" onclick="clearDisplay()"/>
    <input type="button" name="zero" value="0" onclick="appendToDisplay(this)"/>
    <input type="button" name="equals" value="=" onclick="calculate()"/>
    <input type="button" name="divide" value="/" onclick="appendToDisplay(this)"/>
</form>

<script>
    function appendToDisplay(btn) {
        document.getElementById("display").value += btn.value;
    }
    function clearDisplay() {
        document.getElementById("display").value = '';
    }
    function calculate() {
        var expression = document.getElementById("display").value;
        var result = eval(expression);
        document.getElementById("display").value = result;
    }
</script>

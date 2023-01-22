<form method="post">
    <input type="text" name="num1" placeholder="Enter first number">
    <br>
    <input type="text" name="num2" placeholder="Enter second number">
    <br>
    <input type="submit" name="add" value="+">
    <input type="submit" name="sub" value="-">
    <input type="submit" name="mul" value="*">
    <input type="submit" name="div" value="/">
</form>

<?php
if(isset($_POST['add'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = $num1 + $num2;
    echo "Result: ".$result;
}
if(isset($_POST['sub'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = $num1 - $num2;
    echo "Result: ".$result;
}
if(isset($_POST['mul'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = $num1 * $num2;
    echo "Result: ".$result;
}
if(isset($_POST['div'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = $num1 / $num2;
    echo "Result: ".$result;
}
?>

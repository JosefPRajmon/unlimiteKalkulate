<?php
if (isset($_POST["submit"])){
    $firstNumber = $_POST["firstNumber"];
    $secondNumber = $_POST["secontNumber"];
}


?>

<form method="post">
    <label>
        <input type="number" name="firstNumber" placeholder="první číslo" value=<?php echo $firstNumber ?> >
    </label>
    <br>
    <label>
        <input type="number" name="secontNumber" placeholder="druhé cislo" value=<?php echo $secondNumber ?> >
    </label>
    <br>
    <input type="submit" name="submit">
</form>

<?php
if (isset($_POST["submit"])){
    echo bcadd($firstNumber, $secondNumber);
}
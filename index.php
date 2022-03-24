<form method="post">
    <label>
        <input type="number" name="firstNumber" placeholder="první číslo">
    </label>
    <br>
    <label>
        <input type="number" name="secontNumber" placeholder="druhé cislo">
    </label>
    <br>
    <input type="submit" name="submit">
</form>

<?php
 if (isset($_POST["submit"])){
     $firstNumber = $_POST["firstNumber"];
     $secondNumber = $_POST["secontNumber"];

     echo bcadd($firstNumber, $secondNumber);
 }


?>
<form method="post">
    <input type="number" name="firstNumber" placeholder="první číslo"><br>
    <input type="number" name="secontNumber" placeholder="druhé cislo"><br>
    <input type="submit" name="submit">
</form>

<?php
 if (isset($_POST["submit"])){
     $firstNumber = $_POST["firstNumber"];
     $secondNumber = $_POST["secontNumber"];

     echo bcadd($firstNumber, $secondNumber);
 }


?>
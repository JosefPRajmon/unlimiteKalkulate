<?php
include "function.php";
if (isset($_POST["submit"])){
    $dataArray = getPost();
    $firstNumber = $dataArray[0];
    $secondNumber = $dataArray[1];
}


?>

<form method="post">
    <label>
        <input type="number" name="firstNumber" placeholder="první číslo" value=<?php if (isset($_POST["submit"])){echo $firstNumber;} ?> >
    +
        <input type="number" name="secontNumber" placeholder="druhé cislo" value=<?php if (isset($_POST["submit"])){ echo $secondNumber;} ?> >
    </label>
    <br>
    <input type="submit" name="submit">
</form>

<?php
if (isset($_POST["submit"])){
    $arrayFirsNumber = str_split(strrev($firstNumber));
    $arraySecondNumber = str_split(strrev($secondNumber));
    $numericRest = 0;
    $number = 0;
    $number = max(count($arrayFirsNumber), count($arraySecondNumber));

    $arraySummary = [];
    for ($i = 0; $i <= $number; $i++){
        $val1 = (int)($arrayFirsNumber[$i] ?? 0);
        $val2 = (int)($arraySecondNumber[$i] ?? 0);
        $summary = $val1 + $val2 + $numericRest;

        $arrayNumber = (string) $summary;
        $arrayNumber = strrev($arrayNumber);
        $arraySummary[] = $summary % 10 ;
        $numericRest = floor($summary / 10);

    }
    $finalNumber ="";
    for ($y = 0; $y <= $number; $y++){
        if ($y == $number & $arraySummary[$y] == 0){
                $arraySummary[$y] = "";
         }
         $finalNumber = $finalNumber . $arraySummary[$y];

    }
    $finalNumber = strrev($finalNumber);
    $finalNumberRepiar = [];

    echo "<br> výsledek je: $finalNumber";


}
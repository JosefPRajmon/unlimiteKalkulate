<?php
if (isset($_POST["submit"])){
    $firstNumber = (string) $_POST["firstNumber"];
    $secondNumber = (string) $_POST["secontNumber"];
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
    $numerickRest = 0;
    $number = 0;
    $number = max(count($arrayFirsNumber), count($arraySecondNumber));

    $arraySumary = [];
    for ($i = 0; $i <= $number; $i++){
        $val1 = (int)($arrayFirsNumber[$i] ?? 0);
        $val2 = (int)($arraySecondNumber[$i] ?? 0);
         $sumary = $val1 + $val2 + $numerickRest;

         $arrayNumber = (string) $sumary ;
        //if (count($arraySumary) > 1){
            $x = count($arraySumary);
            $arrayNumber = strrev($arrayNumber);
                $arraySumary[] =  $arrayNumber[0];
                if (isset($arrayNumber[1]))
                    $numerickRest = (int) $arrayNumber[1];
                else
                    $numerickRest = 0;

    }
    $finalNumber ="";
    for ($y = 0; $y <= $number; $y++){
        if ($y == $number & $arraySumary[$y] == 0){
                $arraySumary[$y] = "";
         }
         $finalNumber = $finalNumber . $arraySumary[$y];

    }
    $finalNumber = strrev($finalNumber);
    $finalNumberRepiar = [];

    echo "<br> výsledek je: $finalNumber";


}
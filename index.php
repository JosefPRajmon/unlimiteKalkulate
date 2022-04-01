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
    $arrayFirsNumber =str_split(strrev($firstNumber));
    $arraySecondNumber = str_split(strrev($secondNumber));
    $numerickRest = 0;
    $number = 0;
    if (count($arrayFirsNumber) > count($arraySecondNumber)){
        $number = count($arrayFirsNumber);
    }
    else{
        $number = count($arraySecondNumber);
    }

    $arraySumary=[];
    for ($i = 0; $i < $number ; $i++){
        $val1 = (int)($arrayFirsNumber[$i] ?? 0);
        $val2 = (int)($arraySecondNumber[$i] ?? 0);
        $sumary = $val1 + $val2 + $numerickRest;


        if($sumary >= 20){
            $sumary = $sumary -20;
            $numerickRest = 2;
            $arraySumary[$i]= $sumary;

        }
        elseif ($sumary >= 10){

            $sumary = $sumary -10;
            $numerickRest = 1;
            $arraySumary[$i]= $sumary;

        }
        else{
            $numerickRest = 0;
            $arraySumary[$i]= $sumary;
        }
    }

    $finalNumber ="";
    for ($y = 0; $y<$number;$y++){
        $finalNumber = $finalNumber . $arraySumary[$y];
    }
    $finalNumber = strrev($finalNumber);
    echo $finalNumber;


}
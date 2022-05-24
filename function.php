<?php
function getPost(){
    $array = array();


        $array[] = (string) $_POST["firstNumber"];
        $array[] = (string) $_POST["secontNumber"];


    return $array;
}
<?php

function add($number1, $number2){
   return $number1 + $number2;
}

class Calculator{
    public function add($number1, $number2){
       return $number1 + $number2;
    }
}

echo add(1,2);
echo add(2,5);
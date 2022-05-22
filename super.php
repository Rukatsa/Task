<?php
function sum(float $num1,float $num2):float{
    return $num1+$num2;
}
function dif(float $num1,float $num2):float{
    return $num1-$num2;
}
function pro(float $num1,float $num2):float{
    return $num1*$num2;
}
function quo(float $num1,float $num2):float{
    return $num1/$num2;
}
function calculator(string $formula):float{
    echo($formula);
}
echo "The sum =".sum(10,2)."<br>";
echo "The different =".dif(10,2)."<br>";
echo "The product =".pro(10,2)."<br>";
echo "The quotient =".quo(10,2)."<br>";
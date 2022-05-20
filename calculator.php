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
echo "The sum =".sum(10,2)."<br>";
echo "The different =".dif(10,2)."<br>";
echo "The product =".pro(10,2)."<br>";
echo "The quotient =".quo(10,2)."<br>";


function calculator(float $num1,string $op,float $num2):float{
    if (!($op=='+' OR $op=='-' OR $op=='*' OR $op=='/' )) {
        return 0;
    }
    switch ($op) {
        case '+':return sum($num1,$num2);
        case '-':return dif($num1,$num2);
        case '*':return pro($num1,$num2);
        case '/':return quo($num1,$num2); 
    }
}
echo "<br>";
echo "The sum =".calculator(1,'+',2)."<br>";
echo "The different =".calculator(1,'-',2)."<br>";
echo "The product =".calculator(1,'*',2)."<br>";
echo "The quotient =".calculator(1,'/',2)."<br>";
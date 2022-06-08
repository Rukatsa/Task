<?php
function sum(float ...$nums):float{
    $add=0;
    foreach ($nums as $num) {
        $add=$num+$add;
    }
    return $add;
}
function dif(float ...$nums):float{
    $dif=0;
    foreach($nums as $num){
        $dif=$num-$dif;   
}
return $dif;
}
function pro(float ...$nums):float{
    $pro=1;
    foreach ($nums as $num) {
        $pro=$num*$pro;
    }
    return $pro;
}
function quo(float ...$nums):float{
    $quo=1;
    foreach($nums as $num){
        $quo=$num/$quo;
    }
    return $quo;
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

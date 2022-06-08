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
    preg_match_all('!\d+!',$formula,$m);
    print_r($m);

    preg_match_all('!\d+!',$formula,$op);
    print_r($op);

    return (0);
}
echo calculator('2-5*10');
// 
// 
// 

function summary(float ...$nums):float{
    $add=0;
    foreach ($nums as $num) {
        $add=$num+$add;
    }
    return summary(1,2);
}

function multiply(float ...$nums):float{
    $pro=1;
    foreach ($nums as $num) {
        $pro=$num*$pro;
    }
    return multiply(3,3);

}




// function factorial($number) {
//     if ($number == 0) return 1;
//     return $number * factorial($number - 1);
// }

print factorial(3);
// echo "The sum =".sum(10,2)."<br>";
// echo "The different =".dif(10,2)."<br>";
// echo "The product =".pro(10,2)."<br>";
// echo "The quotient =".quo(10,2)."<br>";
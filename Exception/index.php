<?php
class DivideZero extends Exception{
    function __toString()
    {
        return 'can not divide by zero';
    }
}
function divide($number1, $number2){
    if ($number2 === 0){
        throw new DivideZero();
    }
    return $number1/$number2;
}
try{
    $result = divide(100, 5);
    echo $result;
$result = divide(100, 0);
echo $result;
} catch (DivideZero $e){
    echo '<br/>Có lỗi xảy ra: '.$e;
}


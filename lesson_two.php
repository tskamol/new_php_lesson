<?php
$a = rand(-10,10);
$b = rand(-10,10);

function raz ($a, $b) {
    if ($a && $b>0){
        return $a-$b;
    } elseif ($a && $b<0) {
        return $a*$b;
    }
    else{
        return $a+$b;
    }


};

echo "<br>Цифра A" . $a;
echo "<br>Цифра B" . $b;
echo "<br>Результат" . raz($a,$b);
$c = rand(0,15);

echo "<br>Цифра С" . "\n" . $c;

//switch ($c) {
//    case 1 :
//        echo "<br> 1";
//    case 2:
//        echo "<br> 2";
//    case 3:
//        echo "<br> 3";
//    case 4:
//        echo "<br> 4";
//    case 5:
//        echo "<br> 5";
//    case 6:
//        echo "<br> 6";
//    case 7:
//        echo "<br> 7";
//    case 8:
//        echo "<br> 8";
//    case 9:
//        echo "<br> 9";
//    case 10:
//        echo "<br> 10";
//    case 11:
//        echo "<br> 11";
//    case 12:
//        echo "<br> 12";
//    case 13:
//        echo "<br> 13";
//    case 14:
//        echo "<br> 14";
//    case 15:
//        echo "<br> 15";
//}

//function sum ($a,$b) {
//    return $a+$b;
//}
//
//function subtraction ($a,$b) {
//    return $a-$b;
//}
//
//function multiplication ($a,$b){
//    return $a*$b;
//}
//function division ($a,$b) {
//    return $a/$b;
//}
//
//function mathOperation ($arg1, $arg2, $operation) {
//    switch ($operation) {
//        case "sum":
//            return sum($arg1,$arg2);
//            break;
//        case "subtraction":
//            return subtraction($arg1,$arg2);
//            break;
//        case "multiplication":
//            return multiplication($arg1,$arg2);
//            break;
//        case "division":
//            return division($arg1,$arg2);
//            break;
//    }
//}
//
//echo "<br>" . mathOperation(2,2,"division");

//function power($val,$pow){
//
//    if($pow===0){
//        return 1;
//    }
//    $pow--;
//    return power($val,$pow) *$val;
//}
//echo "<br>" . power(2,2);


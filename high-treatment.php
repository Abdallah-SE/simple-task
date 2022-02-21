<?php
//$bourse_values = [5,7,21,2,8,9,4,19];

function setHighValue(array $boursa){
    if (!is_array($boursa)){
        return;
    }
    $bourse_length = count($boursa);
    $tem_exchange = '';
        for($j=$bourse_length-1; $j>0; $j--){
            $tem_exchange .= ($boursa[--$bourse_length] - $boursa[$j-1]) . ',';
    }
    return $tem_exchange;
}

$bourse_values = [5,7,21,2,8,9,4,19];
$str_values = setHighValue($bourse_values);
$str_values = rtrim($str_values, ',');
$arr = explode(',', $str_values);
function printArray ( array $arr ) {
    for ( $i = 0; $i < count($arr); $i++ ) {
        echo $arr[$i].' , ';
    }
}

function shiftArray(array $arr):array{
    if(!(is_array($arr))){
        return "";
    }
    $tem_arr = [];
    for($i=1; $i<=count($arr); $i++){
        $tem_arr[$i-1] = $arr[count($arr)-$i];
    }
    return $tem_arr;
}
$arranged_arr = shiftArray($arr);
/// in the first day he/she not gain anything
array_unshift($arranged_arr, '0');
var_dump($arranged_arr);
function getMaxNum(array $arrNum){
    $max = $arrNum[0];
    $index = 0;
    for($i=0; $i<count($arrNum); $i++){
        if($max < $arrNum[$i]){
            $max = $arrNum[$i];
            $index = $i;
        }
    }
    $index +=1;
    return $max . " IN day: " .$index;
}
echo 'In the following array: ';
echo printArray($bourse_values).' the max value is ' .(getMaxNum($arranged_arr));
<?php
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
echo 'In the following array: ';
echo printArray($bourse_values).' the max value is '.(max($arr));

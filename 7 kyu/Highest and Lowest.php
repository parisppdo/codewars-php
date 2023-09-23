<?php 
function highAndLow($numbers) {
    $arr = explode(" ",$numbers);
    $max = max($arr);
    $min = min($arr);
    $str = "$max $min";
    return "$str";
}
?>
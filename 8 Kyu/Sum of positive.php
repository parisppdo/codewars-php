<?php
function positive_sum($arr) {
    if ($arr == null || !is_array($arr) || count($arr) == 0) {      
        return 0;                                                   
    }
    $positives = [];
    foreach ($arr as $numbers) {
        if ($numbers>0) {
            $positives[] = $numbers;
        }
    }
    return array_sum($positives);
}
?>
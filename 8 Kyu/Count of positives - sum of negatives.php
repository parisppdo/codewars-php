<?php
function countPositivesSumNegatives($input) {
    if ($input == null || !is_array($input) || count($input) == 0) {           
        return [];                                                   
    }
    $positives = [];
    $negatives = [];
    foreach ($input as $numbers) {
        if ($numbers>0) {
            $positives[] = $numbers;
        }
        else {
            $negatives[] = $numbers;
        }
    }
    return [count($positives), array_sum($negatives)];
}
?>
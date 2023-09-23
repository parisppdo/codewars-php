<?php
function findIt(array $seq) : int
{
    $values = array_count_values($seq);
    foreach ($values as $key => $n) {
        if ($n % 2 !=0) {
            return $key;
        }
    }
}
?>
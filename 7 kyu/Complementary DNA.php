<?php
function DNA_strand($dna) {
    $arr = str_split($dna);
    foreach ($arr as &$i) {
        if ($i == "A") {
            $i = "T";
        }
        elseif ($i == "T") {
            $i = "A";
        }
        elseif ($i == "G") {
            $i = "C";
        }
        elseif ($i == "C") {
            $i = "G";
        } 
    }   
    return implode($arr);      
}
?>
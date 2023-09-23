
<?php
function reverseWords($str) {
    $split = str_split($str);         
    $arr_rev= array_reverse($split);
    $impl = implode($arr_rev);
    $expl = explode(" ",$impl);
    $arr_rev2= array_reverse($expl);
    $impl2 = implode(" ",$arr_rev2);
    return $impl2;
    }
?>
<?php
function hasUniqueChars($string) {
    $leng_str = strlen($string);
    $unique = count_chars($string, 3);
    $leng_uniq = strlen($unique);
    if ($leng_str == $leng_uniq){
        return TRUE;
    }
    else {
        return FALSE;
    }
}
?>
<?php
function detect_pangram($string) { 
  $string = " $string ";
  $letters = str_split("abcdefghijklmnopqrstuvwxyz");
  $string_lower = strtolower($string);
  foreach ($letters as $key => $letter) {
    if(!strpos($string_lower,$letter)){
      return FALSE;
    }    
  }
return TRUE;
}
?>
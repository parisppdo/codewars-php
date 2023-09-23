<?php
function paperwork(int $n, int $m): int
{
  if ($n<0 || $m<0 ){
    global $p;
    $p=0;}
  else{ 
    global $p;
    $p= $n*$m;}
  return $p;
}
?>
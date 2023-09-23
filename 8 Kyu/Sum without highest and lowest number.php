<?php
function sumArray($array) {
  sort($array);
  array_shift($array);
  array_pop($array);
  return $sum = array_sum($array);
}
?>
<?php
function partsSums($ls) {
  $result = [0];
  $count = count($ls);
    for ($i = 1; $i <= $count; $i++) {
      $result[] = $ls[$count - $i] + $result[$i - 1];
    }
  return array_reverse($result);
}
?>
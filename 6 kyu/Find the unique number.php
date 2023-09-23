<?php
function find_uniq($a) {
  sort ($a);
  $first = current ($a);
  $second = next ($a);
  $last = end ($a);
  if ($first == $second) {
      return $last;
  }
  else {
      return $first;
  }
}
?>
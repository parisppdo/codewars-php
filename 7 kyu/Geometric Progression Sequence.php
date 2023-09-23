<?php
function geometric_sequence_elements(int $a, int $r, int $n): string {
$sequence = [$a];
    for ($i = 1; $i <= $n - 1; $i++) {
        $a = $a * $r;
        $sequence[] = $a;
    }
return $result = implode(", ",$sequence);
}
?>
<?php
function getOrder($input) {
    $order = [];
    $foodz = ['burger', 'fries', 'chicken', 'pizza', 'sandwich', 'onionrings', 'milkshake', 'coke'];
    foreach ($foodz as $f) {
        $count = substr_count($input, $f);
        if ($count) {
            for ($i = 0; $i < $count; $i++) {
                $order[] = ucfirst($f);
            }
        }
    }
    return implode(" ",$order);
}
?>
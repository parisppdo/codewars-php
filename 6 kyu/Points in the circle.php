<?php
function pointsNumber($radius){
    $result = 0;
        for ($i = -$radius; $i<=$radius; $i++) {
            for ($j = -$radius; $j<=$radius; $j++) {
                if (pow ($i,2) + pow ($j,2) <= pow ($radius, 2)){
                    $result++;
                }
            }
        }
return $result;
}
?>
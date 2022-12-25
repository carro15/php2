<?php
$array = array(,10, 20, 98, 50);


$sum = array_sum($array);
$count = count($array);
$average = $sum / $count;


rsort($array);


echo "Promedio:   " . $average . "\n";
echo "   Arreglo ordenado descendentemente: " . implode(", ", $array) . "\n"
?>
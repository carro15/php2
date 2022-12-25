<?php 
$array = array();

for ($i = 0; $i < 5; $i++) {
  for ($j = 0; $j < 8; $j++) {
    $array[$i][$j] = (float) rand() / (float) getrandmax();
  }
}


$row_sums = array();
$column_sums = array();

for ($i = 0; $i < 4; $i++) {
  $row_sum = 0;
  for ($j = 0; $j < 5; $j++) {
    $row_sum += $array[$i][$j];
    if (!isset($column_sums[$j])) {
      $column_sums[$j] = 0;
    }
    $column_sums[$j] += $array[$i][$j];
  }
  $row_sums[] = $row_sum;
}

print_r($row_sums);
print_r($column_sums);




?>


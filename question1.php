<?php
$n = array(1, 3, 3, 5, 5, 4, 7, 3, 10, 20);
//1.1. Find the Greatest element in array
function findGreatest($n)
{
  $max = $n[0];
  foreach ($n as $key => $val) {
    if ($val > $max) {
      $max = $val;
    }
  }
  return $max;
}
echo findGreatest($n) . "<br>";
//1.2 Find the Smallest element in array
function findSmallest($n)
{
  $min = $n[0];
  foreach ($n as $key => $val) {
    if ($val < $min) {
      $min = $val;
    }
  }
  return $min;
}
echo findSmallest($n) . "<br>";
// 1.3 Find the duplicate elements in an array
function duplicate($n){
$unique = array_unique($n);

$duplicates = array_diff_assoc($n, $unique);

print_r($duplicates);}
// 1.4 Remove array
function removeArray($n)
{
  unset($n["1"]);
  print_r($n);
}
removeArray($n);
// 1.5 sort array
$m = array(4,6,8);
array_merge($m,$n); 
function SortArrayDecending($n){
for ($i = 0; $i < (count($n) - 1); $i++)
{
    for ($j = $i + 1; $j < count($n); $j++) 
    {
        if ($n[$i] > $n[$j]) 
        {
            $tmp = $n[$j];
            $n[$j] = $n[$i];
            $n[$i] = $tmp;
        }
    }
}
    return $n;    
}
 
print_r(SortArrayDecending($n));

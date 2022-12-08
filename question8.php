<?php

class Caculator {

private $value1; 

private $value2;

public function Caculator($value1,$value2) {
   $this->value1 = $value1;
   $this->value2 = $value2;

}
public function sum($value1,$value2){
  return $value1 + $value2;
}
public function subtract($value1,$value2){
  return $value1-$value2;
}
public function multiple($value1,$value2){
  return $value1 * $value2;
}
public function division($value1,$value2){
  return $value1 / $value2;
}

}

?>
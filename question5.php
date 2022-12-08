<?php
$arr = array(1,2,3,3,3,4,4,5,6,6,6);

for ($i = 0; $i < count($arr); $i++){
        if ($arr[$i] == $arr[$i+1]){
            unset($arr[$i]);
        }
    }
print_r($arr);
?>
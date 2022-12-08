<?php
    $str = " welcome to bap company ";
//2.1 count the characters;
function countCharacters($str){
$count=0;
for ($i = 0; $i < strlen($str); $i++){
    if ($str[$i]<> ' '){
        $count++;
    }
}
return $count;
}
echo countCharacters($str);
//2.2 Find the duplicate character in string 

$array = str_split($str);
$v = array_count_values($array);
foreach($v as $k => $val){
    if ($val>2){
        echo $k.' = '.$val.'<br>';}
}
// 2.3 replace software
echo str_replace("company","software",$str);
?>

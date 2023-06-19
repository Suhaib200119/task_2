<?php

$numbers=[1,2,3,4,5];
function removeOddNumbers($arrayNumbers){
    $newArray=[];
   foreach($arrayNumbers as $n){
    if($n%2==0){
            $newArray[]=$n;
    }
   }
   return $newArray;
}

$newArr=removeOddNumbers(arrayNumbers:$numbers);
var_dump($newArr);
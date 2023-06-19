<?php

$nums_1=[1,2,3,4,5,6];
$nums_2=[1,2,3,4,5];

function multiplyingItems($nums_1,$nums_2){
    $newArray=[];
    for($i=0;$i<count($nums_1);$i++){
        if(isset($nums_2[$i])){
            $newArray["$i"]=$nums_1[$i]*$nums_2[$i];
        }else{
            $newArray["$i"]=$nums_1[$i];
        }
    }
    return $newArray;
}

$newArray=multiplyingItems(nums_1:$nums_1,nums_2:$nums_2);
var_dump($newArray);
<?php
$data=["Ali","Omar","Ahmed","Rami"];
$index=-1;
function getLongestString($arr,&$index){
    $longestString=$arr[0];
    for($i=0;$i<count($arr);$i++){
        if(strlen($arr[$i])>strlen($longestString)){
            $longestString=$arr[$i];
            $index=$i;
    }
    }
    return $longestString;
}

$longestStringRes=getLongestString($data,$index);
echo $longestStringRes;
echo " index : ";
echo $index;

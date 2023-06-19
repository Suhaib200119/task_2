<?php



function checkIsPrime($number){
    $isPrime=true;
    for($i=2;$i<=(int)sqrt($number);$i++){
        if($number%$i==0){
            $isPrime = false;
            break;
        }
    }
    return $isPrime;
}

echo checkIsPrime(number:13)==1?"PRIME":"NOT PRIME";
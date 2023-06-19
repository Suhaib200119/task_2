<?php

$n = 10;
function fac($n)
{
    if($n==1){
        return 1;
    }else{
        return $n * fac($n-1);
    }
    
}
echo fac(6);

// $factorial = 1;
    
//     for ($i = 1; $i <= $n; $i++) {
//         $factorial *= $n;
//     }
//     return $factorial;

<?php

$isMale = false;
$isTall = false;

// toán tử &&: cả hai điều kiện đều phải đúng
// toán tử ||: một trong hai điều kiện đúng
if ($isMale && $isTall) {
    echo "Đây là một cậu thanh niên cao";
} elseif ($isMale && !$isTall) {
    echo "Cậu thanh niên này không cao";
} elseif (!$isMale && $isTall){
    echo "Ai đó rất cao";
} else {
    echo "Ai đấy ?";
}

echo "<br>";

function findMax($a, $b, $c) {
   if ($a >= $b && $a >= $c){
       return $a;
   } elseif ($b >= $a && $b >= $c){
       return $b;
   } else {
       return $c;
   }
}

echo findMax(4 , 6, 90);
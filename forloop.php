<?php

$x = [1,3,8,9,12];
$y = [2,4,7,6,11];
 
// hasilnya nanti [3,7,15,15,23]
// bagaimana cara menjumlahkan setiap entrinya??

echo $z= count($x);

for($i=0;$i<=$z;$i++){
     $indeksy=$y[$i];
     $indeksx= $x[$i];
    if($indeksy==$indeksx){
        echo $indeksy+$indeksx;
    } 
}




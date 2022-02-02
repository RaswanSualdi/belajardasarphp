<?php

$x = [1,3,8,9,12];
$y = [2,4,7,6,11];
 
// // hasilnya nanti [3,7,15,15,23]
// // bagaimana cara menjumlahkan setiap entrinya??
// //bagaimana cara menyamakan setiap indeks entrinya??
 $z= count($x);
// $value = $x[$i]+1;
for($i=0;$i<=$z;$i++){
   echo $x[$i]+$y[$i];
}



// $angka = array(1, 4, 3, 4);
// foreach ($x as $value) {
// echo $value;
// }
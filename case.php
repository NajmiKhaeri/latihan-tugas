<?php
$a = array(array(2,3), array(4,5));
$b = array(array(2,6), array(3,8));
echo "matriks A :";
echo "<br>";
for ($c=0; $c < count($a); $c++){
foreach($a[$c] as $d){
echo $d.'    ';
}
echo "<br>";
}
echo "<br>";
echo "matriks B :";
echo "<br>";
for ($e=0; $e < count($b); $e++){
foreach($b[$e] as $f){
echo $f.'     ';
}
echo "<br>";
}
echo "<br>";
echo "Penjumlahan Matriks A dan B =";
echo "<br>";
for ($g=0; $g < count($b); $g++){
for($i=0; $i < count($b); $i++){
$hasil = $a[$g][$i]+$b[$g][$i];
echo $hasil.'    ';
}
echo "<br>";
}
?>
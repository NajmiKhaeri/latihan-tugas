<?php
$bil = array(2, 1, 9);
echo "MENGINPUT DATA";
echo "<br>";
echo "<br>";
echo "Data 0 : $bil[0]";
echo "<br>";
echo "<br>";
echo "Data 1 : $bil[1]";
echo "<br>";
echo "<br>";
echo "Data 2 : $bil[2]";
echo "<br>";
echo "<br>";
echo "Output Nilai Max : ";
$max = $bil[0];
for ($i = 0; $i <= count($bil)-1; $i++)
{
if ($bil[$i] > $max) $max = $bil[$i];
}
echo $max;
?>
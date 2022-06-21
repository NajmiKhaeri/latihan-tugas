<?php
    $matriks1 = array(array(2,3),array(4,5));
    $matriks2 = array(array(2,6),array(3,8));
    $matriks3 = array(array(),array());
    $baris = count($matriks1);
    $kolom = count($matriks1[0]);
    for($i=0;$i<$baris;$i++){
        for($j=0;$j<$kolom;$j++){
            $matriks3[$i][$j] = $matriks1[$i][$j] + $matriks2[$i][$j];
        }
    }
    echo "<b>Matriks A</b>";
    echo "<br>";
    echo "<br>";
    for($i=0;$i<$baris;$i++){
        for($j=0;$j<$kolom;$j++){
            echo $matriks1[$i][$j]." ";
        }
        echo "<br>";
        echo "<br>";
    }
    echo "<b>Matriks B</b>";
    echo "<br>";
    echo "<br>";
    for($i=0;$i<$baris;$i++){
        for($j=0;$j<$kolom;$j++){
            echo $matriks2[$i][$j]." ";
        }
        echo "<br>";
        echo "<br>";
    }
    echo "<b>Penjumlahan Matriks A dan B</b>";
    echo "<br>";
    echo "<br>";
    for($i=0;$i<$baris;$i++){
        for($j=0;$j<$kolom;$j++){
            echo $matriks3[$i][$j]." ";
        }
        echo "<br>";
        echo "<br>";
    }
?>
<html>

<body>
    <?php
    $matriks1 = array(array(1, 2), array(3, 4));
    $matriks2 = array(array(5, 6), array(7, 8));

    for($i = 0; $i < 2; $i++)
        for($j = 0; $j < 2; $j++)
            $hasil[$i][$j] = $matriks1[$i][$j] + $matriks2[$i][$j];

    echo "Matriks ke-1: <br>".$matriks1[0][0]." ".$matriks1[0][1]."<br>".$matriks1[1][0]." ".$matriks1[1][1]."<br>";
    echo "Matriks ke-2: <br>".$matriks2[0][0]." ".$matriks2[0][1]."<br>".$matriks2[1][0]." ".$matriks2[1][1]."<br>";
    echo "Hasil penjumlahan: <br>".$hasil[0][0]." ".$hasil[0][1]."<br>".$hasil[1][0]." ".$hasil[1][1]."<br>";  
    ?>
</body>

</html>
<html>
    <body>
        <?php
            $data = array(7,18,11);
            $maks = max($data);
            $mean = array_sum($data) / sizeof($data);

            echo "Input data: <br>";
            echo "data 0: $data[0] <br>";
            echo "data 1: $data[1]<br>";
            echo "data 2: $data[2] <br><br>";
            echo "Output data: <br>";
            echo "Nilai maksimal: $maks<br>";
            echo "Rata-rata: $mean<br>";
        ?>
    </body>
</html>
<html>

<body>
    <?php
    function operasi($bil1, $bil2, $operator)
    {
        switch ($operator) {
            case "+":
                $hasil = $bil1 + $bil2;                
                break;
            case "-":
                $hasil = $bil1 - $bil2;
                break;
            case "*":
                $hasil = $bil1 * $bil2;
                break;
            case "/":
                $hasil = $bil1 / $bil2;
                break;
            default:
                echo "Operator tidak valid!";
        }
        return $hasil;
    }
    $a = 11;
    $b = 7;
    $operator = "+";
    $result = operasi($a, $b, $operator);
    include("header.php");
    echo "Bilangan ke-1: $a <br>";
    echo "Bilangan ke-2: $b <br>";
    echo "Operator: $operator <br>";
    echo "Hasil operasi: $result <br>";
    include("footer.php");
    ?>    
</body>

</html>
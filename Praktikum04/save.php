<html>

<body>
    <?php
    if (isset($_POST['interest1']))
        $interest1Code = "v";
    else
        $interest1Code = "-";

    if (isset($_POST['interest2']))
        $interest2Code = "v";
    else
        $interest2Code = "-";

    if (isset($_POST['interest3']))
        $interest3Code = "v";
    else
        $interest3Code = "-";

    if (isset($_POST['interest4']))
        $interest4Code = "v";
    else
        $interest4Code = "-";

    if (isset($_POST['interest5']))
        $interest5Code = "v";
    else
        $interest5Code = "-";

    $interestCode = $interest1Code.$interest2Code.$interest3Code.$interest4Code.$interest5Code;

    //SAVE DATA
    $nama = $_POST["nama"];
    $pegangan = fopen("result.txt", "a");
    fwrite($pegangan, $nama."\n");
    fwrite($pegangan, $_POST["nrp"]."\n");
    fwrite($pegangan, $_POST["gender"]."\n");
    fwrite($pegangan, $_POST["agama"]."\n");
    fwrite($pegangan, $_POST["tempat"].",".$_POST["tanggal"]."\n");
    fwrite($pegangan, $_POST["alamat"]."\n");
    fwrite($pegangan, $_POST["sd"]."\n");
    fwrite($pegangan, $_POST["smp"]."\n");
    fwrite($pegangan, $_POST["sma"]."\n");
    fwrite($pegangan, $_POST["email"]."\n");
    fwrite($pegangan, $_POST["homepage"]."\n");
    fwrite($pegangan, $_POST["hobby"]."\n");
    fwrite($pegangan, $interestCode."\n");
    fclose($pegangan);

    print("Halo, $nama. Data Anda sudah disimpan.");
    print("Terima kasih!");

    ?>
</body>

</html>
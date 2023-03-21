<html>

<body>
    <?php
        $idData = 1;
        $pegangan = fopen("result.txt", "r");
        while(!feof($pegangan)){
            $nama = trim(fgets($pegangan));
            if($nama == FALSE)
                break;
        
            $nrp = trim(fgets($pegangan));
            $gender = trim(fgets($pegangan));
            $agama = trim(fgets($pegangan));
            $ttl = trim(fgets($pegangan));
            $alamat = trim(fgets($pegangan));
            $sd = trim(fgets($pegangan));
            $smp = trim(fgets($pegangan));
            $sma = trim(fgets($pegangan));
            $email = trim(fgets($pegangan));
            $homepage = trim(fgets($pegangan));
            $hobby = trim(fgets($pegangan));
            $interestCode = trim(fgets($pegangan));
            
            $interest = "";
            for($i=0; $i<5; $i++){
                if(substr($interestCode, $i, 1) == "v")
                    switch($i){
                        case 0:
                            $interest = "Komputer<br>";
                            break;
                        case 1:
                            $interest = "Sport<br>";
                            break;
                        case 2:
                            $interest = "Travelling<br>";
                            break;
                        case 3:
                            $interest = "Writing<br>";
                            break;
                        case 4:
                            $interest = "Reading<br>";
                            break;
                    }
            }

            print("<br>Data ke-$idData: </br>\n");
            printf("Nama: %s <br> \n", $nama);
            printf("NRP: %s <br> \n", $nrp);
            printf("Jenis Kelamin: %s <br> \n", $gender == "L"?"Pria":"Wanita");
            printf("Agama: %s <br> \n", $agama);
            printf("TTL: %s <br> \n", $ttl);
            printf("Alamat: %s <br> \n", $alamat);
            // printf("Riwayat pendidikan");
            printf("SD: %s <br> \n", $sd);
            printf("SMP: %s <br> \n", $smp);
            printf("SMA: %s <br> \n", $sma);
            printf("Email: %s <br> \n", $email);
            printf("Homepage: %s <br> \n", $homepage);
            printf("Hobby: %s <br> \n", $hobby);
            // if(!empty($interest))
            printf("Interest: %s", $interest);
            $idData++;

        }
    ?>
</body>

</html>
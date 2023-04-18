<?php
$nama = "khanza";
$nrp = "3122500049";

if (isset($_COOKIE["username"]) && isset($_COOKIE["password"])) {
    header('Location: register.php');
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!($_POST["user"] == $nama) && !($_POST["pass"] == $nrp)) {
        $error = "Username dan Password yang anda masukkan salah!";
    } else {
        setcookie("username", $nama, time() + 3600);
        setcookie("password", $nrp, time() + 3600);
        header('Location: register.php');
    }
}
?>

<html>

<head>
    <style type="text/css">
        body {
            font-family: 'Open Sans', sans-serif;
            background-image: url('https://gcdnb.pbrd.co/images/vTHzIOI5Oklh.png?o=1');
            background-size: cover;            
            margin: 20px 0px 20px 0px;
            width: 100%;
            text-align: center;            
        }

        .box {
            background: #3498db;
            width: 500px;            
            margin: 0 auto 0 auto;
            padding: 10px;
            border: #ccc 2px solid; 
        }

        h1 {
            margin: 10px;
            font-size: 1.5em;
            color: #525252;
        }

        .field {
            border: #ccc 3px solid;            
            padding: 8px;
            width: 300px;            
            margin-top: 10px;
            font-size: 1em;            
        }

        .btn {
            align-items: center;
            cursor: pointer;
            display: inline-block;
            margin: 10px;
            padding: 0.9rem 2.5rem;
            text-align: center;
            color: #525252;
            border-radius: 3px;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.5);
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class="box">
        <?php if (isset($error)) : ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
        <h1>Tes Cookies</h1>
        <form method="post">
            <input type="text" name="user" class="field" placeholder="Username">
            <br>
            <input type="password" name="pass" class="field" placeholder="Password">
            <br>
            <button type="submit" class="btn">LOGIN</button>
        </form>
    </div>

</body>

</html>

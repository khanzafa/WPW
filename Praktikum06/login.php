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
        #bg {
            background-image: url('img/background.jpg');
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            filter: blur(5px);
        }

        body {
            /* font-family: 'Lato', sans-serif; */
            color: #4A4A4A;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .login {
            margin: auto;
            width: 50%;
            padding: 20px;
            border: 1px solid #47AB11;
            border-radius: 5px;
        }

        .field {
            font-size: 20px;
            /* position: absolute;
            left: 15px;
            top: 17px; */
            color: #888888;
            display: block;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .btn {
            outline: none;
            border: none;
            cursor: pointer;
            display: inline-block;
            margin: 0 auto;
            padding: 0.9rem 2.5rem;
            text-align: center;
            background-color: #47AB11;
            color: #fff;
            border-radius: 4px;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
            font-size: 17px;
        }
    </style>
</head>

<body>
    <div id="bg"></div>
    <div class="login">
        <?php if (isset($error)) : ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="post">
            <!-- <label for="username">Username</label> -->
            <input type="text" name="user" class="field" placeholder="Username">
            <br>
            <!-- <label for="password">Password</label> -->
            <input type="password" name="pass" class="field" placeholder="Password">
            <br>
            <button type="submit" class="btn">LOGIN</button>
        </form>
    </div>
</body>

</html>
<?php
if (!isset($_COOKIE["username"]) && !isset($_COOKIE["password"])) {
    header('Location: login.php');
    exit();
}
if (isset($_POST['logout'])) {
    setcookie("username", "", time() - 18640);
    setcookie("password", "", time() - 18640);
    header('Location: login.php');
    exit();
}
?>
<html>

<body>
    <div>
        <h2>Biodata Pengguna</h2>
        <form method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>NRP</td>
                    <td><input type="text" name="nrp"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <label for="pria">Pria</label>
                        <input type="radio" name="gender" value="pria">
                        <label for="wanita">Wanita</label>
                        <input type="radio" name="gender" value="wanita">
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katolik">Katolik</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>
                        <input type="text" name="tempat">
                        <input type="text" name="tanggal">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat"></textarea></td>
                </tr>
                <tr>
                    <td>Riwayat pendidikan:</td>
                </tr>
                <tr>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;SD</td>
                    <td><input type="text" name="sd"></td>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;SMP</td>
                    <td><input type="text" name="smp"></td>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;SMA</td>
                    <td><input type="text" name="sma"></td>
                </tr>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Homepage</td>
                    <td><input type="text" name="homepage"></td>
                </tr>
                <tr>
                    <td>Hobby</td>
                    <td><input type="text" name="hobby"></td>
                </tr>
                <tr>
                    <td>Interest</td>
                    <td>
                        <input type="checkbox" name="interest" value="komputer">
                        <label for="komputer">Komputer</label>
                        <input type="checkbox" name="interest" value="sport">
                        <label for="sport">Sport</label>
                        <input type="checkbox" name="interest" value="travelling">
                        <label for="travelling">Travelling</label>
                        <input type="checkbox" name="interest" value="writing">
                        <label for="writing">Writing</label>
                        <input type="checkbox" name="interest" value="reading">
                        <label for="reading">Reading</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="button" value="SIMPAN">
                        <input type="submit" value="LOGOUT" name="logout">
                    </td>
                </tr>
            </table>
        </form>        
    </div>
</body>

</html>
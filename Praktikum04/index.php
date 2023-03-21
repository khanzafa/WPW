<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <h2>Biodata Pengguna</h2>
        <form action="save.php" method="POST">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" pattern="(^[A-Z][a-z]+)(\s?([A-Z][a-z]+)?)+" title="Huruf awal harus kapital"></td>
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
                        <input type="date" name="tanggal">
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
                    <td>SD</td>
                    <td><input type="text" name="sd"></td>
                </tr>
                <tr>
                    <td>SMP</td>
                    <td><input type="text" name="smp"></td>
                </tr>
                <tr>
                    <td>SMA</td>
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
                        <input type="checkbox" name="interest1" value="komputer">
                        <label for="komputer">Komputer</label>
                        <input type="checkbox" name="interest2" value="sport">
                        <label for="sport">Sport</label>
                        <input type="checkbox" name="interest3" value="travelling">
                        <label for="travelling">Travelling</label>
                        <input type="checkbox" name="interest4" value="writing">
                        <label for="writing">Writing</label>
                        <input type="checkbox" name="interest5" value="reading">
                        <label for="reading">Reading</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="SIMPAN">
                        <input type="button" onclick="" value="LOGOUT">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
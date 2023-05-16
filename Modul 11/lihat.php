<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menampilkan table</title>
</head>

<body>
    <div class="judul">
        <h1>Detail Data</h1>
    </div>
    <br>
    <br>

    <?php
    include "koneksi.php";
    $nim = $_GET['nim'];
    $data = mysqli_query($koneksi, "SELECT * from data WHERE nim='$nim'") or die(mysql_error());
    $no = 1;
    while($d = mysqli_fetch_array($data)){
    ?>
        <table>
            <tr>
                <td>NIM</td>
                <td>: <?php echo $d['nim'] ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <?php echo $d['nama'] ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <?php echo $d['alamat'] ?></td>
            </tr>
            <tr></tr>
        </table>
        <?php } ?>
            <a href="full.php"><<< Kembali Lihat Semua Data</a>
</body>
</html>
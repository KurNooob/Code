<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="addstyle.css">
    <title>addData</title>
</head>

<body>
<?php
    include "koneksi.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $isbn = $_POST['isbn'];
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $tahun = $_POST['tahun'];
        $penerbit = $_POST['penerbit'];
        $stock = $_POST['stock'];

        // Mengupdate database
        $query = mysqli_query($koneksi, "INSERT INTO datbuku (isbn, judul, penulis, tahun, penerbit, stock) VALUES ('$isbn', '$judul', '$penulis', '$tahun', '$penerbit', '$stock')");

        if ($query) {
            $message = (object) [
                'type' => 'success',
                'text' => 'Data berhasil ditambahkan'
            ];
            header("location:dashboard.php?pesan=update");
        } else {
            echo "Data gagal ditambahkan";
        }
    }

    ?>
    <br>
    <table align="center" >
        <tr>
            <th width="1170" style="background-color: transparent;">
                <div class="header-content">
                <span class="header-text" style="font-size: 25px">Tambahkan Data</span>
                <button type="submit" class="btn btn-primary header-button" onclick="window.location.href='dashboard.php'">Kembali</button>
            </div>
            </th>
        </tr>
    </table>

    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div class="container vertical-center">
        <br>
        <br>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <!-- Membuat tempat input -->
            <label for="isbn" style="font-size: 12px;">ISBN</label>
            <input type="text" class="form-control bg-custom" name="isbn">
            <br>
            <!-- Membuat tempat input -->
            <label for="judul" style="font-size: 12px;">Judul</label>
            <input type="text" class="form-control bg-custom" name="judul">
            <br>
            <!-- Membuat tempat input -->
            <label for="penulis" style="font-size: 12px;">Penulis</label>
            <input type="text" class="form-control bg-custom" name="penulis">
            <br>
            <!-- Membuat tempat input -->
            <label for="tahun" style="font-size: 12px;">Tahun</label>
            <input type="text" class="form-control bg-custom" name="tahun">
            <br>
            <!-- Membuat tempat input -->
            <label for="penerbit" style="font-size: 12px;">Penerbit</label>
            <input type="text" class="form-control bg-custom" name="penerbit">
            <br>
            <!-- Membuat tempat input -->
            <label for="stock" style="font-size: 12px;">Stock</label>
            <input type="text" class="form-control bg-custom" name="stock">
            <br>
            <button type="submit" class="btn btn-primary btn-block add-button">Tambahkan</button>
        </form>
    </div>
    </form>
                </div>
            </div>
        </div>
</body>
</html>
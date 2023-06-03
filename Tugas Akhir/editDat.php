<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="editstyle.css">
    <script>
        function showConfUpdate() {
            var confirmed = confirm("Apakah anda ingin memperbarui data?");

            if (!confirmed) {
                event.preventDefault(); // Prevent form submission
            }
        }
    </script>
    <title>Mengedit Data</title>
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
            $updateQuery = "UPDATE datBuku SET judul='$judul', penulis='$penulis', tahun='$tahun', penerbit='$penerbit', stock='$stock' WHERE isbn='$isbn'";
            mysqli_query($koneksi, $updateQuery) or die(mysqli_error($koneksi));

            // Mengalihkan ke dashboard.php (dashboard) lagi
            header("Location: dashboard.php");
            exit();
        }

        $isbn = $_GET['isbn'];

        $data = mysqli_query($koneksi, "SELECT * from datBuku WHERE isbn='$isbn'") or die(mysqli_error($koneksi));
        $d = mysqli_fetch_array($data);
    ?>
    <br>
    <table align="center" >
        <tr>
            <th width="1170" style="background-color: transparent;">
                <div class="header-content">
                <span class="header-text" style="font-size: 25px">Edit Data</span>
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
            <input type="hidden" name="isbn" value="<?php echo $d['isbn'] ?>">
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
            <button type="submit" class="btn btn-primary btn-block edit-btn" onclick="showConfUpdate()">Update</button>
        </form>
    </div>
    </form>
                </div>
            </div>
        </div>
</body>
</html>
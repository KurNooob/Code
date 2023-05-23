<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        body {
            background-color: #313338;
            color: white;
        }

        .form-control {
            color: #fff;                              /* Mengatur warna */
            border-color: #1E1F22;                    /* Mengatur warna border */
        }

        .bg-custom {
            background-color: #202225;                /* Mengatur warna background */
        }
    </style>
    <title>Mengedit Data</title>
</head>

<body>
    <?php
        include "koneksi.php";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nim = $_POST['nim'];
            $nama = $_POST['Nama'];
            $alamat = $_POST['Alamat'];

            // Mengupdate database
            $updateQuery = "UPDATE mahasiswa SET Nama='$nama', Alamat='$alamat' WHERE NIM='$nim'";
            mysqli_query($koneksi, $updateQuery) or die(mysqli_error($koneksi));

            // Mengalihkan ke full.php (dashboard) lagi
            header("Location: full.php");
            exit();
        }

        $nim = $_GET['nim'];

        $data = mysqli_query($koneksi, "SELECT * from mahasiswa WHERE NIM='$nim'") or die(mysqli_error($koneksi));
        $d = mysqli_fetch_array($data);
    ?>
    <div class="container p-5 vertical-center">     <!-- Mengatur container -->
        <div class="row">
            <div class="card mx-auto">
                <div class="card-body p-5">
                    <h3 class="text-center mb-4"><strong>Edit Data</strong></h3>
                    <p style="color: #B5BAC1; text-align: center;">Input Nama dan Alamat baru</p>
                    <br>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-floating mb-3">
                        <input type="hidden" name="nim" value="<?php echo $d['NIM'] ?>">
                        <!-- Membuat tempat input -->
                        <label for="Nama" style="font-size: 12px;">Nama</label>
                        <input type="text" class="form-control bg-custom" name="Nama" value="<?php echo $d['Nama'] ?>">
                    </div>
                    <br>
                    <div class="form-floating mb-3">
                        <!-- Membuat tempat input -->
                        <label for="Alamat" style="font-size: 12px;">Alamat</label>
                        <input type="text" class="form-control bg-custom" name="Alamat" value="<?php echo $d['Alamat'] ?>">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-block mb-3">Update</button>
                    </form>
                </div>
            </div>
        </div>
</form>
</body>
</html>
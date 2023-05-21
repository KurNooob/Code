<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Latihan 1</title>
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

    <script>
        function showConfirmation(nim) {
        var result = confirm("Apakah anda yakin ingin menghapus data?");

        if (result) {
            // Apabila iya
            window.location.href = 'hapus.php?nim=' + nim; // Redirect to hapus.php with the specified nim parameter
        } else {
            // Apabila tidak yakin
            return;
        }
        }
    </script>
</head>

<body>
    <form method="post" action="update.php">
    <div class="container p-5 vertical-center">     <!-- Mengatur container -->
        <div class="row">
            <div class="card mx-auto">
                <div class="card-body p-5">
                    <h3 class="text-center mb-4"><strong>Data Mahasiswa</strong></h3>
                    <p style="color: #B5BAC1; text-align: center;">Masukkan NIM, Nama dan Alamat lalu klik "Tambahkan"</p>
                    <br>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-floating mb-3">
                        <!-- Membuat tempat input -->
                        <label for="NIM" style="font-size: 12px;">NIM</label>
                        <input type="number" class="form-control bg-custom" name="NIM">
                    </div>
                    <br>
                    <div class="form-floating mb-3">
                        <!-- Membuat tempat input -->
                        <label for="Nama" style="font-size: 12px;">Nama</label>
                        <input type="text" class="form-control bg-custom" name="Nama">
                    </div>
                    <br>
                    <div class="form-floating mb-3">
                        <!-- Membuat tempat input -->
                        <label for="Alamat" style="font-size: 12px;">Alamat</label>
                        <input type="text" class="form-control bg-custom" name="Alamat">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-block mb-3">Tambahkan</button>
                    </form>
                </div>
            </div>
        </div>
    </form>
        <br>
        
    <h5 align="center">Menampilkan Data Mahasiswa</h5>
    <table border="1" align="center" cellspacing="10" cellpadding="15">
        <tr>
            <th width="20">No</th>
            <th width="100">NIM</th>
            <th width="200">Nama</th>
            <th width="200">Alamat</th>
            <th width="80">Menu</th>
        </tr>
        <?php
        include ("koneksi.php");
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * from mahasiswa");
        while($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['NIM']; ?></td>
                <td><?php echo $d['Nama']; ?></td>
                <td><?php echo $d['Alamat']; ?></td>
                <td>
                    <a href="edit.php?nim=<?php echo $d['NIM']; ?>">Edit</a>
                    <a href="#" onclick="showConfirmation('<?php echo $d['NIM']; ?>')">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>
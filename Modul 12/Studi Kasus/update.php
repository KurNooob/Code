<?php
    include "koneksi.php";

        $nama = $_POST['Nama'];
        $nim = $_POST['NIM'];
        $alamat = $_POST['Alamat'];
    
        $query = mysqli_query($koneksi, "INSERT INTO mahasiswa (NIM, Nama, Alamat) VALUES ('$nim', '$nama', '$alamat')");
    
        if ($query) {
            $message = (object) [
                'type' => 'success',
                'text' => 'Data berhasil ditambahkan'
            ];
            header("location:full.php?pesan=update");
        } else {
            echo "Data gagal ditambahkan";
        }
?>
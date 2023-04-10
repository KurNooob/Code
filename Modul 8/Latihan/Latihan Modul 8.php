<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan Modul 8</title>
</head>

<body>
    <!-- Demo Program PHP menggunakan tag <?php ?> untuk kode php -->
    <?php
        echo 'Kode PHP di sini';
    ?>

    <p> Dokumen HTML </p>

    <?php
        echo 'Kode PHP di sini';
    ?>

    <!-- Shortcut kode kecil untuk penyingkatan penggunaan kode php -->
    <p> Kode <?php echo "PHP";?> di HTML </p>

    <!-- Demo Variabel menggunakan karakter ($) diikuti nama variabel -->
    <?php
        // Deklarasi dan inisialisasi
        $bil = 3;
        echo $bil;
    ?>

    <!-- var_dump() digunakan untuk mencetak nilai variabel tanpa Tipe data -->
    <!-- print_r() digunakan untuk mencetak nilai variabel beserta Tipe data -->
    <!-- echo untuk mencetak output saja -->
    <?php
        // Deklarasi dan inisialisasi vaariabel bil
        $bil = 3;

        // Dumping informasi mengenai variabel
        var_dump($bil);
        print_r($bil);
    ?>

    <!-- Demo Variabel isset() -->
    <?php
        $bil = 3;                   //mendeklarasi variabel sebagai int
        var_dump($bil);
        // Output: int(3)

        $var = "";                  //mendeklarasi variabel sebagai String
        var_dump($var);
        // Output: string(0) ""

        $var = null;                //mendeklarasi variabel null
        var_dump($var);
        // Output: NULL
    ?>

    <!-- Mengecek Tipe Data dan Casting -->
    <?php
        $bil = 3;
        var_dump(is_int($bil));     //memeriksa apakah variabel $Bil merupakan int
        // Output: bool(true)

        $var = "";
        var_dump(is_string($var));  //memeriksa apakah variabel $var merupakan String
        // Output: bool(true)
    ?>

    <!-- Casting Tipe -->
    <?php
        $str = '123abc';

        // Casting nilai vaiabel $str ke integer
        $bil = (int) $str;          // $bil = 123

        echo gettype($str);
        // Output: string

        echo gettype($bil);
        // Output: integer
    ?>

    <!-- Pernyataan if -->
    <?php
        $a = 10;
        $b = 5;
        if ($a > $b) {              //kode akan berjalan ketika $a lebih besar dari $b
            echo 'a lebih besar dari b';
        }
    ?>

    <!-- Pernyataan if-else -->
    <?php
        $a = 10;
        $b = 5;
        if ($a > $b) {              //kode akan berjalan ketika $a lebih besar dari $b
            echo 'a lebih besar dari b';
        } else {                    //kode akan berjalan ketika hasil lain terbaca
            echo 'a TIDAK lebih besar dari b';
        }
    ?>

    <!-- Pernyataan if-elseif -->
    <?php
        $a = 10;
        $b = 5;
        if ($a > $b) {              //kode akan berjalan ketika $a lebih besar dari $b
            echo 'a lebih besar dari b';
        } elseif ($a == $b) {       //atau jika $a sama dengan $b
            echo 'a sama dengan b';
        } else {                    //kode akan berjalan ketika hasil lain terbaca
            echo 'a kurang dari b';
        }
    ?>

    <!-- Pernyataan Switch -->
    <?php
        $i = 0;

        if ($i == 0) {              //kode akan berjalan apabila $i bernilai 0
            echo "i equals 0";
        } elseif ($i == 1) {        //kode akan berjalan apabila $i bernilai 1
            echo "i equals 1";
        } elseif ($i == 2) {        //kode akan berjalan apabila $i bernilai 2
            echo "i equals 2";
        }

        // Ekuivalen, dengan pendekatan switch
        switch ($i) {
        case 0:                     //kode akan berjalan apabila $i bernilai 0
            echo "i equals 0";
            break;
        case 1:                     //kode akan berjalan apabila $i bernilai 1
            echo "i equals 1";
            break;
        case 2:                     //kode akan berjalan apabila $i bernilai 2
            echo "i equals 2";
            break;
        }
    ?>

    <!-- Pengulangan while -->
    <?php
        $i = 0;

        while ($i < 10) {           //kode akan berjalan selama $i lebih kecil dari 10
            echo $i;

            // Inkremen counter
            $i++;
        }
    ?>

    <!-- Pengulangan do-while -->
    <?php
        $i = 0;

        do {                        
            echo $i;

            // Inkremen counter
            $i++;
        } while ($i < 10);          //kode berjalan ketika syarat terpenuhi
    ?>

    <!-- Pengulangan for -->
    <?php
        for ($i = 0; $i < 10; $i++) {
            echo $i;
        }
    ?>

    <!-- Pengulangan foreach -->
    <?php
        $arr = array(1, 2, 3, 4);

        foreach ($arr as $value) {
            echo $value;
        }
    ?>

    <!-- Fungsi/Prosedur -->
    <?php
        // Contoh prosedur
        function do_print() {
            // Mencetak informasi timestamp
            echo time();
        }

        // Memanggil prosedur
        do_print();

        echo '<br />';

        // Contoh fungsi penjumlahan
        function jumlah($a, $b) {
            return ($a + $b);
        }

        echo jumlah(2, 3);
        // Output: 5
    ?>

    <!-- Argumen Fungsi/Prosedur -->
    <?php
        /**
            * Mencetak string
            * $teks nilai string
            * $bold adalah argumen opsional
            */
        function print_teks($teks, $bold = true) {
            echo $bold ? '<b>' .$teks. '</b>' : $teks;
        }

        print_teks('Za Warudo');
        // Mencetak dengan huruf tebal

        print_teks('Za Warudo', false);
        // Mencetak dengan huruf reguler
    ?>
</body>
</html>
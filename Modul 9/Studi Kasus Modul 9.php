<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Screen</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="https://fonts.cdnfonts.com/css/gg-sans-2" rel="stylesheet">          

    <style>
    body {
        font-family: 'gg sans 2', sans-serif;       /* Menggunakan font menjadi gg sans 2, apabila tidak ada, sans-serif akan digunakan */
        background-color: #313338;                /* Mengatur warna background */
    }

    h3 {
        color: #F2F3F5;                           /* Membuat warna menjadi #F2F3F5 */
    }

    .bg-custom {
        background-color: #202225;                /* Mengatur warna background */
    }

    .form-control {
        color: #fff;                              /* Mengatur warna */
        border-color: #1E1F22;                    /* Mengatur warna border */
    }

    label {
        color: #b5bac1;                           /* Mengatur warna */
        font-size: 12px;                            /* Mengatur ukuran font */
    }

    .vertical-center {
        top: 50%;                       /* top menjadi 50% */
        transform: translateY(50%);     /* Mengatur item menjadi pada lokasi 50% di garis Y */
    }

	.btn-primary {
		background-color: #5865F2;
	}
    </style>

    <script>
        function validateForm() {

            var id = document.getElementById("id").value;
            var password = document.getElementById("password").value;

            if (id == "" || password == "") {                   //Apabila id/password kosong
                alert("Username dan Password harus diisi.");    //Menampilkan pesan
                document.getElementById("id").focus();          //Memfokuskan bagian id
                document.getElementById("password").focus();    //Memfokuskan bagian password
                return false; 
            } else if (id == "") {                              //baru sadar tidak perlu karena sudah terpenuhi di if
                alert("Username harus diisi.");
                document.getElementById("id").focus();
                return false;
            } else if (password == "") {                        //baru sadar tidak perlu karena sudah terpenuhi di if
                alert("Password harus diisi.");
                document.getElementById("password").focus();
                return false;
            }


            if (!/^[a-zA-Z]+$/.test(id) || !/^[a-zA-Z]+$/.test(password)) {     //Apabila id/password tidak berupa huruf
                alert("Username dan Password harus berupa huruf.");  // Menampilkan pesan
                document.getElementById("id").focus();                  //Memfokuskan bagian id
                document.getElementById("password").focus();            //Memfokuskan bagian password
                return false;                                           //Proses submit akan dihentikan karena nilai false
            }
            return true; 
        }
    </script>
</head>

<body>
<div>
    <div class="container p-5 vertical-center">     <!-- Mengatur container -->
        <div class="row">
            <div class="card mx-auto">
                <div class="card-body p-5">
                    <h3 class="text-center mb-4"><strong>Welcome back!</strong></h3>
                    <p style="color: #B5BAC1; text-align: center;">We're so excited to see you again!</p>
                    <br>
                    <form method="post" action="<?php $_SERVER['PHP_SELF']?>" onsubmit="return validateForm()">                   <!-- Memvalidasi form ketika disubmit -->
                    <div class="form-floating mb-3">
                        <!-- Membuat tempat input -->
                        <label for="id" style="font-size: 12px;">USERNAME</label>
                        <input type="text" class="form-control bg-custom " name="id" id="id">
                    </div>
                    <br>
                    <div class="form-floating mb-3">
                        <!-- Membuat tempat input -->
                        <label for="password" class="text-white" style="font-size: 12px;">PASSWORD</label>
                        <input type="password" class="form-control bg-custom " name="password" id="password" >
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-block mb-3">Log In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    $valid_id = "yusarnem";
    $valid_password = "pasuwordo";
    
    $id = $_POST["id"];
    $password = $_POST["password"];
    
    if (!is_string($id) || !is_string($password)) {
        echo "Username dan Password harus dalam bentuk String";
        exit();
    }
    
    if ($id === $valid_id && $password === $valid_password) {
        echo "Selamat datang, " . $id;
    } else {
        echo "Login gagal";
        exit();
    }
?>

</body>

</html>
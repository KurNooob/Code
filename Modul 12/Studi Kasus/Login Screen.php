<?php
    session_start(); // memulai session
    // apabila log out ditekan
    if (isset($_POST['logout'])) {
        unset($_SESSION);
        session_destroy();          // menghancurkan sesi login
        echo "<p align=center> Anda telah berhasil Log Out.";
        echo "<p align=center> Silakan klik <a href='Login Screen.php'>disini</a> untuk login lagi.</p>";
        exit;
    }
    // setelah form diisi
    if (isset($_POST['username']) || isset($_POST['password'])) { 
        // apabila username dan password sesuai
        if ($_POST['username'] === "namayuser" && $_POST['password'] === "pasuworudo") {
            // masuk ke halaman login
            if (!isset($_SESSION['login'])) { ?>
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

                    <title>Home Page</title>
                </head>
                <body>
                <div class="container p-5 vertical-center">     <!-- Mengatur container -->
                    <div class="row">
                    <div class="card mx-auto">
                    <div class="card-body p-5">
                        <h3 class="text-center mb-4"><strong>Selamat Datang Anda Berhasil Login</strong></h3>
                            <p style="color: #B5BAC1; text-align: center;">Klik <a href='full.php'>disini</a> untuk mengakses Menu</p>
                            <br>
                            <form method="post">
                                <button type="submit" class="btn btn-primary btn-block mb-3" name="logout">Log Out</button>
                            </form>
                        </div>
                    </div>
                </div>
                </body>
                </html> <?php
            }
        } else { // jika username dan password tidak sesuai
            echo "<p align=center> <size=7px> Login gagal. Mohon periksa Username dan/atau Password.</size=7px>";
            echo "<p align=center> <size=7px> Silakan klik <a href='Login Screen.php'>disini</a> untuk login lagi.</size=7px></p>";
        }
    } else { ?>
        <html lang="en">
        <head>
            
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
            <title>Login Page</title>
        </head>
        <body>
        <div class="container p-5 vertical-center">     <!-- Mengatur container -->
        <div class="row">
            <div class="card mx-auto">
                <div class="card-body p-5">
                    <h3 class="text-center mb-4"><strong>Welcome back!</strong></h3>
                    <p style="color: #B5BAC1; text-align: center;">We're so excited to see you again!</p>
                    <br>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-floating mb-3">
                        <!-- Membuat tempat input -->
                        <label for="username" style="font-size: 12px;">USERNAME</label>
                        <input type="text" class="form-control bg-custom" name="username" id="username">
                    </div>
                    <br>
                    <div class="form-floating mb-3">
                        <!-- Membuat tempat input -->
                        <label for="password" style="font-size: 12px;">PASSWORD</label>
                        <input type="password" class="form-control bg-custom" name="password" id="password" >
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-block mb-3">Log In</button>
                    </form>
                </div>
            </div>
        </div>
        </body>
        </html> <?php
    }
?>
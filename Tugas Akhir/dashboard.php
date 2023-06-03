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
    <link rel="stylesheet" type="text/css" href="dashboardstyle.css">
    <script>
        function showConfirmation(isbn) {
        var result = confirm("Apakah anda yakin ingin menghapus data?");

        if (result) {
            // Apabila iya
            window.location.href ='delete.php?isbn=' + isbn; // Redirect to delete.php with the specified isbn parameter
        } else {
            // Apabila tidak yakin
            return;
        }
        }

        function showConfLogout() {
            var confirmed = confirm("Apakah anda yakin ingin Logout?");

            if (!confirmed) {
                event.preventDefault(); // Prevent form submission
            }
        }

        function changeBackgroundDark() {
            document.body.style.background = 'linear-gradient(#FF99CC 15%, #2B2C28 15%)';
            document.body.style.color = 'white';
        }

        function changeBackgroundLight() {
            document.body.style.background = 'linear-gradient(#CBB3BF 15%, #F3E0EA 15%)';
            document.body.style.color = '#6D4A5C';
        }

        function notyet() {
            alert("This feature is in development");
        }
    </script>
</head>

<body>
    <br>
    <table align="center" >
        <tr>
            <th width="1230" style="background-color: transparent;">
                <div class="header-content">
                <span class="header-text" style="font-size: 25px">Dashboard</span>
                <form method="post" action="login.php">
                    <button type="submit" class="btn btn-primary header-button logout-btn" name="logout" onclick="showConfLogout()">Logout</button>
                </form>
            </div>
            </th>
        </tr>
    </table>
    <table align="center" style="width: 1230px;">
        <tr style="background-color: white;">
            <th style="width: 205px; text-align: center;">
                <a title="In Development" onclick="notyet()">Home</a>
            </th>
            <th style="width: 205px; text-align: center;">
                <a href="#" onclick="changeBackgroundLight()">Light Mode</a>
            </th>
            <th style="width: 205px; text-align: center;">
                <a href="#" onclick="changeBackgroundDark()">Dark Mode</a>
            </th>
            <th style="width: 205px; text-align: center;">
                <a title="In Development" onclick="notyet()">Profile</a>
            </th>
            <th style="width: 205px; text-align: center;">
                <a href="test.php?action=logout" onclick="showConfLogout()">Keluar</a>
            </th>
        </tr>
    </table>
    <br>
    <table align="center" style="width: 1230px;">
        <tr>
            <th colspan="8" style="background-color: transparent;">
            <div class="header-content">
                <span class="header-text" style="font-size: 25px">Data Table</span>
                <button type="submit" class="btn btn-primary header-button" onclick="window.location.href = 'addData.php';">Tambahkan Data</button>
            </div>
            </th>
        </tr>
    </table>
    <table align="center" style="width: 1230px;">
        <tr style="background-color: #F1A9BB;">
            <th width="30">No</th>
            <th width="200">ISBN</th>
            <th width="200">Judul</th>
            <th width="200">Penulis</th>
            <th width="125">Tahun</th>
            <th width="200">Penerbit</th>
            <th width="125">Stock</th>
            <th width="150">Actions</th>
        </tr>
        <?php
        include ("koneksi.php");
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * from datbuku");
        while($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['isbn']; ?></td>
                <td><?php echo $d['judul']; ?></td>
                <td><?php echo $d['penulis']; ?></td>
                <td><?php echo $d['tahun']; ?></td>
                <td><?php echo $d['penerbit']; ?></td>
                <td><?php echo $d['stock']; ?></td>
                <td>
                    <button class="btn btn-primary edit-btn" onclick="location.href='editDat.php?isbn=<?php echo $d['isbn']; ?>'">Edit</button>
                    <button class="btn btn-primary delete-btn" onclick="showConfirmation('<?php echo $d['isbn']; ?>')">Delete</button>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    </div>
    </div>
</body>
</html>
<?php
include "../koneksi.php";

$sql = "SELECT * FROM tb_daftar_game";
$result = mysqli_query($db, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($db));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Saya</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Poppins Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
        }

        .navbar {
            padding: 20px 0;
        }

        .container {
            padding: 7rem 0 0 0;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top" style="background:linear-gradient(to right, #00bfff, #00ffd5);">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><span style="font-family: 'Poppins', sans-serif; font-weight: 800">Pebrianus</span>Pangaleloe</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                    <a class="nav-link" href="../tambah-game/tambah.php">Tambah Game</a>
                    <a class="nav-link active" href="daftar.php">Daftar Game</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Daftar Game -->
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Platform</th>
                    <th scope="col">Status</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $rowNumber = 1; // Initialize a row number

                // Loop through the query results and display data in table rows
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<th scope='row'>" . $rowNumber . "</th>";
                    echo "<td>" . $row['judul'] . "</td>";
                    echo "<td>" . $row['platform'] . "</td>";
                    echo "<td>" . $row['status'] . "</td>";
                    echo "<td>" . $row['deskripsi'] . "</td>";
                    echo "<td>
                            <form method='POST' action='../hapus-game/hapus.php'>
                            <button class='btn btn-danger' name='hapus' value='" . $row['id'] . "'>Hapus</button>
                            </form>
                        </td>";
                    echo "</tr>";

                    $rowNumber++; // Increment row number
                }

                // Free the result set
                mysqli_free_result($result);
                ?>
            </tbody>
        </table>
    </div>
    <!-- Akhir Daftar Game -->

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
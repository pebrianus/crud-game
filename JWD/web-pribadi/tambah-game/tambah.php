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
            padding-top: 7rem;
        }

        .btn {
            color: white;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top" style="background:linear-gradient(to right, #00bfff, #00ffd5);">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php"><span style="font-family: 'Poppins', sans-serif; font-weight: 800">Pebrianus</span>Pangaleloe</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                    <a class="nav-link active" href="tambah.php">Tambah Game</a>
                    <a class="nav-link" href="../daftar-game/daftar.php">Daftar Game</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Tambah Game -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <form action="proses.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Game</label>
                        <input type="text" class="form-control" id="judul" aria-describedby="name" name="judul">
                        <div id="helpjudul" class="form-text">Masukkan judul selengkap dan sejelas mungkin.</div>
                    </div>
                    <div class="mb-3">
                        <label for="platform" class="form-label">Platform</label>
                        <select class="form-select" aria-label="Default select example" name="platform">
                            <option selected>Platform Game Tersebut</option>
                            <option value="PC">PC</option>
                            <option value="Android">Android</option>
                            <option value="PS1">PS1</option>
                            <option value="PS2">PS2</option>
                            <option value="PSP">PSP</option>
                            <option value="GBA">GBA</option>
                            <option value="GBC">GBC</option>
                            <option value="NES">NES</option>
                            <option value="SNES">SNES</option>
                            <option value="NDS">NDS</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" aria-label="Default select example" name="status">
                            <option selected>Status Terakhir Ketika Bermain Game Tersebut</option>
                            <option value="Tamat">Tamat</option>
                            <option value="Tidak Tamat">Tidak Tamat</option>
                            <option value="On Progres">On Progres</option>
                            <option value="Berhenti">Berhenti</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" placeholder="Deskripsi penjelas untuk game tersebut" id="floatingTextarea2" style="height: 100px" name="deskripsi"></textarea>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-info" name="simpan" value="simpan">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- Akhir Tambah Game -->


    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
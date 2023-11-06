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

    .home {
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          <a class="nav-link" href="tambah-game/tambah.php">Tambah Game</a>
          <a class="nav-link" href="daftar-game/daftar.php">Daftar Game</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Home -->
  <section class="home">
    <div class="container">
      <div class="row mb-3">
        <div class="col text-center">
          <img src="img/home.jpg" alt="home" width="500px">
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <h3>Tugas Perancangan Sistem Informasi</h3>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-4"></div>
        <div class="col">
          <p>Nama</p>
          <p>NRP</p>
          <p>Kelas</p>
          <p>Jurusan</p>
        </div>
        <div class="col">
          <p>: Pebrianus Pangaleloe</p>
          <p>: 21031024</p>
          <p>: N (Malam)</p>
          <p>: Sistem Informasi</p>
        </div>
        <div class="col-3"></div>
      </div>
      <div class="row text-center">
        <div class="col">
          Web CRUD yang dapat menambah dan menghapus daftar game yang pernah dimainkan.
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Home -->

  <!-- Script Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
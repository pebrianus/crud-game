<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $platform = $_POST['platform'];
    $status = $_POST['status'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "INSERT INTO tb_daftar_game (judul, platform, status, deskripsi) VALUES ('$judul', '$platform', '$status', '$deskripsi')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header("location:../daftar-game/daftar.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($db);
    }
}

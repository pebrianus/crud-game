<?php
include '../koneksi.php';

$sql = "SELECT * FROM tb_daftar_game";
$query = mysqli_query($db, $sql);

if (isset($_POST['hapus'])) {
    $id = $_POST['hapus'];
    $hapus = "DELETE FROM tb_daftar_game WHERE id = '$id'";
    $result = mysqli_query($db, $hapus);

    if ($result) {
        header("location:../daftar-game/daftar.php");
        exit;
    } else {
        echo "Data mahasiswa tidak ditemukan.";
        exit;
    }
}

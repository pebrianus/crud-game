<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $hp = $_POST['nohp'];
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];
    $pilihan = $_POST['pilihan'];

    $lokasi_file = $_FILES['berkas']['tmp_name'];
    $tipe_file = pathinfo($_FILES['berkas']['name'], PATHINFO_EXTENSION);
    $file_berkas = $nama . "." . $tipe_file;
    $folder = "../berkas/$file_berkas";

    $sql = "INSERT INTO tb_anggota (nama, email, hp, semester, ipk, pilihan, berkas) VALUES ('$nama', '$email', '$hp', '$semester', '$ipk', '$pilihan', '$file_berkas')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        move_uploaded_file($lokasi_file, $folder);

        header("location:../pages/hasil-beasiswa.php");
        exit(); 
    } else {
        echo "Error: " . mysqli_error($db);
    }
}
?>

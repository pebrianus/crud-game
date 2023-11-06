<?php
include "../template/header.html";
include "../koneksi.php";
?>

<div class="card container">
    <div class="card-body">
        <table class="table">
            <tr>
                <thead class="table-info">
                    <th>No</th>
                    <th>Nama</th>
                    <th>email</th>
                    <th>HP</th>
                    <th>Semester</th>
                    <th>IPK</th>
                    <th>Pilihan</th>
                    <th>Berkas</th>
                    <th>Status</th>
                </thead>
            </tr>
            <tr>
                <tbody>
                    <?php
                    // SQL query to fetch data from the 'beasiswa' table
                    $sql = "SELECT * FROM tb_anggota";

                    $result = mysqli_query($db, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        //untuk nomor di tabel hasil
                        $rowNumber = 1;
                        // Output data setiap baris
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $rowNumber . "</td>";
                            echo "<td>" . $row["nama"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>" . $row["hp"] . "</td>";
                            echo "<td>" . $row["semester"] . "</td>";
                            echo "<td>" . $row["ipk"] . "</td>";
                            echo "<td>" . $row["pilihan"] . "</td>";
                            echo "<td>" . $row["berkas"] . "</td>";
                            echo "<td>Belum Di Verifikasi</td>";
                            echo "</tr>";

                            $rowNumber++;
                        }
                    } else {
                        echo "<tr><td colspan='8'>No records found</td></tr>";
                    }
                    mysqli_close($db);
                    ?>
                </tbody>
            </tr>
        </table>
    </div>
</div>

<?php
include "../template/footer.html";
?>
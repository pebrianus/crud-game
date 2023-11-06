<?php
include "../template/header.html";
?>

<div class="card container-fluid w-50 mt-5 mb-5">
  <div class="card-body">
    <form action="../proses/daftar-beasiswa-proses.php" method="post" enctype="multipart/form-data" onsubmit="return validateEmail()">
      <div class="mb-3">
        <label class="form-label">Masukkan Nama</label>
        <input type="text" class="form-control" name="nama">
      </div>
      <div class="mb-3">
        <label class="form-label">Masukkan Email</label>
        <input type="email" class="form-control" name="email" id="emailInput" oninvalid="this.setCustomValidity('Tolong Masukkan Email Yang Benar')" oninput="validateEmail()">
      </div>
      <div class="mb-3">
        <label class="form-label">Masukkan No HP</label>
        <input type="text" class="form-control" name="nohp" id="nohpInput" oninput="validatePhoneNumber(this)">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Semester Saat Ini</label>
        <select class="form-select" name="semester">
          <option selected>Pilih Semester</option>
          <option value="1">Semester 1</option>
          <option value="2">Semester 2</option>
          <option value="3">Semester 3</option>
          <option value="4">Semester 4</option>
          <option value="5">Semester 5</option>
          <option value="6">Semester 6</option>
          <option value="7">Semester 7</option>
          <option value="8">Semester 8</option>
        </select>
      </div>
      <div class="mb-3">

        <label for="disabledTextInput" class="form-label">IPK</label>
        <input type="text" class="form-control" id="disabledTextInput" name="ipk" readonly>

      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Pilihan Beasiswa</label>
        <select class="form-select" name="pilihan">
          <option selected>Pilih Beasiswa</option>
          <option value="Akademik">Akademik</option>
          <option value="Non-Akademik">Non-Akademik</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Upload Berkas Syarat</label>
        <input type="file" class="form-control" name="berkas">
      </div>
      <button type="submit" class="btn btn-primary" name="simpan" value="simpan">Submit</button>
    </form>
  </div>
</div>

<script>
  // mencari field email berdasarkan id nya
  const emailInput = document.getElementById('emailInput');

  function validateEmail() {
    const emailInput = document.getElementById('emailInput');
    const enteredEmail = emailInput.value;
    const isValidFormat = validateEmailFormat(enteredEmail);

    if (!isValidFormat) {
      emailInput.setCustomValidity('Tolong Masukkan Email Yang Benar');
    } else {
      emailInput.setCustomValidity('');
    }
  }


  // Function to validate email format using regex
  //regex = regular expression, akan mengecek jika email yang di masukkan match/pas dengan format
  function validateEmailFormat(email) {
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailRegex.test(email);
  }

  // Add an event listener to the email input field to check the format on input change
  emailInput.addEventListener('input', (event) => {
    const enteredEmail = event.target.value;
    const isValidFormat = validateEmailFormat(enteredEmail);
  });

  function validatePhoneNumber(input) {
    // membuat tidak bisa input karakter salin angka
    input.value = input.value.replace(/\D/g, '');
  }

  // kode javascript untuk membuat nomor random buat ipk
  window.addEventListener('DOMContentLoaded', (event) => {
    // generate nomor random antara 2 dan 4
    const minIPK = 2.0;
    const maxIPK = 4.0;
    const randomIPK = (Math.random() * (maxIPK - minIPK)) + minIPK;

    // mencari field ipkinput dan memasukkan nilai ipk nya
    const ipkInput = document.querySelector('input[name="ipk"]');
    ipkInput.value = randomIPK.toFixed(2); // Round to 2 decimal places

    // mencari elemen select pilihan beasiswa
    const pilihanBeasiswa = document.querySelector('select[name="pilihan"]');

    // mencari element upload
    const uploadBerkas = document.querySelector('input[name="berkas"]');

    // mencari element tombol submit
    const submitButton = document.querySelector('button[name="simpan"]');

    // cek apakah ipk < 3
    if (randomIPK < 3.0) {
      // Disable pilihan
      pilihanBeasiswa.disabled = true;

      // Disable upload
      uploadBerkas.disabled = true;

      // Disable submit
      submitButton.disabled = true;
    } else {
      pilihanBeasiswa.focus();
    }
  });
</script>

<?php
include "../template/footer.html";
?>
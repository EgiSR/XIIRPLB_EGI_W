<?php
session_start();

// Cek form telah disubmit
if (isset($_POST['registrasi'])) {

  // Ambil data formulir
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Query untuk memasukkan data ke database
  $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

  // Eksekusi query
  if (mysqli_query($conn, $sql)) {
    echo "Pendaftaran berhasil. Silakan login <a href='login.php'>di sini</a>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Tutup koneksi database
mysqli_close($conn);
?>

<?php
//menerima input dari form
$username = $_POST['username'];
$password = $_POST['password'];
$id_level = $_POST['id_level']; //hak akses

//enkripsi password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

//query untuk menambahkan user baru
$sql = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$hashed_password', '$role')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Registrasi berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

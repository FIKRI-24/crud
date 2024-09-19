<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
// $password = md5($_POST['password']); // uncomment jika password di hash dengan md5

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$jml = mysqli_num_rows($query);

if($jml > 0){
    $data = mysqli_fetch_array($query);
    // Simpan data session
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];

    echo "<script>
    alert('Login berhasil');
    window.location.href='index.php';
    </script>";
} else {
    echo "<script>
    alert('Login gagal');
    window.location.href='login.php';
    </script>";
}

// Tutup koneksi
mysqli_close($conn);
?>

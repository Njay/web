<?php

include 'connect.php';
$nama = $_POST['nama'];
$email = $_POST['email'];
$komentar = $_POST['komentar'];

if (empty($nama) && empty($email) && empty($komentar))
{
    echo "FORM MASIH KOSONG BOS!";

}
else
{
    $query = mysqli_query($conn, "insert into comment set
    nama = '$nama', email = '$email', komentar = '$komentar'");
    if ($query == TRUE){
        echo "Berhasil menambah komentar, Lihat daftar  <a href='comment.php'>komentar</a>";

    }
    else {
        echo "Unknown ERROR";
    }
}
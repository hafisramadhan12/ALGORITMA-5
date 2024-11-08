<?php
// Memulai sesi
session_start();
// Menyimpan data ke sesi
$_SESSION["namaPengguna"] = "hafis code";
// Mengakses data dari sesi
echo 'Selamat Datang, ' . $_SESSION["namaPengguna"] . '!';

// Menghapus variabel "namaPengguna" dari sesi
unset($_SESSION["namaPengguna"]);
// Menghancurkan seluruh sesi
session_destroy();

echo "<p><strong><i>by hafis ramadhan</strong>";

?>

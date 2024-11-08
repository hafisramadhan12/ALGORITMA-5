<?php
// Membuat cookie yang berlaku selama satu jam
setcookie("user", "hafis code ", time() + (3700), "/");
if(isset($_COOKIE["user"])) {
    echo "Selamat datang " . $_COOKIE["user"];
} else {
    echo "Selamat datang, tamu!";
}
// Mengatur expiry time ke satu jam yang lalu
setcookie("user", "", time() - 3700);


echo "<p><strong><i>by hafis ramadhan</strong>";

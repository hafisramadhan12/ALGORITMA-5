<?php
function tambahSatu(&$nilai) {
    $nilai++;
}

$angka = 11;
tambahSatu($angka);
echo $angka; // Output: 11


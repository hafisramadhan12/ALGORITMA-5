<?php
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
  $umur = $thn_sekarang - $thn_lahir;
  return $umur;
}

echo "Umur saya adalah ". hitungUmur(2008, 2024) ." tahun";

echo "<p><strong><i>by hafis ramadhan</strong>";

?>


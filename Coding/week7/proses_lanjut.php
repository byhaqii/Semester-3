<?php
$pilihBuah = $_POST['pilihBuah'];
$warnaFavorit = $_POST['warna'];
$jenisKelamin = $_POST['jenisKelamin'];

$hasil = "Anda memilih buah: " . $pilihBuah . "<br>";
$hasil .= "Warna favorit Anda: ";
foreach ($warnaFavorit as $warna) {
    $hasil .= $warna . ", ";
}
$hasil .= "<br>";
$hasil .= "Jenis kelamin Anda: " . $jenisKelamin;

echo json_encode($hasil);
?>
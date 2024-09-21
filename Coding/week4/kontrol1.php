<?php
$nilai1 = 85;
$nilai2 = 92;
$nilai3 = 78;
$nilai4 = 64;
$nilai5 = 90;
$nilai6 = 75;
$nilai7 = 88;
$nilai8 = 79;
$nilai9 = 70;
$nilai10 = 96;

$totalNilai = 0;
$jumlahSiswa = 0;

for ($i = 1; $i <= 10; $i++) {
    $nilai = ${"nilai" . $i};
    $totalNilai += $nilai;
    $jumlahSiswa++;
}

$maxNilai = max($nilai1, $nilai2, $nilai3, $nilai4, $nilai5, $nilai6, $nilai7, $nilai8, $nilai9, $nilai10);
$minNilai = min($nilai1, $nilai2, $nilai3, $nilai4, $nilai5, $nilai6, $nilai7, $nilai8, $nilai9, $nilai10);
$totalNilai -= ($maxNilai + $minNilai);

$rataRata = $totalNilai / ($jumlahSiswa - 4); 

echo "Total nilai setelah mengabaikan nilai tertinggi dan terendah: $totalNilai\n";
echo"<br>";
echo "Nilai rata-rata: " . number_format($rataRata, 2) . "\n";
?>



<?php
function hitungumur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam."<br>";
    echo "Perkenalkan, nama saya ".$nama."<br>";

    echo "Saya berusia ". hitungumur(1988, 2023) ." tahun<br>";
    echo "Senang berkenalan dengan anda<br>";
}

perkenalan("Elok");
?>

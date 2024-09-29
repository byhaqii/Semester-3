<?php
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Handama", "Hallo");

echo "<hr>";

$saya = "Elok";
$sucapanSalam = "Selamat pagi";

perkenalan($saya, $sucapanSalam);

echo "<hr>";
perkenalan($saya);
?>

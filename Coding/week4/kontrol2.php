<?php
$product_price = 120000; 

$discount_rate = 20; // 20%

if ($product_price > 100000) {
    echo "Harga asli produk: Rp $product_price\n";
    echo"<br>";

    $discount_amount = ($product_price * $discount_rate) / 100;
    echo "Jumlah diskon (20%): Rp $discount_amount\n";
    echo"<br>";

    $final_price = $product_price - $discount_amount;
    echo "Harga setelah diskon: Rp $final_price\n";
    echo"<br>";

} else {
    $final_price = $product_price;
    echo "Harga tidak memenuhi syarat untuk diskon.\n";
    echo "Harga yang harus dibayar: Rp $final_price\n";
}
?>


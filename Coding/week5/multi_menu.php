<?php
$menu = [
    [ 'nama' => 'Beranda' ],
    [ 'nama' => 'Berita', 'subMenu' => [
        [ 'nama' => 'Wisata', 'subMenu' => [
            [ 'nama' => 'Pantai' ],
            [ 'nama' => 'Gunung' ],
        ]],
        [ 'nama' => 'Kuliner' ],
        [ 'nama' => 'Hiburan' ],
    ]],
    [ 'nama' => 'Tentang' ],
    [ 'nama' => 'Kontak' ],
];

function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}";
        
        // Check if the item has a subMenu and call the function recursively
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>

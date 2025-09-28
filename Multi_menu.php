<?php

$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

function tampilkanMenuBertingkat (array $menu) {
    echo "<ul>";
    
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}";
        
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']);
        }
        
        echo "</li>";
    }
    
    echo "</ul>";
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Menu Bertingkat Rekursif</title>
    <link rel="stylesheet" href="style1.css"> 
</head>
<body>

    <?php
    // Panggil fungsi untuk menampilkan menu
    tampilkanMenuBertingkat($menu);
    ?>

</body>
</html>
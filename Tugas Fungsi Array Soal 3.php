<?php
// Membuat array asosiatif multidimensi berisi 3 produk e-commerce
$produk = [
    [
        "nama" => "Laptop ASUS ROG",
        "kategori" => "Elektronik",
        "harga" => 18000000,
        "rating" => 4.8
    ],
    [
        "nama" => "Headphone Sony WH-1000XM5",
        "kategori" => "Aksesoris",
        "harga" => 5500000,
        "rating" => 4.7
    ],
    [
        "nama" => "iPhone 15 Pro",
        "kategori" => "Smartphone",
        "harga" => 22000000,
        "rating" => 4.9
    ]
];

// Contoh: cetak semua produk
echo "<b>Daftar Produk:</b><br>";
foreach ($produk as $p) {
    echo "Nama: {$p['nama']} | Kategori: {$p['kategori']} | Harga: Rp " . number_format($p['harga'], 0, ',', '.') . " | Rating: {$p['rating']}<br>";
}

// Mencari produk dengan harga tertinggi
$tertinggi = $produk[0];
foreach ($produk as $p) {
    if ($p['harga'] > $tertinggi['harga']) {
        $tertinggi = $p;
    }
}

echo "<br><b>Produk dengan harga tertinggi:</b><br>";
echo "Nama: {$tertinggi['nama']}<br>";
echo "Kategori: {$tertinggi['kategori']}<br>";
echo "Harga: Rp " . number_format($tertinggi['harga'], 0, ',', '.') . "<br>";
echo "Rating: {$tertinggi['rating']}";
?>

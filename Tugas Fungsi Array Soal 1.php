<?php
// Membuat array 2 dimensi berisi data 3 siswa
$siswa = [
    ["Nama" => "Andi", "Matematika" => 85, "Bahasa" => 90],
    ["Nama" => "Budi", "Matematika" => 78, "Bahasa" => 88],
    ["Nama" => "Cici", "Matematika" => 92, "Bahasa" => 95]
];

// Cetak nilai Bahasa dari siswa ke-2 (indeks 1)
echo "Nilai Bahasa siswa ke-2 (" . $siswa[1]["Nama"] . ") adalah: " . $siswa[1]["Bahasa"];
echo "<br><br>";

// Cetak semua data menggunakan looping
echo "<b>Data Semua Siswa:</b><br>";
foreach ($siswa as $data) {
    echo "Nama: " . $data["Nama"] . 
         " | Nilai Matematika: " . $data["Matematika"] . 
         " | Nilai Bahasa: " . $data["Bahasa"] . "<br>";
}
?>

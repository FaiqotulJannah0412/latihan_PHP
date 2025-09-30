<?php
// Array nilai siswa
$nilai_siswa = [
    ["nama" => "Andi", "nilai" => 90],
    ["nama" => "Budi", "nilai" => 77],
    ["nama" => "Cici", "nilai" => 45],
    ["nama" => "Dina", "nilai" => 59],
    ["nama" => "Eko", "nilai" => 35],
    ["nama" => "Fani", "nilai" => 64],
    ["nama" => "Gilang", "nilai" => 80]
];

echo "<h2>Daftar Nilai dan Grade Siswa</h2>";

/* 1. FOR */
echo "<h3>Perulangan FOR</h3>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>No</th><th>Nama</th><th>Nilai</th><th>Grade</th></tr>";
for ($i = 0; $i < count($nilai_siswa); $i++) {
    $nama = $nilai_siswa[$i]["nama"];
    $nilai = $nilai_siswa[$i]["nilai"];
    
    if ($nilai >= 80) $grade = "A";
    elseif ($nilai >= 61) $grade = "B";
    elseif ($nilai >= 51) $grade = "C";
    elseif ($nilai >= 41) $grade = "D";
    else $grade = "E";

    echo "<tr><td>".($i+1)."</td><td>$nama</td><td>$nilai</td><td>$grade</td></tr>";
}
echo "</table>";

/* 2. WHILE */
echo "<h3>Perulangan WHILE</h3>";
$i = 0;
while ($i < count($nilai_siswa)) {
    echo $nilai_siswa[$i]["nama"]." mendapat nilai ".$nilai_siswa[$i]["nilai"]."<br>";
    $i++;
}

/* 3. DO WHILE */
echo "<h3>Perulangan DO WHILE</h3>";
$j = 0;
do {
    echo "Data ke-".($j+1)." adalah ".$nilai_siswa[$j]["nama"]."<br>";
    $j++;
} while ($j < count($nilai_siswa));

/* 4. FOREACH */
echo "<h3>Perulangan FOREACH</h3>";
foreach ($nilai_siswa as $index => $data) {
    echo ($index+1).". ".$data["nama"]." nilainya ".$data["nilai"]."<br>";
}
?>

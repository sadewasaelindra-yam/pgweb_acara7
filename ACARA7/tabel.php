<?php
// Deklarasi variabel
$kecamatan = array("Imogiri", "Pajangan", "Sedayu", "Srandakan");
$luas = array(54.49, 33.25, 34.36, 18.32);
$penduduk = array(68000, 39000, 50000, 32000);

// Membuat tabel HTML
echo "<html><body>";
echo "<table border='1'>";
echo "<tr><th>Kecamatan</th><th>Luas</th><th>Jumlah Penduduk</th></tr>";

// Menampilkan data tabel
for ($i = 0; $i < count($kecamatan); $i++) {
    echo "<tr>";
    echo "<td>" . $kecamatan[$i] . "</td>";
    echo "<td>" . $luas[$i] . "</td>";
    echo "<td>" . $penduduk[$i] . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "</body></html>";
?>
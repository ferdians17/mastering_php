<?php
define('makanan', 'nasi goreng');
define('_buah', 'Jeruk');
define('_sayur1', 'Sayur Bayam');
define('_sayur2', 'Sayur Daun Ubi');
$sayuran = "Sayur Terong Santan";

echo makanan;
echo "<br/>";

echo "Nama buah yang ditetapkan : ". _buah;
echo "<br/>";

echo "Sayuran yang ditetapkan pertama adalah :" . _sayur1 . " dan : " . _sayur2 . " <br/>";
echo "Sayuran yang dapat diganti sebelumnya bernama $sayuran <br/>";

$sayuran = "Sayur Pepaya Muda";
echo "Sekarang sayuran bebasnya berubah menjadi $sayuran";
?>
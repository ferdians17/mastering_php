<?php
$variabel1 = 'Penulisan variabel dimulai dengan tanda $';
$_variabel = 'Nama variabel dimulai dengan tanda _ atau huruf';
$_varTiga = 'Nama variabel tidak dapat dimulai dengan angka atau simbol <br/>';
$varEmpat = 'Ditulis secara camelcase(hurufawalKapital) <br/>
dan nilai dapat dituliskan menggunakan petik satu maupun petik dua berdasar kebutuhan <br/>
dan dapat ditulis tanpa petik untuk nilai angka <br/>';

$satu = 10;
$dua_ = "Dua";

echo "Isi Variabel 1 $variabel1 <br/>";
echo "Isi Variabel 2 " . $_variabel . " dipanggil dengan echo <br/>";
echo "Isi Variabel satu: " . $satu . " dan variabel dua: " .$dua_. " dipanggil dengan echo <br/>";
echo $_varTiga . $varEmpat;
?>
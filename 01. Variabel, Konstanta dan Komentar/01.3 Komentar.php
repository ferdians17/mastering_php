<?php
// ini adalah komentar
echo "Ini adalah kata yang tampil pertama pada browser <br/>";
/*
ini juga komentar namun lebih dari sebaris
setiap komentar hanya dapat dibaca oleh penulis kode
dan tidak akan ditampilkan pada web browser
sehingga pengguna web tidak akan melihat nya
*/
$satu = 1; //variabel dapat diisi dengan nilai angka, huruf maupun simbol
$dua = "2"; //angka dapat dituliskan langsung tanpa petik maupun menggunakan petik
$hasil = $satu + $dua; //variabel dapat menampung isi dari variabel lainnya

// dibawah ini akan menampilkan nilai dari masing-masing variabel diatas
// juga akan menampilkan hasil penambahan dari dua variabel yang ditampung oleh variabek hasil
echo "$satu + $dua = $hasil <br/>";

// nilai atau isi dari variabel dapat di timpa atau diisi ulang dengan nilai baru
// disini variabel satu akan diubah dengan nilai baru
$satu = 7;
echo "nilai variabel \$satu adalah $satu <br/>";

/*
penggunaan \ sebelum simbol $ bertujuan agar dollar ditampilkan sebagai simbol
bukan sebagai pemanggil nama variabel seperti pada $satu setelahnya yang akan
menampilkan nilai dari variabel satu dengan nilai 7
*/
?>
<?php
$nama="firdausa";
$kelas="xirpl2";
$alamat="sawojajar";
function tampil_nama(){
			global$nama;
			echo "nama Saya:".$nama;
echo "<br>";

}

function tampil_kelas(){
          global$kelas;
          echo "kelas saya :".$kelas;
echo "<br>";
}

function tampil_alamat(){
	global$alamat;
	echo "alamat saya:".$alamat;

echo "<br>";
}
tampil_nama();
tampil_alamat();
tampil_kelas();
     
;
?>
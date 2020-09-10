<?php

echo "Animal <hr>";

class Kucing{
	public $nama, $jumlah_kaki, $bisa_terbang, $suara, ;

}


$Kucing = new Kucing;
$Kucing->nama = "Simpol";
$Kucing->jumlah_kaki = "4";
$Kucing->bisa_terbang = "tidak";
$Kucing->suara = "meong";

echo " Merk: $Kucing->nama";
echo "<br>";
echo " Tipe: $Kucing->jumlah_kaki";
echo "<br>";
echo " Chipset: $Kucing->bisa_terbang";
echo "<br>";
echo " Ram: $Kucing->suara";
echo "<hr>";

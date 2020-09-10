<?php

class Smartphone{
	public $merk, $tipe, $chipset, $ram, $resolusicamera, $harga;

}


$oneplus = new Smartphone;
$oneplus->merk = "Oneplus";
$oneplus->tipe = "Oneplus nord";
$oneplus->chipset = "Snapdragon 765G";
$oneplus->ram = "12GB";
$oneplus->resolusicamera = "48MP";
$oneplus->harga = "RP 5.900.000";

echo " Merk:$oneplus->merk";
echo "<br>";
echo " Tipe:$oneplus->tipe";
echo "<br>";
echo " Chipset:$oneplus->chipset";
echo "<br>";
echo " Ram:$oneplus->ram";
echo "<br>";
echo "$ Resolusi Camera:oneplus->resolusicamera";
echo "<br>";
echo " Harga:$oneplus->harga";
echo "<br>";

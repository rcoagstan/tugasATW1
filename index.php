<?php

class Smartphone{
	public $merk, $tipe, $chipset, $ram, $resolusicamera, $harga;

}


$oneplus = new Smartphone;
$oneplus->merk = "oneplus";
$oneplus->tipe = "oneplus nord";
$oneplus->chipset = "Snapdragon 765G";
$oneplus->ram = "12GB";
$oneplus->resolusicamera = "48MP";
$oneplus->harga = "RP 5.900.000";

echo "$oneplus->merk";<br>
echo "$oneplus->tipe";<br>
echo "$oneplus->chipset";<br>
echo "$oneplus->ram";<br>
echo "$oneplus->resolusicamera";<br>
echo "$oneplus->harga";<br>

<?php
echo "Tere maailm";
echo "<br>";

class pseudo{}

$isik=new pseudo();
$isik->eesnimi="Martin";
$isik->perenimi="Kooga";
$isik->vanus=23;
$isik->sugu="mees";


$eesnimi_algab_vokaaliga=false;

if($eesnimi_algab_vokaaliga){
    echo "Nimi algab vokaaliga";
}

print_r($isik);



?>
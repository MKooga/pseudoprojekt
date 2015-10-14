<?php
echo "Tere maailm";
echo "<br>";

class pseudo{}

$isik=new pseudo();
$isik->eesnimi="Martin";
$isik->perenimi="Kooga";
$isik->vanus=23;
$isik->sugu="mees";




function eesnimi_algab_vokaaliga($tüüp){

    $vowels = array('A', 'E', 'I', 'O', 'U', 'Õ', 'Ä', 'Ö', 'Ü');
    $eesnime_array=str_split((string)$tüüp->eesnimi);

    if(in_array($eesnime_array[0],$vowels)){
        return true;
    }

}

if(eesnimi_algab_vokaaliga($isik)){
    echo "Nimi algab vokaaliga";
}

print_r($isik);



?>
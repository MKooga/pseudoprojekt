<?php
echo "Tere maailm";
echo "<br>";

$isik=[
    "eesnimi"=>"Martin ",
    "perenimi"=>"Kooga ",
    "vanus"=>23,
];


$eesnimi_algab_vokaaliga=false;

if($eesnimi_algab_vokaaliga){
    echo "Nimi algab vokaaliga";
}

echo $isik["eesnimi"];
echo $isik["perenimi"];
echo "(". $isik["vanus"] .")";
echo "<br>";



?>
<?php

$arr = array();
$kota = array( 'Bandung', 'Jakarta');
var_dump($arr);
echo "<br>";
var_dump($kota);

$kota[2]= 'Surabaya';
echo "<br>";
var_dump($kota);

$kota[] = 'Sukabumi';
echo "<br>";
var_dump($kota);

echo"<br>"; echo"<br/>";

for ($i=0; $i<count($kota); $i++){
    echo $kota [$i];
    echo"<br>";
}

echo"<br>"; echo"<br/>";

foreach($kota as $x){
    echo $x;
    echo "<br>";
}

echo"<br>"; echo"<br/>";

foreach($kota as $key){
    echo $key;
    echo "<br>";
}

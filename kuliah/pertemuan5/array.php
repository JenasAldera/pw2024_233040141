<?php

$hari1 = 'senin';
$hari2 = 'selasa';
$hari3 = 'rabu';
$hari4 = 'kamis';
$hari5 = 'jumat';
$hari6 = 'sabtu';
$hari7 = 'minggu';

$nama_hari = [ 'senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'];

echo '<br>';
echo '<br>';
echo '<br>';

$pembangkit = true;
$kereta = [
    'lokomotif', 300.0,
    'gerbong_barang', [['311', '322'], 'penumpang_2'],'pembangkit', 1
];

echo $kereta[2];
echo $kereta[3][0][0];

echo '<br>';
echo '<br>';
echo '<br>';

var_dump($nama_hari);

?>
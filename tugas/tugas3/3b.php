<?php

function UrutanAngka($no) {
    $xno =1;
    for ($i = 1; $i <= $no; $i++){
        for($j = 1; $j <=$i; $j++){
            echo $xno++." ";
        }
        echo("<br>");
    }
}
UrutanAngka(5);

?>
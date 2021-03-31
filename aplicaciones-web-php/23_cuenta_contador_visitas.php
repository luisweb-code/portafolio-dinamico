<?php


function contador($archivo){
    $fp = fopen($archivo, 'rw');

    $num = fgets($fp, 5);
    $num+=1;
    echo 'Usted es el visitante numero: '.$num;
}



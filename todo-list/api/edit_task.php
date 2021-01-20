<?php 

    include '../funkcije.php';
    
    if( isset($_POST['tekst']) && $_POST['tekst'] != "" ){
        $tekst = $_POST['tekst'];
    }else{
        exit("Greska 1 - morate unijeti tekst...");
    }
    if( isset($_POST['opis']) && $_POST['opis'] != "" ){
        $opis = $_POST['opis'];
    }else{
        exit("Greska 2 - morate unijeti opis...");
    }
    if( isset($_POST['zavrsen']) ){
        $zavrsen = true;
    }else{
        $zavrsen = false;
    }

    $index = $_POST['index'];
    $todos[$index]['tekst'] = $tekst;
    $todos[$index]['opis'] = $opis;
    $todos[$index]['zavrsen'] = $zavrsen;

    if( file_put_contents( '../todo.db', json_encode($todos) ) ){
        echo "OK";
    }else{
        echo "ERR";
    }
?>
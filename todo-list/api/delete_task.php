<?php 

    include '../funkcije.php';
    
    $index = $_POST['index'];
    //var_dump($todos);
    array_splice($todos,$index, 1);
    //var_dump( $todos);
    
    if( file_put_contents( '../todo.db', json_encode($todos, true) ) ){
        echo "OK";
    }else{
        echo "ERR";
    }

?>
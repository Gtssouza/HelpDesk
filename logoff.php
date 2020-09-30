<?php

    session_start();

    //remover indices do array de sessão, remove o indice apenas se existir
    // --> unset(array, indice)

    //destruir a variavel de sessão
    //--> session_detroy()

    session_destroy();
    header('Location:index.php');

?>
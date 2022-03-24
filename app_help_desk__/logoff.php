<?php
    session_start();

    // echo '<pre>';
    //     print_r($_SESSION);
    // echo '<pre>';
    // //remover índices do array de sessão
    // //unset()
    // unset($_SESSION['x']);
    // echo '<pre>';
    //     print_r($_SESSION);
    // echo '<pre>';

    //destruir a variável de sessão
    //session_dsetroy()
    session_destroy();
    header('Location: home.php');
    
    // echo '<pre>';
    //     print_r($_SESSION);
    // echo '<pre>';
?>
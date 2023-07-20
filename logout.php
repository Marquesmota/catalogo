<?php
    if (!isset($_SESSION)){
        session_start();
    }

    session_destroy();

    header ("Location: login.php");
?>
<!-- Finalizar o login e finaliza a sessão do usuario-->
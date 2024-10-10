<?php

    session_name('chuletaaa');
    if (!isset($_SESSION)) {
        session_start();
    }

    //segurança digital

    //verificar se o usuario esta logado na sessao
    if (!isset($_SESSION['login_usuario'])) {
        //se nao existir, redirecionamos a sessao por segurança
        header('location: login.php'); // redirecionamento
        exit;
    }

    $nome_de_sessao = session_name();
    if (!isset($_SESSION['nome_da_sessao']) 
        or ($_SESSION['nome_da_sessao']!=$nome_de_sessao)){
            session_destroy();
            header('location:login.php');
}
?>
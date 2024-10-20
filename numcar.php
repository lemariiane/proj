<?php
session_start();

function usuarioEstaLogado() {
    return isset ($_SESSION["usuario_logado"]);
}

function usuarioLogado() {
    return $_SESSION["usuario_logado"];
}

function logaUsuario($_numcar) {
    $_SESSION["usuario_logado"] = $_numcar;
}

function logout() {
    session_destroy();
}
?>
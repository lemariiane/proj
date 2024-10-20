<?php require_once 'conectamysqli.php' ?>
<?php require_once 'numcar.php' ?>
<?php require_once 'banco-logar.php' ?>
<?php
    $numcar = buscaUsuario($conexao,
                            $_POST['numcar'],$_POST['senha']);
    
    if($numcar===null){
        header ("Location:login.php?numcar=0");
    } else {
        logaUsuario($numcar['numcar']);
        header ("Location:index.php?numcar=1");
    }
?>
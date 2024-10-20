<?php require_once 'conecta.php' ?>
<?php
    $login= $_POST['login'];
    $senha= md5($_POST['senha']);

    inserir($conexao, $login, $senha);
  

    function inserir($conexao, $login, $senha) {
        $sql = "INSERT INTO usuarios(login,senha)
                values('$login','$senha')";
        
        if(mysqli_query($conexao, $sql)) {
            echo 'Adicionando';
            header ("Location:logininterno.php");
        } else {
            $erro = mysqli_erro($conexao);
            echo 'Não adicionado';
            echo $erro;
        }   
    }
?>
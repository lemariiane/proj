<?php require_once 'conecta.php' ?>
<?php
    $numcar= $_POST['numcar'];
    $senha= md5($_POST['senha']);

    inserir($conexao, $numcar, $senha);
  

    function inserir($conexao, $numcar, $senha) {
        $sql = "INSERT INTO logar (numcar,senha)
                values('$numcar','$senha')";
        
        if(mysqli_query($conexao, $sql)) {
            echo 'Adicionando';
            header ("Location:menu.php");
        } else {
            $erro = mysqli_erro($conexao);
            echo 'Não adicionado';
            echo $erro;
        }   
    }
?>
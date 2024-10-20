<?php require_once "conexao.php";  ?>
<?php
class ClassAgendamentoDAO {
    public function cadastrarAgendamento($novoAgendamento) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO agendamento(ficha, nomepac, telefonepac, horario, datar ,departamento)
                    VALUES (?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $novoAgendamento->getFicha());
            $stmt->bindValue(2, $novoAgendamento->getNomepac());
            $stmt->bindValue(3, $novoAgendamento->getTelefonepac());
            $stmt->bindValue(4, $novoAgendamento->getDatar());
            $stmt->bindValue(5, $novoAgendamento->getHorario());
            $stmt->bindValue(6, $novoAgendamento->getDepartamento());

            $stmt->execute();
            
            echo '<main><div class="success-message"><center><h3>Agendamento realizado com sucesso!</h3></center></div></main>';
            
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }
}
?> 

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Agendamento</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>

<header>
        <nav class="navbar">
            <strong><p class="logo">Grupo União</p></strong>
            
            <ul class="nav-menu">
                <li class="nav-item"><a class="nav-link" href="index.php"><strong>Menu</strong></a></li>
                <li class="nav-item"><a class="nav-link" href="cadastro_paciente.php"><strong>Cadastrar paciente</strong></a></li>
                <li class="nav-item"><a class="nav-link" href="agendamento.php"><strong>Agendamento de cirurgia</strong></a></li>
            </ul>
    
            <div class="nav-ham">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
</header>

<main>

</main>

<script>
    const ham = document.querySelector(".nav-ham");
    const navMenu= document.querySelector(".nav-menu");

    ham.addEventListener("click", ()=> {
        ham.classList.toggle('active');
        navMenu.classList.toggle('active');
    })
</script>
</body>
</html>

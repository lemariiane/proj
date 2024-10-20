<?php require_once "ClassCadastro_paciente.php"; ?>
<?php require_once "ClassCadastro_pacienteDAO.php"; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pacientes</title>
    <style>

    *{
        margin: 0;
        padding:0;
        box-sizing:border-box;
    }

    body {
        background-image: url('img/hosp1.jpg');
        background-color: #000000;
    }

    header{
        top: 0; 
        left: 0;
        box-shadow: 5px 5px 10px #001a247c;
        background-color: #798f99; 
        position: fixed;
        width: 100%;
        height: 16vh;
        padding: 1%;
        z-index: 1000;
}

        li{
        list-style:none;
    }

    li:hover{
        padding: 0.2%;
    }

    a{
        text-decoration: none;
    }

    a:hover{
        color: rgb(65, 65, 65);
    }


    .container {
        margin-top: 400px;
        max-width: 1200px;
        margin: auto;
        background: #436c7c5d;
        padding: 0px;
        border-radius: 10px;
    }
    h2 {
        padding-top: 20px;
        margin-top: 180px;
        text-align: center;
    }
    table {
        margin-top: 50px;
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 40px;
    }
    table, th, td {
        border: 1px solid #dddddda4;
    }
    th {
        padding: 10px;
        text-align: left;
    }
    td{
        padding: 5px;
    }
    th {
        background-color: #012e4096;
        color: white;
    }
    tr:nth-child(even) {
        background-color: #798f99;
    }
    tr:hover {
        background-color: #798f99;
    }
    .form-button {
        background: transparent;
        border: none;
        margin-left: 2px;
        cursor: pointer;
    }

    .navbar{
        min-height: 70px;
        display:flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 34px;
        overflow: hidden;
    }

    .logo{
        font-family: Brush Script MT;
        color: #012e40d5;
        font-size:3rem;
        font-weight: bold;
    }
    .nav-menu{
        display: flex;
        align-items: center;
        gap:60px;
    }
    .nav-link{
        transition: 0.5s ease;
        color: rgb(173, 173, 173);
    }
    .nav-ham{
        display:none;
        cursor:pointer;
    }
    .bar{
        display: block;
        width: 28px;
        height: 3px;
        border-radius: 2px;
        margin: 5px auto;
        background-color: #012e40d5;
        transition: all 0.3s ease-in-out;
    }

    @media  {
        .nav-ham{
            display: block; 
        }
        .nav-ham.active .bar:nth-child(2){
            opacity: 0;
        }
        .nav-ham.active .bar:nth-child(1){
            transform: translateY(8px) rotate(45deg);
        }
        .nav-ham.active .bar:nth-child(3){
            transform: translateY(-8px) rotate(-45deg);
        }
        .nav-menu{
            position:fixed;
            left: -100%;
            top: 16vh;
            gap: 0;
            border-radius: 0 0 20px 20px;
            background-color:#7d919bfb; 
            text-align:center;
            flex-direction: column;
            width:100%;
            transition:0.3s;
        }
        .nav-item{
            margin:16px;
        }
        .nav-menu.active{
            left:0;
            color:#afaeaea2;
        }
    }
</style>
</head>
<body>

<div class="container">
    <?php
    $ClassCadastro_pacienteDAO = new ClassCadastro_pacienteDAO();
    $array = $ClassCadastro_pacienteDAO->listarCadastro_paciente();

    echo "<h2>Lista de pacientes</h2>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>CPF</th>";
    echo "<th>Data de Nascimento</th>";
    echo "<th>Telefone</th>";
    echo "<th>Telefone Secundário</th>";
    echo "<th>CEP</th>";
    echo "<th>Estado</th>";
    echo "<th>Cidade</th>";
    echo "<th>Bairro</th>";
    echo "<th>Rua</th>";
    echo "<th>Número</th>";
    echo "<th>Pagamento</th>";
    echo "<th>Ficha</th>";
    echo "<th>Alterar</th>";
    echo "</tr>";

    foreach ($array as $item) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($item['nomepac']) . "</td>";
        echo "<td>" . htmlspecialchars($item['cpfpac']) . "</td>";
        echo "<td>" . htmlspecialchars($item['datanasc']) . "</td>";
        echo "<td>" . htmlspecialchars($item['telefonepac']) . "</td>";
        echo "<td>" . htmlspecialchars($item['telefonepac2']) . "</td>";
        echo "<td>" . htmlspecialchars($item['cep']) . "</td>";
        echo "<td>" . htmlspecialchars($item['estadopac']) . "</td>";
        echo "<td>" . htmlspecialchars($item['cidadepac']) . "</td>";
        echo "<td>" . htmlspecialchars($item['bairropac']) . "</td>";
        echo "<td>" . htmlspecialchars($item['ruapac']) . "</td>";
        echo "<td>" . htmlspecialchars($item['numeropac']) . "</td>";
        echo "<td>" . htmlspecialchars($item['pagamento']) . "</td>";
        echo "<td>" . htmlspecialchars($item['ficha']) . "</td>";
        echo "<td>";
        ?> 
        <form action="alterarCadastro_paciente.php" method="GET">
            <input type="hidden" name="nomepac" value="<?php echo htmlspecialchars($item['nomepac']); ?>">
            <input type="hidden" name="cpfpac" value="<?php echo htmlspecialchars($item['cpfpac']); ?>">
            <input type="hidden" name="datanasc" value="<?php echo htmlspecialchars($item['datanasc']); ?>">
            <input type="hidden" name="telefonepac" value="<?php echo htmlspecialchars($item['telefonepac']); ?>">
            <input type="hidden" name="telefonepac2" value="<?php echo htmlspecialchars($item['telefonepac2']); ?>">
            <input type="hidden" name="cep" value="<?php echo htmlspecialchars($item['cep']); ?>">
            <input type="hidden" name="estadopac" value="<?php echo htmlspecialchars($item['estadopac']); ?>">
            <input type="hidden" name="cidadepac" value="<?php echo htmlspecialchars($item['cidadepac']); ?>">
            <input type="hidden" name="bairropac" value="<?php echo htmlspecialchars($item['bairropac']); ?>">
            <input type="hidden" name="ruapac" value="<?php echo htmlspecialchars($item['ruapac']); ?>">
            <input type="hidden" name="numeropac" value="<?php echo htmlspecialchars($item['numeropac']); ?>">
            <input type="hidden" name="pagamento" value="<?php echo htmlspecialchars($item['pagamento']); ?>">
            <input type="hidden" name="ficha" value="<?php echo htmlspecialchars($item['ficha']); ?>">
            <button class="form-button">
                <img src="img/alterar.png" alt="alterar" width="20" height="20">
            </button>
        </form>
        <?php 
        echo "</td>";
        echo "</tr>";
    }  
    echo "</table>";
    ?>
</div>

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

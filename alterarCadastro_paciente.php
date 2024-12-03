<?php 
require_once "ClassCadastro_paciente.php";  
require_once 'conecta.php'; 
require_once "ClassCadastro_pacienteDAO.php";  

// Substitua a recuperação dos dados via GET por POST
$nomepac = isset($_POST['nomepac']) ? htmlspecialchars($_POST['nomepac'], ENT_QUOTES, 'UTF-8') : '';
$cpfpac = isset($_POST['cpfpac']) ? htmlspecialchars($_POST['cpfpac'], ENT_QUOTES, 'UTF-8') : '';
$datanasc = isset($_POST['datanasc']) ? htmlspecialchars($_POST['datanasc'], ENT_QUOTES, 'UTF-8') : '';
$telefonepac = isset($_POST['telefonepac']) ? htmlspecialchars($_POST['telefonepac'], ENT_QUOTES, 'UTF-8') : '';
$telefonepac2 = isset($_POST['telefonepac2']) ? htmlspecialchars($_POST['telefonepac2'], ENT_QUOTES, 'UTF-8') : '';
$cep = isset($_POST['cep']) ? htmlspecialchars($_POST['cep'], ENT_QUOTES, 'UTF-8') : '';
$estadopac = isset($_POST['estadopac']) ? htmlspecialchars($_POST['estadopac'], ENT_QUOTES, 'UTF-8') : '';
$cidadepac = isset($_POST['cidadepac']) ? htmlspecialchars($_POST['cidadepac'], ENT_QUOTES, 'UTF-8') : '';
$bairropac = isset($_POST['bairropac']) ? htmlspecialchars($_POST['bairropac'], ENT_QUOTES, 'UTF-8') : '';
$ruapac = isset($_POST['ruapac']) ? htmlspecialchars($_POST['ruapac'], ENT_QUOTES, 'UTF-8') : '';
$numeropac = isset($_POST['numeropac']) ? htmlspecialchars($_POST['numeropac'], ENT_QUOTES, 'UTF-8') : '';
$pagamento = isset($_POST['pagamento']) ? htmlspecialchars($_POST['pagamento'], ENT_QUOTES, 'UTF-8') : '';
$ficha = isset($_POST['ficha']) ? htmlspecialchars($_POST['ficha'], ENT_QUOTES, 'UTF-8') : '';


// Instanciando as classes
$ClassCadastro_pacienteDAO = new ClassCadastro_pacienteDAO();
$novoCadastro_paciente = new ClassCadastro_paciente();

// Atribuindo os valores ao objeto
$novoCadastro_paciente->setNomepac($nomepac);
$novoCadastro_paciente->setCpfpac($cpfpac);
$novoCadastro_paciente->setDatanasc($datanasc);
$novoCadastro_paciente->setTelefonepac($telefonepac);
$novoCadastro_paciente->setTelefonepac2($telefonepac2);
$novoCadastro_paciente->setCep($cep);
$novoCadastro_paciente->setEstadopac($estadopac);
$novoCadastro_paciente->setCidadepac($cidadepac);
$novoCadastro_paciente->setBairropac($bairropac);
$novoCadastro_paciente->setRuapac($ruapac);
$novoCadastro_paciente->setNumeropac($numeropac);
$novoCadastro_paciente->setPagamento($pagamento);
$novoCadastro_paciente->setFicha($ficha);
?>

<body>
    <center>
        <form action="alterarProcessaCadastro_paciente.php" method="POST">
            <h1>ALTERAR DADOS</h1>

            Nome paciente <br> 
            <input type="text" name="nomepac" value="<?php echo $novoCadastro_paciente->getNomepac(); ?>" required> <br>

            Cpf<br> 
            <input type="text" name="cpfpac" value="<?php echo $novoCadastro_paciente->getCpfpac(); ?>" required> <br>

            Data <br> 
            <input type="date" name="datanasc" value="<?php echo $novoCadastro_paciente->getDatanasc(); ?>" required> <br>

            Telefone <br> 
            <input type="text" name="telefonepac" value="<?php echo $novoCadastro_paciente->getTelefonepac(); ?>" required> <br>

            Telefone 2 <br> 
            <input type="text" name="telefonepac2" value="<?php echo $novoCadastro_paciente->getTelefonepac2(); ?>" required> <br>

            Cep <br> 
            <input type="text" name="cep" value="<?php echo $novoCadastro_paciente->getCep(); ?>" required> <br>

            Estado <br> 
            <input type="text" name="estadopac" value="<?php echo $novoCadastro_paciente->getEstadopac(); ?>" required> <br>

            Cidade <br> 
            <input type="text" name="cidadepac" value="<?php echo $novoCadastro_paciente->getCidadepac(); ?>" required> <br>

            Bairro <br> 
            <input type="text" name="bairropac" value="<?php echo $novoCadastro_paciente->getBairropac(); ?>" required> <br>

            Rua <br> 
            <input type="text" name="ruapac" value="<?php echo $novoCadastro_paciente->getRuapac(); ?>" required> <br>

            Número <br> 
            <input type="text" name="numeropac" value="<?php echo $novoCadastro_paciente->getNumeropac(); ?>" required> <br>

            Pagamento <br> 
            <input type="text" name="pagamento" value="<?php echo $novoCadastro_paciente->getPagamento(); ?>" required> <br>

            Ficha<br> 
            <input type="text" name="ficha" value="<?php echo $novoCadastro_paciente->getFicha(); ?>" readonly> <br>

            <br><br>
            <button type="submit">ALTERAR</button>
        </form>
    </center>
</body>

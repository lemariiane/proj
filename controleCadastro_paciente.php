<?php require_once "ClassCadastro_paciente.php";  ?>
<?php require_once "ClassCadastro_pacienteDAO.php";  ?>
<?php
    $nomepac = $_POST['nomepac'];  
    $cpfpac = $_POST['cpfpac'];
    $datanasc = $_POST['datanasc'];
    $telefonepac = $_POST['telefonepac'];
    $telefonepac2 = $_POST['telefonepac2'];
    $cep = $_POST['cep'];
    $estadopac = $_POST['estadopac'];
    $cidadepac = $_POST['cidadepac'];
    $bairropac = $_POST['bairropac'];
    $ruapac = $_POST['ruapac'];
    $numeropac = $_POST['numeropac'];
    $pagamento = $_POST['pagamento'];
    $ficha = $_POST['ficha'];


    $novoCadastro_paciente = new ClassCadastro_paciente();
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
    
    $ClassCadastro_pacienteDAO = new ClassCadastro_pacienteDAO();
    $ClassCadastro_pacienteDAO->cadastrarCadastro_paciente($novoCadastro_paciente);

?>
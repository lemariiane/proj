<?php require_once "ClassCadastro_paciente.php";  ?>
<?php require_once "ClassCadastro_pacienteDAO.php";  ?>
<?php

    $nomepac = $_GET['nomepac'];  
    $cpfpac = $_GET['cpfpac'];
    $datanasc = $_GET['datanasc'];
    $telefonepac = $_GET['telefonepac'];
    $telefonepac2 = $_GET['telefonepac2'];
    $cep = $_GET['cep'];
    $estadopac = $_GET['estadopac'];
    $cidadepac = $_GET['cidadepac'];
    $bairropac = $_GET['bairropac'];
    $ruapac = $_GET['ruapac'];
    $numeropac = $_GET['numeropac'];
    $pagamento = $_GET['pagamento'];
    $ficha = $_GET['ficha'];

        
    $ClassCadastro_pacienteDAO = new ClassCadastro_pacienteDAO();

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

    $array=$ClassCadastro_pacienteDAO->alteraCadastro_paciente($novoCadastro_paciente);

    if($array==true) {
        header('Location:listarCadastro_paciente.php');    
         } else {
        echo "Erro";
    }
    
?>                 
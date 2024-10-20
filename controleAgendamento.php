<?php require_once "ClassAgendamento.php";  ?>
<?php require_once "ClassAgendamentoDAO.php";  ?>
<?php
    $ficha = $_POST['ficha'];
    $nomepac = $_POST['nomepac'];  
    $telefonepac = $_POST['telefonepac'];
    $datar = $_POST['datar'];
    $horario = $_POST['horario'];
    $departamento = $_POST['departamento'];


    $novoAgendamento = new ClassAgendamento();
    $novoAgendamento->setFicha($ficha);
    $novoAgendamento->setNomepac($nomepac);
    $novoAgendamento->setTelefonepac($telefonepac);
    $novoAgendamento->setDatar($datar);
    $novoAgendamento->setHorario($horario);
    $novoAgendamento->setDepartamento($departamento);
    
    $ClassAgendamentoDAO = new ClassAgendamentoDAO();
    $ClassAgendamentoDAO->cadastrarAgendamento($novoAgendamento);

?>
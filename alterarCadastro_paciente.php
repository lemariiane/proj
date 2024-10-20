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
?>                 

    <body>
        <center>
            <form action="alterarProcessaCadastro_paciente.php" method="GET">
                <h1>ALTERAR DADOS</h1>
                    Nome paciente <br> <input type="text" name="nomepac"
                    value=<?php echo $novoCadastro_paciente->getNomepac($nomepac); ?> > <br>

                    Cpf <br> <input type="text" name="cpfpac"
                    value=<?php echo $novoCadastro_paciente->getCpfpac($cpfpac); ?> > <br>

                    Data <br> <input type="date" name="datanasc"
                    value=<?php echo $novoCadastro_paciente->getDatanasc($datanasc); ?> > <br>
                    
                    Telefone <br> <input type="text" name="telefonepac"
                    value=<?php echo $novoCadastro_paciente->getTelefonepac($telefonepac); ?>> <br>
                    
                    Telefone 2 <br> <input type="text" name="telefonepac2"
                    value=<?php echo $novoCadastro_paciente->getTelefonepac2($telefonepac2); ?> > <br>

                    Cep <br> <input type="text" name="cep"
                    value=<?php echo $novoCadastro_paciente->getCep($cep); ?> > <br>

                    Estado <br> <input type="text" name="estadopac"
                    value=<?php echo $novoCadastro_paciente->getEstadopac($estadopac); ?> > <br>

                    Cidade <br> <input type="text" name="cidadepac"
                    value=<?php echo $novoCadastro_paciente->getCidadepac($cidadepac); ?> > <br>

                    Bairro <br> <input type="text" name="bairropac"
                    value=<?php echo $novoCadastro_paciente->getBairropac($bairropac); ?> > <br>

                    Rua <br> <input type="text" name="ruapac"
                    value=<?php echo $novoCadastro_paciente->getRuapac($ruapac); ?> > <br>

                    Número <br> <input type="text" name="numeropac"
                    value=<?php echo $novoCadastro_paciente->getNumeropac($numeropac); ?> > <br>

                    Pagamento <br> <input type="text" name="pagamento"
                    value=<?php echo $novoCadastro_paciente->getPagamento($pagamento); ?> > <br>
                    
                    Ficha<br> <input type="text" name="ficha" readonly="true"
                    value=<?php echo $novoCadastro_paciente->getFicha($ficha); ?> > <br>


                    <br><br>

                    <button type="submit">ALTERAR</button>
            </form>
        </center>
    </body>
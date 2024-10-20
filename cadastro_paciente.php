<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro paciente</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="nav.css">
    
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

<main class="container">        
        <form method="post" action="controleCadastro_paciente.php">
            <div class="form-group">
                <h1>Cadastro Pacientes</h1>
                <br><br>

                <div class="form-group">
                    <input type="text" id="nomepac" name="nomepac" placeholder=" ">
                    <label for="nomepac">Nome completo</label>
                    <div class="message" id="nome-message">Este campo é obrigatório.</div>
                </div>

                <div class="form-group">
                    <input oninput="mascara(this)" type="text" name="cpfpac" maxlength="11" id="cpfpac" placeholder=" " required>
                    <label for="cpfpac">CPF</label>
                    <div class="message" id="cpfpac-message">Este campo é obrigatório.</div>
                </div>

                <div class="form-group">
                    <label id="date" for="datanasc">Data de nascimento</label>
                    <input type="date" id="datanasc" name="datanasc" placeholder=" " required>
                    <div class="message" id="datanasc-message">Este campo é obrigatório.</div>
                </div>

                <div class="form-group">
                    <input maxlength="11" type="text" name="telefonepac" id="telefonepac" placeholder=" " required>
                    <label for="telefonepac">Telefone 1</label>
                    <div class="message" id="telefonepac-message">Este campo é obrigatório.</div>
                </div>

                <div class="form-group">
                    <input maxlength="11" type="text" name="telefonepac2" id="telefonepac2" placeholder=" " required>
                    <label for="telefonepac2">Telefone 2</label>
                    <div class="message" id="telefonepac-message">Este campo é obrigatório.</div>
                </div>

                <div class="form-group">
                    <input type="text" name="cep" id="cep" placeholder=" " required>
                    <label for="cep">CEP</label>
                    <div class="message" id="telefonepac-message">Este campo é obrigatório.</div>
                </div>

                <div class="form-group">
                    <input type="text" name="estadopac" id="estadopac" placeholder=" " required>
                    <label for="estadopac">Estado</label>
                    <div class="message" id="telefonepac-message">Este campo é obrigatório.</div>
                </div>

                <div class="form-group">
                    <input type="text" name="cidadepac" id="cidadepac" placeholder=" " required>
                    <label for="cidadepac">Cidade</label>
                    <div class="message" id="telefonepac-message">Este campo é obrigatório.</div>
                </div>

                <div class="form-group">
                    <input type="text" name="bairropac" id="bairropac" placeholder=" " required>
                    <label for="bairropac">Bairro</label>
                    <div class="message" id="telefonepac-message">Este campo é obrigatório.</div>
                </div>

                <div class="form-group">
                    <input type="text" name="ruapac" id="ruapac" placeholder=" " required>
                    <label for="ruapac">Rua</label>
                    <div class="message" id="telefonepac-message">Este campo é obrigatório.</div>
                </div>
                
                <div class="form-group">
                    <input type="text" name="numeropac" id="numeropac" placeholder=" ">
                    <label for="numeropac">Número</label>
                    <div class="message" id="numeropac-message">Este campo é obrigatório.</div>
                </div>

                <div class="form-group">
                    <select id="pagamento" name="pagamento" placeholder=" " required>
                        <option value="">Selecione a forma de pagamento</option>
                        <option value="convenio">Convênio</option>
                        <option value="particular">Particular</option>
                    </select>
                    <div class="message" id="pagamento-message">Este campo é obrigatório.</div>
                </div>

                <div class="form-group">
                    <label for="ficha" id="ficha" name="ficha"></label>
                </div>

                <br><br><br>

                <div class="form-group">
                    <input type="submit" value="Cadastrar Paciente e gerar ficha">
                </div>            
    </form>
</main>

<script>
    function mascara(i){
        var v = i.value;
        
        if(isNaN(v[v.length-1])){ 
           i.value = v.substring(0, v.length-1);
           return;
        }
        
        i.setAttribute("maxlength", "14");
        if (v.length == 3 || v.length == 7) i.value += ".";
        if (v.length == 11) i.value += "-";
    }

    const ham = document.querySelector(".nav-ham");
    const navMenu= document.querySelector(".nav-menu");

    ham.addEventListener("click", ()=> {
        ham.classList.toggle('active');
        navMenu.classList.toggle('active');
    });

    function buscaCep(){
    let cep= document.getElementById('cep').value;
    if(cep!==""){
        let url="https://brasilapi.com.br/api/cep/v1/" + cep;
        let req = new XMLHttpRequest();
        req.open("GET", url);
        req.send();

        req.onload = function(){
            if(req.status === 200){
                let endereco = JSON.parse(req.response);
            document.getElementById("estadopac").value = endereco.state;
            document.getElementById("cidadepac").value = endereco.city;
            document.getElementById("bairropac").value = endereco.neighborhood;
            document.getElementById("ruapac").value = endereco.street;

            document.getElementById("estadopac").classList.add('filled');
            document.getElementById("cidadepac").classList.add('filled');
            document.getElementById("bairropac").classList.add('filled');
            document.getElementById("ruapac").classList.add('filled');

            document.getElementById("error-message").style.display = 'none';
            }else if(req.status === 404){
                document.getElementById("error-message").style.display = 'block';
            }else{
                alert("Erro ao fazer a requisição");
 ;           }
        }
    }
}

window.onload = function(){
    let cep = document.getElementById("cep");
    cep.addEventListener("blur", buscaCep);
}


</script>

</body>
</html>

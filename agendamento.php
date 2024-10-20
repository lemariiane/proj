<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav.css">
    <title>Agendamento</title>
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
   <form action="controleAgendamento.php" method="post">
            
        <h1>Agendamento</h1><br><br>

        <div class="form-group">
            <input type="text" id="ficha" name="ficha" placeholder=" " required>
            <label for="ficha">Número da ficha</label>
            <div class="message"></div>
        </div>

        <div class="form-group">
        <input type="text" id="nomepac" name="nomepac" placeholder=" " required>
        <label for="nome">Nome completo</label>
        <div class="message"></div>
    </div>
    
    <div class="form-group">
        <input maxlength="11" type="text" id="telefonepac" name="telefonepac" placeholder=" " required>
        <label for="telefonepac">Telefone</label>
        <div class="message"></div>
    </div>
    <div class="form-group">
        <label id="date" for="data">Data de Agendamento</label>
        <input type="date" id="data" name="datar" required>
        <div class="message"></div>
    </div>
    <div class="form-group">
        <label id="date" for="horario">Horário de Agendamento</label>
        <select id="horario" name="horario" required>
            <option value="">Selecione o Horário</option>
        </select>
        <div class="message"></div>
    </div>

    <div class="form-group">
            <select id="departamento" name="departamento" required>
                <option value="">Selecione o Departamento</option>
                <option value="cirurgia_geral" >Cirurgia Geral - Dra. Cintia</option>
                <option value="ortopedia" >Ortopedia - Dr. Leandro</option>
                <option value="neurologia" >Neurologia - Dr.Flavio</option>
                <option value="pediatria" >Pediatria - Dra. Isabela</option>
            </select>
            <div class="message"></div>
            <br><br>
        </div>

    <div class="form-group">
        <input type="submit" value="Agendar">
    </div>

   </form>
 </main>

<script>
     function configurarCalendario() {
        var dataInput = document.getElementById("data");
        var hoje = new Date().toISOString().split("T")[0]; 
        dataInput.setAttribute("min", hoje); 

        dataInput.addEventListener("input", function() {
            var dataSelecionada = new Date(dataInput.value);
            var diaSemana = dataSelecionada.getDay(); // 0= segunda 1= terça ...
            if (diaSemana === 5 || diaSemana === 6) {
                alert("Sábados e domingos não estão disponíveis para agendamento.");
                dataInput.value = '';
            }
        });
    }

    function adicionarHorarios() {
        var select = document.getElementById("horario");
        select.innerHTML = ""; 
        
        var inicio = 7; 
        var fim = 19; 
        
        for (var i = inicio; i <= fim; i += 3) { 
            var hora = (i < 10) ? "0" + i : i; 
            var option = document.createElement("option");
            option.text = hora + ":00"; 
            option.value = hora + ":00";
            select.add(option);
        }
    }
        window.onload = adicionarHorarios;
    
    
    window.onload = function() {
        configurarCalendario();
        adicionarHorarios();
    };

    const ham = document.querySelector(".nav-ham");
    const navMenu= document.querySelector(".nav-menu");

    ham.addEventListener("click", ()=> {
        ham.classList.toggle('active');
        navMenu.classList.toggle('active');
    })
</script>

</body>
</html>
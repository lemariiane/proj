<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav.css">
    <title>Seleção de Médico</title>
    <style>
        body{
            background-size: cover;
            height: 100vh;
        }
        .form-group{
            margin-top: 10%;
            padding:0px;
        }
    </style>
</head>
<body>

    <header>
        <nav class="navbar">
            <strong><p class="logo">Grupo União</p></strong>
        
            <ul class="nav-menu">
                <li class="nav-item"><a class="nav-link" href="index.php"><strong>Menu</strong></a></li>
                <li class="nav-item"><a class="nav-link" href="cadastro_paciente.php"><strong>Cadastrar paciente</strong></a></li>
                <li class="nav-item"><a class="nav-link" href="selecionarMedico.php"><strong>Agendamento de cirurgia</strong></a></li>
            </ul>
    
            <div class="nav-ham">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

    <main class="container">
        <h1>Selecione o Médico</h1><br><br>

        <form action="agendamento.php" method="GET">
            <div class="form-group">
                <select id="medico" name="medico" required>
                    <option value="">Selecione o Médico</option>
                    <option value="1">Cirurgia Geral - Dra. Cintia</option>
                    <option value="2">Ortopedia - Dr. Leandro</option>
                    <option value="3">Neurologia - Dr. Flavio</option>
                    <option value="4">Pediatria - Dra. Isabela</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Ir para  agendamento">
            </div>
        </form>
    </main>

<script>
    const ham = document.querySelector(".nav-ham");
    const navMenu = document.querySelector(".nav-menu");

    ham.addEventListener("click", () => {
        ham.classList.toggle('active');
        navMenu.classList.toggle('active');
    });
</script>

</body>
</html>
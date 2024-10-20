<?php require_once 'numcar.php' ?>
<?php 
    if(usuarioEstaLogado()==null) {
        header ("Location:login.php");
    } 
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar_Cirurgia</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    
    <style>
        header{
            box-shadow: 5px 5px 10px #001a247c;
            background-color: #406979be; 
            position: fixed;
            width: 100%;
            height: 16vh;
            padding: 1%;
            top: 0; 
        }
        body{
            align-items: center;
            background: url('img/hosp2.jpg') no-repeat;
            background-size:100%;
        }
        .conteudo{
            margin-top:100px;
        }
        *{
            margin: 0;
            padding:0;
            box-sizing:border-box;
            overflow: hidden;
        }

        .index{
            margin-bottom: 40px;
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
            background-color: #406979be; 
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
    #imagem{
        margin-top:15%;
        margin-left:20%;
        border: 5px solid #406979be; 
    border-radius: 15px; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    transition: transform 0.1s; 
    }
    #imagem:hover {
    transform: scale(1.05); /* Aumenta ligeiramente o tamanho da imagem ao passar o mouse */
}
    footer{
    color: white;
    text-align: center;
    padding: 1rem;
    position: relative;
    bottom: 0;
    width: 100%;
    background-color: #012e40d5;
    margin-top: 11%;
    }
        
    </style>
</head>
<body>

<div class="index">
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
</div>
   
<main>

<a href="listarCadastro_paciente.php">
<img id="imagem" alt="" src="img/ah.jpg"></a>

<a href="desloga.php">
<img id="imagem" alt="" src="img/sair.jpg"></a>

</main>


<footer>
<?php echo 'Usuário - ' . usuariologado();?>
</footer>

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
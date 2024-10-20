<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relembrar Senha</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <style>
body{
     display: flex;
     align-items: center;
     justify-content: center;
     min-height: 100vh;
     background: url('img/backambulancia.jpg') no-repeat;
     background-size: cover;
}

.form{
    background-color: rgba(255, 255, 255, 0.356);
    justify-content: center;
    padding: 25px;
    border-radius: 10px;
    width: 500px;
    height: 300px;
    margin:auto;
    box-shadow: 5px 5px 10px rgba(0, 24, 26, 0.295);
}

.box input{
    text-align: center;
    width: 100%; 
    height: 45%; 
    background: transparent; 
    border: #fff; 
    outline: invert; 
    border: 3px solid rgba(255, 255, 255, 0.877); 
    border-radius: 60px;
}


h1,h4{
    text-align: center;
    color: #978f56;
}

.btn-dark {
    width: 100%;
    height: 45px;
    border: none;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    color: #494848cc;
    background-color: #fcfcfcee;
    border-color: #fafafa;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.205);
    text-align: center;
    font-size: 14px;
  }
.btn{        
    text-decoration: none;
  }
    </style>
</head>
<body>

    <div class="form">
        <form method="post" action="">
            <div class="box">
                <h4>Preencha os dados abaixo</h4>
                <input type="text" name="numcar" placeholder="Número da carteira" required><br><br>
            </div>

            <div class="box">
                    <input type="password" name="new_password" placeholder="Nova senha" required><br><br><br>
            </div>
            
            <button type="submit" class="btn btn-dark"><a class="btn" href="#"><strong>Redefinir senha</strong></a></button>
        </form>
</body>
</html>
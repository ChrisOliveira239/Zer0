<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{
            font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; 
        }
        .login{
            display : block;
            
        }
        .login #container {
            background-color : black;
            display : block;
            color: white;
            padding : 50px 60px;
        }
    </style>
    <title>Crud</title>
</head>
<body>
    <div class="login">
            <div id="container">
                <form action="receber_dados.php" method="post">
                    <input type ="text" name="nome" placeholder="Digite seu nome">
                    <input type ="text" name="login" placeholder="Digite seu login">
                    <input type ="password" name="senha" placeholder="Digite sua senha">
                    <input type='submit' name="ENVIAR">
                </form>
                <a href="NEXUS.html"><input type="button" value="VOLTAR"></a>
            </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include '..\validate.php';
    ?>
    <title>Document</title>
</head>
<body>
    <div class="login">
        <div id="container">
           
            <form action="dados_update.php" method="post">
                <select name="id" id="id">
                    <?php
                    $comando = mysqli_query($link, "select * from cadastro");
                    while ($vetor = mysqli_fetch_array($comando)){ //FETCH ARRAY lê todos os dados da coluna e da linha
                        $id = $vetor['id'];                        //nomes relativos as colunas
                        $nome = $vetor['nome'];
                        echo "<option value=$id> $id-$nome </option>";
                    }
                    ?>
                </select>
                <input type ="text" name="nome" placeholder="Novo nome...">
                <input type ="text" name="login" placeholder="Novo login...">
                <input type ="password" name="senha" placeholder="Nova senha...">
                <input type='submit' name="ENVIAR">
            </form>
            <a href="NEXUS.html"><input type="button" value="VOLTAR"></a>
        </div>
</div>
</body>
</html>
<?php
include '..\validate.php';

$pesquisa = isset($_GET['pesquisa'])?$_GET['pesquisa']:'';

$comando = mysqli_query($link, "select * from cadastro WHERE nome LIKE '%$pesquisa%'");

while ($vetor = mysqli_fetch_array($comando)){ //FETCH ARRAY lê todos os dados da coluna e da linha
    $id = $vetor['id'];                        //nomes relativos as colunas
    $nome = $vetor['nome'];
    $login = $vetor['login'];
    $senha = $vetor['senha'];
    
    echo "ID = $id<br/>";
    echo "NOME = $nome<br/>";
    echo "LOGIN = $login<br/>";
    echo "SENHA = $senha<hr/>";
    
    
    
}
echo '<a href="..\NEXUS.html"><input type="button" value="VOLTAR"></a>';


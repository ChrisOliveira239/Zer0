<?php
include '..\validate.php';

$pesquisa = isset($_GET['pesquisa'])?$_GET['pesquisa']:'';

$comando = mysqli_query($link, "select * from cadastro");

while ($vetor = mysqli_fetch_array($comando)){ //FETCH ARRAY lê todos os dados da coluna e da linha
    $id = $vetor['id'];                        //nomes relativos as colunas
    $nome = $vetor['nome'];
    
    echo"<table>
            <form action='delete.php' method='post'>
                ID = $id NOME = $nome 
                <button type='submit' value = $id name='id'>Deletar</button><br><br>
            </form>
        </table>";
    
    
}
echo '<a href="NEXUS.html"><input type="button" value="VOLTAR"></a>';
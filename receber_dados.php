<?php 
    include '..\validate.php';
    
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $login = $_POST['login'];
    
    $query = "insert into cadastro values('','$nome','$login','$senha');";
    mysqli_query($link, $query);
    
    $location = '..\NEXUS.html';
    header("location:$location");
?> 




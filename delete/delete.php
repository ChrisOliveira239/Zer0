<?php
    include '..\validate.php';

    $selecionado = $_POST['id'];
    $dado ="delete from cadastro WHERE id = '$selecionado'";

    mysqli_query($link, $dado);
    header('location:..\NEXUS.html')
    
?>
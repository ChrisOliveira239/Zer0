<?php
include '..\validate.php';

$id = $_POST['id'];
$nome = isset($_POST['nome'])?$_POST['nome']:'';
$login = isset($_POST['login'])?$_POST['login']:'';
$pass = isset($_POST['senha'])?$_POST['senha']:'';


$query = "UPDATE cadastro SET nome = '$nome', login = '$login', senha = '$pass' WHERE id = $id";
echo $query;
mysqli_query($link, $query);

$location = '..\NEXUS.html';
header("location:$location");

?>
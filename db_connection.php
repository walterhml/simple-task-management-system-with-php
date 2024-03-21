<?php
$servername = "127.0.0.1";
$username = "root"; 
$password = "nova_senha";
$dbname = "gerenciaTarefas"; 


$conn = new mysqli($servername, $username, $password, $dbname, 3306);


if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
?>

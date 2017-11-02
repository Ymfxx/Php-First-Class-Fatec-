<?php
//recupera os conteudos dos campos de formulario
$titulo = $_POST {"titulo"};
$genero = $_POST{"genero"};
$duraçao = $_POST{"duraçao"};

echo"<h2> Titulo:$titulo </h2>";
echo"<h2> genero:$genero </h2>";
echo"<h2> duraçao:$duraçao </h2>";
//Grava no banco de dados

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "locadora";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO filmes (titulo, genero, duracao)
VALUES ('$titulo', '$genero', '$duraçao')";

if ($conn->query($sql) === TRUE) {
    echo "ok! Filme cadastrado corretamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
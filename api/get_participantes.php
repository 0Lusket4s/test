<?php
// Configuração do banco de dados
$host = 'localhost';  // Endereço do servidor do banco de dados
$user = 'root';       // Usuário do banco de dados
$pass = '';           // Senha do banco de dados
$dbname = 'evento';   // Nome do banco de dados

// Conectando ao banco de dados
$conn = new mysqli($host, $user, $pass, $dbname);

// Verificando se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Consultando o número de participantes
$sql = "SELECT COUNT(*) AS total_participantes FROM participantes";
$result = $conn->query($sql);

// Recuperando o número de participantes
$total_participantes = 0;
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_participantes = $row['total_participantes'];
}

// Fechando a conexão
$conn->close();

// Retornando a quantidade como JSON
echo json_encode(['total_participantes' => $total_participantes]);
?>

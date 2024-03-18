<?php
require_once '../init.php';
// pega os dados do formulário
$artista_nome = isset($_POST['nome']) ? $_POST['nome'] : null;

// validação (bem simples, só pra evitar dados vazios)
if (empty($artista_nome)) {
    echo "Volte e preencha todos os campos";
    exit;
}

// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO artista(nome) VALUES(:artista_nome)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':artista_nome', $artista_nome);

if ($stmt->execute()) {
    header('Location: ../mensagem.html');
} else{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}
?>
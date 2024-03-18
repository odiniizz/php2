<?php
require_once '../init.php';
$PDO = db_connect();
$sql = "SELECT id, nome FROM musica";
$stmt = $PDO->prepare($sql);
$stmt->execute();
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Artista</title>
    <link rel="stylesheet" href="../style/globalStyles.css">
</head>

<body>
    <div>
        <a class="inicio" href="../../index.html">Inicio</a>
    </div>

    <div class="main">
        <form action="adicionarArtista.php" method="post">

            <label for="nome">Nome do Artista</label>
            <input type="text" name="nome">
            <button class="enviar" type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>
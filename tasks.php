<?php
$nome = $_POST["nome"] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
</head>
<body>
    <form action="" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
        <button type="submit">Enviar</button>
    </form>

    <?php
    if (!empty($nome)) {
        echo "Seu nome é " . htmlspecialchars($nome);
    }
    ?>
</body>
</html>

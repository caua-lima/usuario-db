<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="container">
    <h1>Cadastro de Usuário</h1>
    <form action="salvar.php" method="POST">

        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="email">E-mail: </label>
        <input type="email" name="email" id="email" required>

        <button type="submit">Fazer Cadastro</button>
        
        </form>
    </div>

    <hr>
    <h2>Usuários Cadastrados</h2>
    <ul>
        <?php
        include 'conexao.php';
        $sql = "SELECT * FROM usuarios";
        $stmt = $conn->query($sql);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "<li>" . $row['nome'] . " - " . $row['email'] . "</li>";
        }
        ?>
    </ul>
    
</body>
</html>
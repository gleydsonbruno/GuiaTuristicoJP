<?php
include("conexao.php");

if(isset($_POST["email"]) && isset($_POST["senha"]) && isset($_POST["nome"])) {

    if(strlen($_POST["email"]) == 0) {
        echo "Campo de email obrigatório";
    } else if(strlen($_POST["senha"]) == 0) {
        echo "Campo de senha obrigatório";
    } else if(strlen($_POST["nome"]) == 0)   {
        echo "Campo de nome obrigatório";
    } else {
        $email = $mysqli->real_escape_string($_POST["email"]);
        $senha = $mysqli->real_escape_string($_POST["senha"]);
        $nome = $mysqli->real_escape_string($_POST["nome"]);

        $sql_code = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome','$email', '$senha')";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        header("Location: index.php");

    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <div class="auth-container">
        <h1>Faça o cadastro</h1>
        <form action="" method="POST">
            <p>
                <label>Nome de usuário</label>
                <input type="text" name="nome">
            </p>
            <p>
                <label>E-mail</label>
                <input type="text" name="email">
            </p>
            <p>
                <label>Senha</label>
                <input type="password" name="senha">
            </p>
            <p>
                <button type="submit">Me cadastrar</button>
            </p>
        </form>
        <button><a href="logout.php">Voltar</a></button>
        
    </div>
    
</body>
</html>
<?php
include("conexao.php");

if(isset($_POST["email"]) || isset($_POST["senha"])) {

    if(strlen($_POST["email"]) == 0) {
        echo "Preencha seu email";
    } else if(strlen($_POST["senha"]) == 0) {
        echo "Preencha sua senha";
    } else {
        $email = $mysqli->real_escape_string($_POST["email"]);
        $senha = $mysqli->real_escape_string($_POST["senha"]);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade_registros = $sql_query->num_rows;

        if($quantidade_registros == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION["id"] = $usuario["id"];
            $_SESSION["nome"] = $usuario["nome"];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! Email ou senha incorreto";
        }
    }
}

if(isset($_POST["register"])) {
    header("Location: register.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css">
    <title>Login</title>
</head>
<body >
    <div class="auth-container">
        <h1>Faça Login</h1>
        <form action="" method="POST">
            <p>
                <label>E-mail</label>
                <input type="text" name="email">
            </p>
            <p>
                <label>Senha</label>
                <input type="password" name="senha">
            </p>
            <p>
                <button type="submit">Entrar</button>
            </p>
        </form>
        <form action="" method="POST">
            <p>
                <button type="submit" name="register">Não tenho conta</button>
            </p>
        </form>
    </div>
    
    
</body>
</html>
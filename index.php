<?php
include("conexao.php");


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if(isset($_POST["login"])) {
        if(isset($_POST["email"]) && isset($_POST["senha"])) {
            if(empty($_POST["email"]) || empty($_POST["senha"])) {
                echo '<script> alert("Preencha todos os campos!") </script>';
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
                    echo "<script>alert('Email ou senha incorretos!');</script>";
                }
            }
        }
    }
}
if(isset($_POST["register"])) {
    header("Location: register.php");
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - GuiaTuristicoJP</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'jampa-blue': '#1e40af', // Azul do Mar
                        'jampa-green': '#10b981', // Verde da Natureza
                        'jampa-sand': '#f5f5dc', // Cor de Areia
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'], 
                    },
                }
            }
        }
    </script>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        body {
            background: linear-gradient(135deg, #1e40af 0%, #f7f7f7 50%, #10b981 100%);
            background-attachment: fixed;
        }
    </style>
</head>
<body class="font-sans min-h-screen flex items-center justify-center p-4">
    
    <div class="bg-white auth-container w-full max-w-md mx-auto p-8 md:p-10 rounded-xl shadow-2xl border-t-8 border-jampa-blue">
        
        <h1 class="text-4xl font-extrabold text-jampa-blue mb-6 text-center">
            GuiaTuristicoJP
        </h1>
        <h2 class="text-2xl font-semibold text-gray-700 mb-8 text-center">
            Acesso ao Painel
        </h2>
        
        <form action="" method="POST" class="space-y-5">
            
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">E-mail</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-jampa-green focus:border-jampa-green transition duration-200 shadow-sm"
                    placeholder="seu.email@exemplo.com">
            </div>
            
            <div>
                <label for="senha" class="block text-sm font-medium text-gray-700 mb-1">Senha</label>
                <input type="password" id="senha" name="senha" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-jampa-green focus:border-jampa-green transition duration-200 shadow-sm"
                    placeholder="********">
            </div>
            
            <div>
                <button type="submit" name="login"
                    class="w-full bg-jampa-blue text-white font-bold py-3 rounded-lg hover:bg-jampa-green transition duration-300 shadow-lg mt-4">
                    Entrar
                </button>
            </div>
        </form>
        
        <div class="mt-8 text-center">
            <p class="text-sm text-gray-600 mb-3">
                Não possui uma conta?
            </p>
            <form action="" method="POST">
                <button type="submit" name="register"
                    class="w-full bg-jampa-sand text-jampa-blue font-semibold py-2 border border-jampa-blue rounded-lg hover:bg-jampa-blue hover:text-white transition duration-300">
                    Cadastre-se Agora
                </button>
            </form>
        </div>
        
    </div>
    
</body>
</html>
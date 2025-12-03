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
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário - GuaTuristicoJP</title>
    
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
        /* Gradiente de fundo sutil para a página, simulando a transição Mar/Areia */
        body {
            background: linear-gradient(135deg, #1e40af 0%, #f7f7f7 50%, #10b981 100%);
            background-attachment: fixed;
        }
    </style>
</head>
<body class="font-sans min-h-screen flex items-center justify-center p-4">
    
    <div class="bg-white auth-container w-full max-w-md mx-auto p-8 md:p-10 rounded-xl shadow-2xl border-t-8 border-jampa-green">
        
        <h1 class="text-4xl font-extrabold text-jampa-green mb-3 text-center">
            GuiaTuristicoJP
        </h1>
        <h2 class="text-2xl font-semibold text-gray-700 mb-8 text-center">
            Crie sua conta
        </h2>
        
        <form action="" method="POST" class="space-y-5">
            
            <div>
                <label for="nome" class="block text-sm font-medium text-gray-700 mb-1">Nome de Usuário</label>
                <input type="text" id="nome" name="nome" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-jampa-blue focus:border-jampa-blue transition duration-200 shadow-sm"
                    placeholder="Seu nome completo ou apelido">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">E-mail</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-jampa-blue focus:border-jampa-blue transition duration-200 shadow-sm"
                    placeholder="seu.email@exemplo.com">
            </div>
            
            <div>
                <label for="senha" class="block text-sm font-medium text-gray-700 mb-1">Senha</label>
                <input type="password" id="senha" name="senha" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-jampa-blue focus:border-jampa-blue transition duration-200 shadow-sm"
                    placeholder="Crie uma senha forte">
            </div>
            
            <div>
                <button type="submit"
                    class="w-full bg-jampa-green text-white font-bold py-3 rounded-lg hover:bg-jampa-blue transition duration-300 shadow-lg mt-4">
                    Me Cadastrar
                </button>
            </div>
        </form>
        
        <div class="mt-8 text-center">
            <a href="index.php"
                class="inline-block w-full bg-jampa-sand text-jampa-green font-semibold py-2 border border-jampa-green rounded-lg hover:bg-jampa-green hover:text-white transition duration-300">
                &larr; Voltar para o Login
            </a>
        </div>
        
    </div>
    
</body>
</html>
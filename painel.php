<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel - GuiaTuristicoJP</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'jampa-blue': '#1e40af',
                        'jampa-green': '#10b981', 
                        'jampa-sand': '#f5f5dc', 
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'], 
                    },
                }
            }
        }
    </script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        body {            background-color: #f7f7f7; 
        }
    </style>
</head>

<body class="font-sans min-h-screen flex flex-col">

    <header class="bg-white shadow-lg sticky top-0 z-10">
        <div class="container mx-auto px-4 max-w-7xl flex justify-between items-center py-4">
            <a href="painel.php" class="flex items-center space-x-2">
                <img src="images/logotip.png" alt="Logo GuiaTuristicoJP" class="h-10 w-auto"> 
                <span class="text-3xl font-extrabold text-jampa-blue hover:text-jampa-green transition duration-300">
                    GuiaTuristicoJP
                </span>
            </a>
            
            <nav class="hidden md:block">
                <ul class="flex space-x-6 font-semibold">
                    <li><a href="painel.php" class="text-jampa-blue border-b-2 border-jampa-blue pb-1 font-bold transition duration-200">Início</a></li>
                    <li><a href="pontos_turisticos.html" class="text-gray-600 hover:text-jampa-green transition duration-200">Pontos Turísticos</a></li>
                    <li><a href="hospedagem.html" class="text-gray-600 hover:text-jampa-green transition duration-200">Hospedagem</a></li>
                    <li><a href="praias.html" class="text-gray-600 hover:text-jampa-green transition duration-200">Praias</a></li>
                    <li><a href="gastronomia.html" class="text-gray-600 hover:text-jampa-green transition duration-200">Gastronomia</a></li>
                    <li><a href="logout.php" class="bg-jampa-blue text-white px-4 py-2 rounded-full hover:bg-jampa-green transition duration-300">Sair</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main class="flex-grow container mx-auto px-4 max-w-7xl my-10">
        
        <h2 id="phrase" class="text-4xl font-extrabold text-center text-gray-800 mb-6">
            Explore a Paraíba!
        </h2>
        <div class="border-b-4 border-jampa-green w-24 mx-auto mb-10"></div>
        
        <section>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <div class="card bg-white rounded-xl shadow-xl p-6 text-center border-t-4 border-jampa-blue transition duration-300 hover:shadow-2xl hover:scale-[1.03]">
                    <a href="./pontos_turisticos.html" class="block">
                        <img src="images/joao-pessoa.png" alt="Pontos Turísticos" class="w-full h-40 object-contain mx-auto mb-4">
                    </a>
                    <h3 class="text-xl font-bold text-jampa-blue mb-2">
                        Pontos Turísticos
                    </h3>
                    <p class="text-gray-600 text-sm">
                        Descubra os melhores pontos turísticos da região e aproveite ao máximo sua visita!
                    </p>
                    <a href="./pontos_turisticos.html" class="inline-block mt-4 text-jampa-green font-semibold hover:underline">

                    </a>
                </div>

                <div class="card bg-white rounded-xl shadow-xl p-6 text-center border-t-4 border-jampa-blue transition duration-300 hover:shadow-2xl hover:scale-[1.03]">
                    <a href="./praias.html" class="block">
                        <img src="images/praia.png" alt="Praias" class="w-full h-40 object-contain mx-auto mb-4">
                    </a>
                    <h3 class="text-xl font-bold text-jampa-blue mb-2">
                        Praias
                    </h3>
                    <p class="text-gray-600 text-sm">
                        Explore as praias paradisíacas e relaxe em meio à natureza exuberante.
                    </p>
                    <a href="./praias.html" class="inline-block mt-4 text-jampa-green font-semibold hover:underline">

                    </a>
                </div>

                <div class="card bg-white rounded-xl shadow-xl p-6 text-center border-t-4 border-jampa-blue transition duration-300 hover:shadow-2xl hover:scale-[1.03]">
                    <a href="./gastronomia.html" class="block">
                        <img src="images/gastronomia.png" alt="Gastronomia" class="w-full h-40 object-contain mx-auto mb-4">
                    </a>
                    <h3 class="text-xl font-bold text-jampa-blue mb-2">
                        Gastronomia
                    </h3>
                    <p class="text-gray-600 text-sm">
                        Delicie-se com a culinária local e descubra sabores únicos e inesquecíveis.
                    </p>
                    <a href="./gastronomia.html" class="inline-block mt-4 text-jampa-green font-semibold hover:underline">

                    </a>
                </div>
                
                <div class="card bg-white rounded-xl shadow-xl p-6 text-center border-t-4 border-jampa-blue transition duration-300 hover:shadow-2xl hover:scale-[1.03]">
                    <a href="./hospedagem.html" class="block">
                        <img src="images/hotel.png" alt="Hotéis & Hospedagem" class="w-full h-40 object-contain mx-auto mb-4">
                    </a>
                    <h3 class="text-xl font-bold text-jampa-blue mb-2">
                        Hotéis & Hospedagem
                    </h3>
                    <p class="text-gray-600 text-sm">
                        Encontre os melhores lugares para ficar e aproveite sua viagem com conforto e qualidade.
                    </p>
                    <a href="./hospedagem.html" class="inline-block mt-4 text-jampa-green font-semibold hover:underline">

                    </a>
                </div>

            </div>
        </section>
    </main>
    
    <footer class="bg-gray-800 text-white text-center py-6 mt-auto">
        <div class="container mx-auto px-4 max-w-7xl">
            <p class="text-sm">
                &copy; 2025 Guia Turístico João Pessoa PB. Todos os direitos reservados.
            </p>
            <p class="text-xs text-gray-400 mt-1">
                Criado por: Gleydson Bruno, Júlio César e Gabriel Rodrigues
            </p>
        </div>
    </footer>
    
    <script src="./scripts.js"> </script>
</body>
</html>
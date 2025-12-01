

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Painel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ancizar+Serif:ital,wght@0,300..900;1,300..900&family=Macondo&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <div class="logo">
            <img src="images\logotip.png" alt="" width="350" height="350">
        </div>
    <!---
    <nav>
        <ul>
            <li><a href="painel.php">Página Inicial</a></li>
            <li><a href="pontos.html">Pontos Turísticos</a></li>
            <li><a href="">Praias</a></li>
            <li><a href="">Gastronomia</a></li>
            <li><a href="">Usuário</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </nav>
    --->
    </header>
    

    <main>
        <h2 id="phrase"></h2>
        <hr>
        <section>
            <div class="cards">
                <div class="card">
                    <a href="./pontos_turisticos.html"><img src="images\joao-pessoa.png" alt=""></a>
                    <h3>Pontos Turísticos</h3>
                    <p>Descubra os melhores pontos turísticos da região e aproveite ao máximo sua visita!</p>
                </div>

                <div class="card">
                    <a href="./praias.html"><img src="images\praia.png" alt=""></a>
                    <h3>Praias</h3>
                    <p>Explore as praias paradisíacas e relaxe em meio à natureza exuberante.</p>
                </div>

                <div class="card">
                    <a href="./gastronomia.html"><img src="images\gastronomia.png" alt=""></a>
                    <h3>Gastronomia</h3>
                    <p>Delicie-se com a culinária local e descubra sabores únicos e inesquecíveis.</p>
                </div>
                <div class="card">
                    <a href="./hospedagem.html"><img src="images\hotel.png" alt=""></a>
                    <h3>Hotéis & Hospedagem</h3>
                    <p>Encontre os melhores lugares para ficar e aproveite sua viagem com conforto e qualidade.</p>
                </div>

            </div>
        </section>
    </main>
        
    <footer>
        <p>
            © 2025 Todos os direitos reservados.
            Criado por: Gleydson Bruno, Júlio César e Gabriel Rodrigues
        </p>
    </footer>
    <script src="./scripts.js"> </script>
</body>
</html>
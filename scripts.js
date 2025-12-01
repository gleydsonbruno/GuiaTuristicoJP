var listaDeFrases = [
    "Viajar é colecionar mundos dentro de si.",
    "O destino muda, mas a aventura é sempre a mesma: viver intensamente.",
    "Onde os pés não alcançam, o coração sonha.",
    "Descubra lugares, encontre histórias, viva memórias.",
    "Viajar é a forma mais bonita de se perder — e de se encontrar."
]

frase_indice = Math.floor(Math.random() * listaDeFrases.length);
frase = document.getElementById("phrase");

frase.textContent = listaDeFrases[frase_indice];
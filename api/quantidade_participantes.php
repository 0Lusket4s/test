<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantidade de Participantes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .container {
            display: inline-block;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .total {
            font-size: 36px;
            font-weight: bold;
            color: #4CAF50;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Quantidade de Participantes no Evento</h1>
        <p class="total" id="total-participantes">Carregando...</p>
    </div>

    <script>
        // Função para buscar a quantidade de participantes via AJAX
        function atualizarParticipantes() {
            // Usando o Fetch API para fazer a requisição
            fetch('get_participantes.php')
                .then(response => response.json())  // Parse do JSON retornado
                .then(data => {
                    // Atualizando o conteúdo da página com o número de participantes
                    document.getElementById('total-participantes').textContent = data.total_participantes + ' participantes';
                })
                .catch(error => {
                    console.error('Erro ao obter dados:', error);
                });
        }

        // Atualiza a quantidade de participantes a cada 5 segundos
        setInterval(atualizarParticipantes, 5000);

        // Chama a função ao carregar a página pela primeira vez
        window.onload = atualizarParticipantes;
    </script>

</body>
</html>

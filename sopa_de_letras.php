<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sopa de Letras</title>
    <style>
        .word-search {
            display: grid;
            grid-template-columns: repeat(10, 1fr);
            gap: 5px;
            margin: 20px;
        }
        .word-search div {
            width: 30px;
            height: 30px;
            border: 1px solid #000;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-family: Arial, sans-serif;
        }
        .word-list {
            list-style: none;
        }
    </style>
</head>
<body>
    <h1>Sopa de Letras</h1>
    <div class="word-search" id="word-search"></div>
    <h2>Palabras a buscar</h2>
    <ul class="word-list">
        <li>NASA</li>
        <li>PLANETA</li>
        <li>GASEOSOS</li>
        <li>SOLAR</li>
    </ul>

    <script>
        const words = [
            
            'T', 'E', 'S', 'T', 'O', 
            'P', 'L', 'A', 'O', 'E', 
            'K', 'p', 'M', 'Z', 'L', 
            'T', 'E', 'l', 'S', 'O', 
            'P', 'L', 'A', 'T', 'R', 
            'K', 'N', 'M', 'Z', 'W', 
        ];

        const grid = document.getElementById('word-search');

        for (let i = 0; i < 100; i++) {
            const cell = document.createElement('div');
            cell.textContent = words[Math.floor(Math.random() * words.length)];
            grid.appendChild(cell);
        }
    </script>
</body>
</html>

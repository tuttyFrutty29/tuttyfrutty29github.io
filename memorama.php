<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juego de Memoria</title>
    <link href="include/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="include/img//logonasa.jpeg">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <main> 
   <section class="section1"></section>
   <hl>Juego de Memoria</hl>
        <table>
       <tr>
        <td><button id="0" onclick="destapar (0)"></button></td>
        <td><button id="1" onclick="destapar(1)"></button></td>
        <td><button id="2" onclick="destapar(2)"></button></td>
        <td><button id="3" onclick="destapar(3)"></button></td>
       </tr>
       <tr>
        <td><button id="4" onclick="destapar(4)"></button></td>
        <td><button id="5" onclick="destapar(5)"></button></td>
        <td><button id="6" onclick="destapar(6)"></button></td>
        <td><button id="7" onclick="destapar(7)"></button></td>
       </tr>
       <tr>
        <td><button id="8"  onclick="destapar(8)"></button></td>
        <td><button id="9"  onclick="destapar(9)"></button></td>
        <td><button id="10" onclick="destapar(10)"></button></td>
        <td><button id="11" onclick="destapar(11)"></button></td>
       </tr>
       <tr>
        <td><button id="12" onclick="destapar(12)"></button></td>
        <td><button id="13" onclick="destapar(13)"></button></td>
        <td><button id="14" onclick="destapar(14)"></button></td>
        <td><button id="15" onclick="destapar(15)"></button></td>
       </tr>
   </table>
   </section>
   <section class="section2">
       <h2 id="aciertos" class="estadisticas">Aciertos: 0</h2>
       <h2 id="t-restante" class="estadisticas">Tiempo: 30 segundos</h2>
       <h2 id="movimientos" class="estadisticas">Movimientos: 0</h2>
   </section>
</main>
<footer>
    <p>Juego programado por JC <a /a> </p>
</footer>
<script src="script.js"></script>
</body>
</html>
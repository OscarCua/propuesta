<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¿Quieres ser mi novia?</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive;
            text-align: center;
            background-color: #ffe6f0;
            padding: 50px;
        }

        .carta {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            display: inline-block;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            max-width: 500px;
        }

        h1 {
            color: #ff4081;
        }

        button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        #si {
            background-color: #4CAF50;
            color: white;
        }

        #no {
            background-color: #f44336;
            color: white;
            position: relative;
        }

        #mensaje {
            margin-top: 20px;
            font-size: 20px;
            color: #ff4081;
        }

        #dedicatoria {
            margin-bottom: 20px;
            font-size: 18px;
            color: #d63384;
            font-style: italic;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    
    <div class="carta">
        <div id="dedicatoria">
Desde la Distancia, Hasta Ti

Cuando te vi, caí en tu belleza,
como quien tropieza con el cielo
y no espera ser mirado de vuelta.
Me resigné al silencio,
a ese lugar donde el amor observa
pero no toca,
donde la esperanza se viste de rutina
y el alma aprende a mirar sin pedir.

Te miraba…
como se mira un amanecer desde la ventana,
feliz de que existas,
aunque no supieras que yo también lo hacía.

Cada momento contigo, aún lejano,
fue un regalo que guardé en la memoria,
como quien colecciona luces
en una noche que no promete mañana.

Y hoy —misterio de la vida—
puedo rozarte con las manos
que antes solo sabían de anhelo.
Puedo hablarte con la voz
que antes solo pensaba en ti en silencio.

No olvido la distancia,
porque fue ella quien me enseñó
a valorar la cercanía.
Y si alguna vez te amé sin que lo supieras,
hoy te amo más
porque estás aquí…
y me miras también.
        </div>

        <h1>¿Quieres ser mi novia? 💖</h1>
        <button id="si" onclick="responder('si')">Sí</button>
        <button id="no" onmouseover="moverNo()">No</button>
        <div id="mensaje"></div>
    </div>

    <script>
        function responder(respuesta) {
            if (respuesta === 'si') {
                document.getElementById("mensaje").innerHTML = "¡Yay! 💕 Te amo 😍";
            }
        }

        function moverNo() {
            const noBtn = document.getElementById("no");
            const randX = Math.floor(Math.random() * 300);
            const randY = Math.floor(Math.random() * 200);
            noBtn.style.position = "absolute";
            noBtn.style.left = randX + "px";
            noBtn.style.top = randY + "px";
        }
    </script>
</body>
</html>

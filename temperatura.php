<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title>
</head>
<link rel="stylesheet" href="Temperatura.css">
<body>
<div class="top">
        <h1>Temperatura</h1>
         <a href="Temperatura.html"><button class="botaoVoltar" type="button">Voltar</button></a>
    </div>

    <div class="fundo">
        <div>
            <img src="Imagens/Termometro.png" class="termometro">
            <?php 

                $temperatura = $_POST['temp'];

                if ($temperatura < 0){
                    echo "$temperatura ºC Congelante" ;
                }
                elseif($temperatura >= 0 && $temperatura < 15){
                    echo "$temperatura ºC  Muito Frio";
                }
                elseif($temperatura >= 15 && $temperatura < 25){
                    echo "$temperatura ºC  Razoável";
                }
                else{
                    echo "$temperatura ºC  Calor";
                }
            ?>
        </div>
    </div>
</body>
</html>



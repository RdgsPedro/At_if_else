<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link rel="stylesheet" href="imc.css">
</head>
<body>
    <div class="top">
        <a href="imc.html"><button class="botaoVoltar" type="button">Voltar</button></a>
        <h1>Calculando o IMC</h1>
    </div>

    <div class="fundo">
        <div>
            <img src="Imagens/exercicio.png" class="exercicio">
            <?php 

                $peso = $_POST['peso'];
                $altura = $_POST['altura'];

                $imc = $peso / ($altura * $altura);

                $imcReal = number_format($imc, 2);
                
                if ($imc < 18.5){
                    echo "IMC = $imcReal, Abaixo do peso normal";
                }
                elseif ($imc >= 18.5 && $imc < 25){
                    echo "IMC = $imcReal, Peso normal";
                }
                elseif ($imc >= 25 && $imc < 30){
                    echo "IMC = $imcReal, Excesso de peso";
                }
                elseif ($imc >= 30 && $imc < 35){
                    echo "IMC = $imcReal, Obesidade classe I";
                }
                elseif ($imc >= 35 && $imc < 40){
                    echo "IMC = $imcReal, Obesidade classe II";
                }
                elseif ($imc >= 40){
                    echo " IMC = $imcReal, Obesidade classe III";
                }
            ?>
        </div>
    </div>
</body>
</html> 



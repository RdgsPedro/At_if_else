<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
    <link rel="stylesheet" href="media.css">
</head>
<body>
    <div class="top">
        <a href="media.html"><button class="botaoVoltar" type="button">Voltar</button></a>
        <h1>Calculando a média do aluno</h1>
    </div>

    <div class="fundo">
        <div>
            <img src="Imagens/educacao.png" class="exercicio">
            <?php 

                $nota1 = $_POST['nota1'];
                $nota2 = $_POST['nota2'];
                $nota3 = $_POST['nota3'];

                $media = ($nota1 + $nota2 + $nota3)/3;

                $mediaReal = number_format($media, 2);

                if ($mediaReal >= 7){
                    echo "Nota $mediaReal, Aprovado";
                }else{
                    echo "Nota $mediaReal, Reprovado";
                }
            ?>
        </div>
    </div>
</body>
</html> 


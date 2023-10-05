<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <section>
        <main>
            <?php 
            $nome = $_GET["nome"];
            $sobrenome = $_GET["sobrenome"];
            $cidade = $_GET["cidade"];
            echo "Olá <strong>$nome $sobrenome</strong>, é um prazer te conhecer! Vocé é de $cidade "
            ?>
            <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
        </main>

    </section>



</body>

</html>
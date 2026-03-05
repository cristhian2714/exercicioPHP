<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 19</title>
</head>
<body>
<?php include('funcoes.php');    ?>
    <h1>Exercício 19</h1>
    <h2>19. Calcule o fatorial de um número com enquanto.</h2>
    <form method="POST">
        <label>Informe um numero: </label>
        <input type="number" name="num" id="num"/>
        <br>
        <button type="submit">Mostrar
            <?php 
                $num     = $_POST['num'];
                $resultado = fatorial($num);
            ?>
        </button>
    </form>
    <h1>
        <?php echo $resultado;?>
    </h1>
    
    
</body>
</html>
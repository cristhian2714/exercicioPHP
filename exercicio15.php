<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 15</title>
</head>
<body>
<?php include('funcoes.php');    ?>
    <h1>Exercício 15</h1>
    <h2>15. Verifique se um número é multiplo de 3 e 5 ao mesmo tempo.</h2>
    <form method="POST">
        <label>Informe um numero: </label>
        <input type="number" name="num" id="num"/>
        <br>
        <button type="submit">Mostrar
            <?php 
                $num     = $_POST['num'];
                $resultado = multiplos($num);
            ?>
        </button>
    </form>
    <h1>
        <?php echo $resultado;?>
    </h1>
    
</body>
</html>
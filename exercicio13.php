<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
</head>
<body>
<?php include('funcoes.php');    ?>
    <h1>Exercício 13</h1>
    <h2>13. Leia dois números e exiba o maior deles.</h2>
    <form method="POST">
        <label>Informe uma senha: </label>
        <input type="number" name="num1" id="num1"/>
        <br>
        <label>Informe uma senha: </label>
        <input type="number" name="num2" id="num2"/>
        <br>
        <button type="submit">Mostrar
            <?php 
                $num1     = $_POST['num1'];
                $num2     = $_POST['num2'];
                $resultado = lerNumeros($num1,$num2);
            ?>
        </button>
    </form>
    <h1>
        <?php echo $resultado;?>
    </h1>

    
    
</body>
</html>
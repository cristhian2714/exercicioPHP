<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 16</title>
</head>
<body>
<?php include('funcoes.php');    ?>
    <h1>Exercício 16</h1>
    <h2>16. Leia três valores e verifique se formam um triangulo. Classifique-os</h2>
    <form method="POST">
        <label>Informe um numero: </label>
        <input type="number" name="num1" id="num1"/>
        <br>
        <label>Informe um numero: </label>
        <input type="number" name="num2" id="num2"/>
        <br>
        <label>Informe um numero: </label>
        <input type="number" name="num3" id="num3"/>
        <br>
        
    
        <button type="submit">Mostrar
            <?php 
                $num1     = $_POST['num1'];
                $num2     = $_POST['num2'];
                $num3     = $_POST['num3'];
                $resultado = triangulos($num1,$num2,$num3);
            ?>
        </button>
    </form>
    <h1>
        <?php echo $resultado;?>
    </h1>
    
</body>
</html>
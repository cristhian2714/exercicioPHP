<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 09</title>
</head>
<body>
<?php include('funcoes.php');    ?>
    <h1>Exercício 09</h1>
    <h2>9. Leia números até que a soma ultrapasse 100.</h2>
    <form method="POST">
        <label>Informe 5 números: </label>
        <label>Informe um número: </label>
        <input type="number" name="num1" id="num1"/>
        <br><br>
        <label>Informe um número: </label>
        <input type="number" name="num2" id="num2"/>
        <br><br>
        <label>Informe um número: </label>
        <input type="number" name="num3" id="num3"/>
        <br><br>
        <label>Informe um número: </label>
        <input type="number" name="num4" id="num4"/>
        <br><br>
        <label>Informe um número: </label>
        <input type="number" name="num5" id="num5"/>
        <br><br>
        <button type="submit">Calcular
            <?php 
                $num1     = $_POST['num1'];
                $num2     = $_POST['num2'];
                $num3     = $_POST['num3'];
                $num4     = $_POST['num4'];
                $num5     = $_POST['num5'];
                $resultado = somarNumeros($num1,$num2,$num3,$num4,$num5);
            ?>
        </button>
    </form>
    <h1>
        <?php echo $resultado;?>
    </h1>
    
</body>
</html>
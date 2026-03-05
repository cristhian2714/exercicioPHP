<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 21</title>
</head>
<body>
<?php include('funcoes.php');    ?>
    <h1>Exercício 21</h1>
    <h2>21. Leia um codigo de um produto e informe seu nome e preço.</h2>
    <form method="POST">
        <label>Informe um codigo: </label>
        <input type="number" name="num1" id="num1"/>
        <br>
        <label>Informe um codigo: </label>
        <input type="number" name="num2" id="num2"/>
        <br>
        <label>Informe um codigo: </label>
        <input type="number" name="num3" id="num3"/>
        <br>
        <label>Informe um codigo: </label>
        <input type="number" name="num4" id="num4"/>
        <br>
        <label>Informe um codigo: </label>
        <input type="number" name="num5" id="num5"/>
        <br>
    
        <button type="submit">Mostrar
            <?php 
                $num1     = $_POST['num1'];
                $num2    = $_POST['num2'];
                $num3    = $_POST['num3'];
                $num4     = $_POST['num4'];
                $num5     = $_POST['num5'];
                $resultado = lerPreco($num1,$num2,$num3,$num4,$num5);
            ?>
        </button>
    </form>
    <h1>
        <?php echo $resultado;?>
    </h1>
    
</body>
</html>
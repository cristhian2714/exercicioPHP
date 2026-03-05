<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 17</title>
</head>
<body>
    <?php include('funcoes.php') ?>
    <h1>Exercicio 17</h1>
    <br><br>
    <h2>17.Leia idades. Mostre a media</h2>
    <form method="POST">
        <label>Primeiro Numero:</label>
        <input type="number" name="num1" id="num1"/>
        <br><br>
        <label>Segundo Numero:</label>
        <input type="number" name="num2" id="num2"/>
        <br><br>
        <label>Terceiro Numero:</label>
        <input type="number" name="num3" id="num3"/>
        <br><br>
        <label>Quarto Numero:</label>
        <input type="number" name="num4" id="num4"/>
        <br><br>
        <label>Quinto Numero:</label>
        <input type="number" name="num5" id="num5"/>

        <button type="submit">Mostrar
            <?php
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];
                $num4 = $_POST['num4'];
                $num5 = $_POST['num5'];
                $resultado = lerEnquanto($num1,$num2,$num3,$num4,$num5)
            ?>
        </button>
    </form>
    <h1>
        <?php echo $resultado;?>
    </h1>

            

    
</body>
</html>
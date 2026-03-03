<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>
<body>
<?php include('funcoes.php');    ?>
    <h1>Exercício 07</h1>
    <h2>7. Leia 2 horários e determine qual é mais tarde.</h2>
    <form method="POST">
        <label>Informe uma horario: </label>
        <input type="number" name="horario1" id="horario1"/>
        <br><br>
        <label>Informe o segundo horario: </label>
        <input type="number" name="horario2" id="horario2"/>
        <br>
        <button type="submit">Mostrar
            <?php 
                $horario1     = $_POST['horario1'];
                $horario2     = $_POST['horario2'];
                $resultado = validarHorarios($horario1, $horario2);
            ?>
        </button>
    </form>
    <h1>
        <?php echo $resultado;?>
    </h1>
    
</body>
</html>
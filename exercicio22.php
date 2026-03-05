<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 22</title>
</head>
<body>
<?php include ('funcoes.php');?>
<form method="POST">
        <label>00:</label>
        <input type="number" name="matriz[0][0]" id="primeiroNumero"/>
        <br>
        <label>01:</label>
        <input type="number" name="matriz[0][1]" id="primeiroNumero"/>
        <br>
        <label>02:</label>
        <input type="number" name="matriz[0][2]" id="primeiroNumero"/>
        <br>
        <label>04:</label>
        <input type="number" name="matriz[0][3]" id="primeiroNumero"/>
        <br>
        <label>11:</label>
        <input type="number" name="matriz[1][0]" id="primeiroNumero"/>
        <br>
        <label>12:</label>
        <input type="number" name="matriz[1][1]" id="primeiroNumero"/>
        <br>
        <label>13:</label>
        <input type="number" name="matriz[1][2]" id="primeiroNumero"/>
        <br>
        <label>14:</label>
        <input type="number" name="matriz[1][3]" id="primeiroNumero"/>
       <br>
       <label>21:</label>
        <input type="number" name="matriz[2][0]" id="primeiroNumero"/>
        <br>
        <label>22:</label>
        <input type="number" name="matriz[2][1]" id="primeiroNumero"/>
        <br>
        <label>23:</label>
        <input type="number" name="matriz[2][2]" id="primeiroNumero"/>
        <br>
        <label>24:</label>
        <input type="number" name="matriz[2][3]" id="primeiroNumero"/>
       <br>
       <label>31:</label>
        <input type="number" name="matriz[3][0]" id="primeiroNumero"/>
        <br>
        <label>32:</label>
        <input type="number" name="matriz[3][1]" id="primeiroNumero"/>
        <br>
        <label>33:</label>
        <input type="number" name="matriz[3][2]" id="primeiroNumero"/>
        <br>
        <label>44:</label>
        <input type="number" name="matriz[3][3]" id="primeiroNumero"/>
       
       
        <button type="submit">Calcular
            <?php
                $matriz = $_POST['matriz'];
                mostrarMatriz($matriz);
            ?>
        </button>
    </form>
    <br>
  
</body>
</html>
    
</body>
</html>
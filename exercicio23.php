<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 23</title>
</head>
<body>
    <?php 
        include('funcoes.php')
        
    ?>
    <form method="POST">
       <label>Primeiro Número:</label>
        <input type="number" name="valores[]" id="primeiroNumero"/>
        <br>
        <label>Segundo Número:</label>
        <input type="number" name="valores[]" id="primeiroNumero"/>
        <br>
        <label>Terceiro Número:</label>
        <input type="number" name="valores[]" id="primeiroNumero"/>
        <br>
        <label>Quarto Número:</label>
        <input type="number" name="valores[]" id="primeiroNumero"/>
        <br>
        <label>Quarto Número:</label>
        <input type="number" name="valores[]" id="primeiroNumero"/>
        <br>
        <label>Quinto Número:</label>
        <input type="number" name="valores[]" id="primeiroNumero"/>
        <br>
        <label>Sexto Número:</label>
        <input type="number" name="valores[]" id="primeiroNumero"/>
        <br>
         <label>Setimo Número:</label>
        <input type="number" name="valores[]" id="primeiroNumero"/>
        <br>
        <label>Nono Número:</label>
        <input type="number" name="valores[]" id="primeiroNumero"/>
        <br>
        <label>Decimo Número:</label>
        <input type="number" name="valores[]" id="primeiroNumero"/>
        <br>
        <button type="submit">Calcular
            <?php 
                $vetor = $_POST['valores'];
                mostrarVetor($vetor);
            ?>
             
        </button>
        
    </form>
    <br>
    <h1>
        
    </h1>
   
    
</body>
</html>
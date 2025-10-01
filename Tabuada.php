<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Exe 01</title>
</head>
<body>
 <form method="POST">
    <label for="number">Número desejado:</label>
    <input type="text" name="number" id="number" required>
    <button type="submit">Enviar</button>
 </form>
 <?php 
 //Crie um programa que exiba a tabuada de um número 
 //fornecido pelo usuario, de 1 a 10, utilizando for
    $num = $_POST["number"];
    settype($num, "integer");
    if ($num >= 1 && $num <= 10) {
    echo "<h1>Tabuada desejada</h1>";
    for ($i = 1; $i <= 10; $i++) {
        echo $num."X".$i."=".($i*$num)."<br>";
    } 
    }else {
        echo "Digite um número entre 1 e 10.";
    }



 ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Formulario</title>
</head>
<body>
    <form method="POST"> 
        <label for="name">Digite seu nome:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="phone">Digite seu número:</label><br>
        <input type="tel" id="phone" name="phone"><br><br>
        <label for="favSong">Digite sua música preferida:</label><br>
        <input type="text" id="favSong" name="favSong"><br><br>
        <button>Enviar!</button>
    </form>

<?php
//Crie um script que valide um formulário de cadastro, verifique se os campos obrigatorios foram
//preenchidos, utilizando foreach para percorrer os campos.
$formData = $_POST; //puxando informações dos formulários(pesquisei no copilot)
$i = 0; //inicializando contador para fins a serem explicados
foreach ($formData as $data) { //for each comparando as informações do formulario 
    $i++; //soma no contador para idenfiticar o campo do looping
    if (empty($data)) { //se não houver informações, o código será parado
        echo "Campo ". $i. " está vazio";//imprime o campo vazio
        break;
    } elseif ($i == 3){//gambiarra feia pra fechar o código.
    echo "Todos os campos foram preeenchidos <br>";
    echo "<pre>"; //Comando descoberto utilizando copilot para melhor formatação
    print_r($formData);//me bati pra encontrar como que imprime um array, pqp.
    echo "</pre>";
    }//Meu Deus quanta obs
    
}

?>
</body>
</html>
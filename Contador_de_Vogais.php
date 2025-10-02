<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Vogais</title>
</head>
<body>
    <form method="POST">
        <label for="phrase">Digite uma frase:</label>
        <input type="text"id="phrase" name="phrase" required>
        <button>Enviar!</button>
    </form>
    <?php
    $phrase = $_POST["phrase"];
    $vowels = ["a", "e", "i", "o", "u"]; #array com todas as vogais
    if (empty($phrase)) { ##criamos uma condição para verificar se o campo foi completo
        echo "<h1>PREENCHA O CAMPO!</h1>";
        ##aviso obvio que provavelmente não vai ocorrer por causa do required no input.
    } else {
        $j = 0;
        for ($i = 0; $i < strlen($phrase); $i++) { 
            #com ajuda do copilot eu lembrei do strlen, eu lembrei que o professor já comentou, mas
            #sozinho não me recorreu, enfim, agora vai dar boa.
            $phrase = strtolower($phrase); #coloquei a frase tudo minusculo pra comprar melhor
            $letter = $phrase[$i]; #multipliquei a string pela repetição do for pra ver a letra individual
            if (in_array($letter, $vowels)) { #identifica se a letra está no array de vogais
                $j++;
            }
        }
        echo "Tinham ". $j. " vogais no seu texto";
    }
    #Não sei por que eu escrevo metade do codigo em inglês e metade em português
    #eu geralmente uso de IAs em português, então se passar pela sua cabeça que foi IA, não foi
    #costumo citar tudo que utilizei de IAs, pois caso alguém venha a ver meu github com a 
    #intenção de me contratar não tenho intenções nenhumas de esconder meu real nível como 
    #programador.
    ?>
</body>
</html>
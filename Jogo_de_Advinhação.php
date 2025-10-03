<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Advinhação</title>
    
</head>
<body>
    <form method="POST">
        <label for="number">Digite um número entre 1 e 100</label><br>
        <input type="number" id="number" name="number">
        <button>Enviar!</button>
    </form>
    <?php
    //Desenvolva um jogo onde o usuário deve advinhar um número aleatório entre 1 e 100,
    //utilizando do-while para permitir multiplas tentativas.
    session_start();//inicializando um sessão pois ao enviar formulario se recarrega a página
   if (!isset($_SESSION["num"])) { //responsável por resetar o sistema em acertos e inicializar tudo
    $_SESSION["num"] = rand(1, 100); //limita a possíbilidade dos números
    $_SESSION["i"] = 0;
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
    $attempt = $_POST["number"];//puxa número do formulário
    $_SESSION["i"]++;//conta as tentativas
    }
    do {
        if ($attempt == $_SESSION["num"]){ //acerto
            echo "Parabéns, você acertou, o número era: ".$_SESSION["num"].". ".$_SESSION["i"].
            " tentativas foram necessárias";
            session_destroy(); //reinicia a sessão
        }else { //erro
            if ($attempt > $_SESSION["num"]){ //ajuda que eu achei muito dificil o jogo.
                echo "Tente um número menor";
            } elseif ($attempt < $_SESSION["num"]){ //ajuda que eu achei muito dificil o jogo.
                echo "Tente um número maior";
            }
           
        }
    }while (false); //meu computador travou multiplas vezes tentando usar uma logica no do while
    //então eu desisti de usar esse formato pois não cheguei em nenhuma conclusão pláusivel 
    //por conta própria. Isso tendo em mente que o uso no navegador era obrigatório no passo 4
    //passo 4 - Abra o arquivo no navegador para ver o resultado (obs.: Verificar Xampp).
    ?>
</body>
</html>
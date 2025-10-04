<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador de média</title>
</head>
<body>
 <form method="POST">
    <label for="grade">Digite a nota do aluno: (-1 encerrará o programa)</label>
    <input type="number" name ="grade" id="grade" required>
    <button>Enviar!</button>
 </form>
<?php
//Crie uma calculadora que receba notas de alunos ate que o usuário digite -1, e então, calcule 
//a média, utilizando while.
session_start();
$grade = null;
if (!isset($_SESSION["Grades"])) { //caso as variaveis não existam (primeira execução)
    $_SESSION["Grades"] = [];// ambas as variaveis serão incializadas, tanto a de notas quanto
    $_SESSION["i"] = 0;     // a contadora.
    //pesquisei como eu poderia armazenar as notas separadamente, e a resposta foi em um array.
}
if ($_SERVER["REQUEST_METHOD"] === "POST") { 
    $grade = $_POST["grade"]; //atribui um valor vindo do formulário
}
while (true) {
    if ($grade > 0){ //identifica notas validas
    $_SESSION["i"]++; //conta a quantia de notas digitadas
    $_SESSION["Grades"][]= (float)$grade; //adiona a nota da sessão no array
    break;// para evitar travamentos da pagina, adicionei break em todos os resultados do if
    continue;
    } elseif ($grade == -1) { //verifica para finalizar o programa.
        $AvgGrade = array_sum($_SESSION["Grades"])/$_SESSION["i"]; //soma o array e divide pelo contador
        echo $AvgGrade." é a média das notas."; //dá display na nota
        session_destroy(); //reinicia a sessão
        break;
    } else {
        break;
    }
}
//Por causa do while, o uso no navegador é inviavel, então para melhor utilizar desta função, estarei
// fazendo outro código, da mesma forma que fiz os dois jogos de advinhação.
// lembrando o uso para teste no navegador foi uma instrução, assim como o uso do while
// por tanto, não é uma redundancia desnecessária, estou cumprindo requisitos.
?>
</body>
</html>

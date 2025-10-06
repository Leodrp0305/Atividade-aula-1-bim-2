<?php
//Crie uma calculadora que receba notas de alunos ate que o usuário digite -1, e então, calcule 
//a média, utilizando while.
$continue = true; //inicialemente colocando a variavel $continue como true para iniciar programa
while ($continue) { //while maior para dar opção de sair do programa ou não
$grades = []; //inicializando array
$grade = 0; //incializando variaveis
$i = 0;

while ($grade !== -1) { //while de funcionamento
    echo "\n Digite as notas dos alunos (-1 encerrará o programa)"; //instrução para usuário
    $scannerfloat = (float)trim(fgets(STDIN)); //scanner para facilitar o processo de entrada de informações
    $grade = $scannerfloat; //utilizando a classe de scanner como se fosse java
    if ($grade >=0.0 && $grade <= 100.0) { //entre 0 e 100
    $grades[] = $grade;//colocando as notas dentro do array
    $i++; //ativa o contador
    } elseif ($grade == -1.0) { //era mais fácil só colocar um break aqui depois do echo
        echo "\n encerrando programa...";
        break;
    }else { //instruções para notas válidas
        echo "\n Digite uma nota valida ou seja entre 0 e 100.";
    }
}
if ($i <= 0){ // if para evitar bug de divisão infinita
    echo "Não foi possível calcular sua média";
} else { //caso não tenha divisão infinita
 $result = array_sum($grades)/$i;
 echo "\n A média das notas é ".$result;
}
echo "\n Deseja sair do programa? (Sim/Não)"; //código do while maior para finalizar bonito o programa
$scanner = trim(fgets(STDIN)); //scanner para puxar informações
$SoN = $scanner;
if ($SoN === "Sim" || $SoN === "sim" || $SoN === "s") { //sair do programa
    $continue = false;
} elseif ($SoN === "Não" || $SoN === "não" || $SoN === "n") {//não sair do programa
    $continue = true;
}
}
?>
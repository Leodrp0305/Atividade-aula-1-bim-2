<?php
//Desenvolva um jogo onde o usuário deve advinhar um número aleatório entre 1 e 100,
//utilizando do-while para permitir multiplas tentativas.

//Eu primeiro desenvolvi o código chamado Jogo_de_Advinhação.php, no entanto, devido ao problema
//no meu uso do do while, o qual não achei valido, decidi fazer outro código utilizando verdadeira
//mente da função e satisfazer o quesito. (Eu também queria fazer pois parecia legal)

//meu problema se deu pelo display dentro do navegador que travava ao usar o do while.


$num = rand(1,100); //variavel responsável pelo número a se advinhar
$attempts = 0; //inicia a variavel de contagem
$Cattempt = null; //inicializando cattempt
do {
 echo "\n Digite o seu palpite entre 1 e 100!:"; //instrui o usuário
$scanner = trim(fgets(STDIN));//pesquisei no chatgpt como fazer uma entrada pelo console
$Cattempt = (int)$scanner;//mimetiza o scanner do java dentro do cmd
$attempts++; //ativa o contador 

if ($Cattempt == " " || !is_numeric($Cattempt)) { //filtra qualquer entrada não valida
    echo "\n Digite um número";
    continue;//pula a execução
} 
if ($Cattempt > $num) { //facilitador do jogo
    echo "\n Tente um número menor!";
} elseif ($Cattempt < $num) { //facilitador do jogo
    echo "\n Tente um número maior!";
} else {
    echo "\n Parabéns! O número era ".$num.". Foram necessárias ".$attempts." tentativas para acertar";
}

} while ($num !== $Cattempt) //do-while, agora correto
//Não consegui executar esse código sozinho, uma vez que estou acostumado com python e java
//usei o chatgpt para entender como fazia para executar no cmd, para ser sincero não sei como explicar
//mas eu testei e deu tudo certo, provavelmente tem alguma forma de executar esse código mais facil
//perdão com relação ao amadorismo nessa parte.

?>
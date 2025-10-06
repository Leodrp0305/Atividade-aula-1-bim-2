<?php
//Desenvolva um script que leia um arquivo CSV com dados de produtos e calcule estatisticas 
//como preço médio, maior e menor preço, utilizando foreach.
$fileOpened = fopen("Processador CSV/data.csv", "r"); //abri o arquivo csv que preparei
$data = []; //criando um array para armazenar informações, o que eu não sei se é uma ideia inteligente
$prices = []; //array de preços
fgetcsv($fileOpened); // pular a primeira linha
$maxValueProd = [];
$minValueProd = [];
$i = 0;//define variavel
/*Como o fgetcsv somente lê uma linha do arquivo como array é necessário fazer algo para 
 possibilitar a leitura de todas as linhas dentro de um foreach, então eu decidi com a ajuda
 de inteligencias artificiais utilizar um while, para ler todas as linhas e colocar em um
 array existente, criando um array de arrays.*/

    while (($line = fgetcsv($fileOpened)) !== false) { //pega a linha até que não haja nada nela
        $data[] = $line; //array de arrays com todas as linhas do arquivo
        $i++; //contador para média
    }
    foreach ($data as $eachdata) { //lista de preços 
    $prices[] = $eachdata[2]; //array com todos os preços para futuro array_sum()
    }
    foreach ($data as $thisline) { //foreach para procurar valor máximo
        if ($thisline[2] == max($prices)) { //se o valor maximo for encontrado em uma linha
         $maxValueProd[] = $thisline; // essa linha será salva dentro do array de produto de valor maximo
     }
    }
     foreach ($data as $thislinem) { //foreach para procurar valor máximo
        if ($thislinem[2] == min($prices)) { //se o valor minimo for encontrado em uma linha
         $minValueProd[] = $thislinem; //essa linha será salva dentro do array de produto de valor minimo
     }
    }
    echo "O produto com preço mais alto é: \n"; //apresenta todos os produtos com o valor maximo
    foreach ($maxValueProd as $maxVLn) { 
    echo $maxVLn[0] . " " . $maxVLn[1] . " R$" . $maxVLn[2] . "\n";
    }
    echo "O produto com menor preço é: \n";//apresenta todos os produtos com o valor minimo
    foreach ($minValueProd as $minVln) {
        echo $minVln[0]." ".$minVln[1]." R$".$minVln[2]."\n";
    }
    echo "A média de valor de todos os produtos é: \n";
    echo "R$".array_sum($prices)/$i;//array sum no prices e divide pela quantia de linhas
/* estou morrendo de dor de cabeça depois de terminar esse código, provavelmente por que
não sei resolver muitas das coisas que foram resolvidas, então tive que pensar muito mais do 
que realmente era necessário, utilizei bastante de inteligencias artificias para corrigir alguns erros
 e sugerir soluções como usar o while para tirar tudo de dentro do arquivo e colocar em um array
 e assim poder usar o foreach*/

?>
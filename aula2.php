<?php

 $nome = "Leandro Mezadri";
 $idade = 10;
 $cidade = "Bento Gonçalves";
 $sexo = "Masculino";
 echo " Seja Bem Vindo!!!<br> <br>$nome <br> Cidade: $cidade <br> Idade: $idade <br> Sexo: $sexo <br>";
 echo "<br>";

if($idade >= 18){
    echo "O $nome é maior de idade $idade anos!!";
}
else{
    echo " O $nome, não pode dirrigir carros tem $idade anos !!";

}
echo "<br><br>";

echo "Super Calculadora avançada da NASA 4.0<br>";

echo "<br>";

$valorA = 99;
$valorB = 3;
$operacao = "repartir";
$resultado = "";

if($operacao == "soma"  || $operacao == "adicao" || $operacao == "mais"){
    $resultado = $valorA + $valorB;

}elseif ($operacao == "subtrair" || $operacao == "menos"){
    $resultado = $valorA -  $valorB;

}elseif($operacao == "multiplicar" || $operacao == "vezes"){
    $resultado = $valorA *  $valorB;

}elseif($operacao == "dividir" || $operacao == "repartir"){
    $resultado = $valorA /  $valorB;
}else{
    echo "somente sao aceito os seguintes parametros <br>
    soma <br>
    subtrair <br>
    multiplicar <br>
    dividir <br>";
}

if($resultado != ""){

echo "A Operação escolhida foi: <br><br> $operacao com os valores $valorA e $valorB <br> e o resultado obtido é:  $resultado ";
}

echo "<br>";
echo "<br>";


// Testa se a pessoa pode fazer a carteira de motorista 
//precisa ser maior de 18 anos e ter mais de R$ 1.000,00
//falta fazer a validaçao da idade e do dinheiro 
// se nao tiver idade informar que precisa ser maior de 18 
// se nao tiver dinheiro precisa informar o alor de 1k
///se nao tiver idade e nem dinheiro informar 



$idadePessoa = 15;
$dinheiroNaCarteira = 1000;

if($idadePessoa >= 18 && $dinheiroNaCarteira >= 1000){
    echo "Prabens, voce pode fazer a carteira de motorista!";
}
else{
    echo " O valor é: $dinheiroNaCarteira , suficiente $idadePessoa anos !!";

//}elseif($dinheiroNaCarteira && $idadePessoa){
    //echo " O $dinheiroNaCarteira, suficiente $idadePessoa anos !!";

}



?>
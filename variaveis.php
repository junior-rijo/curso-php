<?php
//algumas variaveis
$minha_ariavel = 1;
$nome = "Junior";
$tem_saldo = true;
$valor = 99.50;

//tem diferenças entre MAISCULO E minisculo para o PHP;
//exemplo:
$nome = "JS";
$Nome = "JS";//são variaveis diferentes 

print($nome);//saida da variavel
echo($valor);//saida da variavel

$nome = 'Junior';
$sobrenome = "Rijo";
$sobrenome2 = "Sant´anna";
$nome_completo = "$nome $sobrenome";
print($nome_completo);

//Operadores
$x = 20;
$y = 30
$z = $x + $y;
print($z)

//Comando unset($z) remove a variável.
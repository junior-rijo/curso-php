<?php
//algumas variaveis
/*$minha_ariavel = 1;
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
/*$x = 20;
$y = 30;
$z = $x + $y;
print($z)*/

//Comando unset($z) remove a variável.

//Operadores part2
$saldo = 600;
$compra = 900;
$tem_cheque_especial = false;

if($compra > $saldo && $tem_cheque_especial == false){
    print('compra negada !');
}
//operador ||
$tempo_trabalho = 24;
$idade = 66;

if( $idade > 65 || $tempo_trabalho >= 25 ) {
	echo 'Aposentadoria !';
}

$idade = 17;

if($idade >= 18){
    print('habilitado');
}else {
    print('não habilitado');
}
//anotações switch
//nela usamos um conjunto de rotinas e sempre devemos usar o break no final
$i = 0;

switch ($i) {
    case 0:
        echo "i igual a 0";
        break;
    case 1:
        echo "i igual a 1";
        break;
    default:
        echo "i não é igual nem a 0 ou 1";
}
//estrutura loop for
for ($i =0; $i<20; $i++){
    print("oi $i".PHP_EOL);
};
print("Deu certo");

//estrutura loop while
$i= 0;
while($i< 20){
    print('oi'.PHP_EOL);
    $i++;
};
echo(acabou);
//while do
$x = 1; 

do {
    echo "O número é: $x </ br>";
    $x++;
} while ($x <= 5);
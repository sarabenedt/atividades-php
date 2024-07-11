<?php
// atv1

echo "<b> Atividade </b>";
echo "<br>";

//atv2

$nome = 'Sara';
$idade = '17';
$lugar = 'Raposa';
$curso = 'de programação no senac';

echo "Meu nome é  " . $nome . "<br>";
echo "Minha idade  " . $idade . "<br>";
echo "minha cidade é " . $lugar . "<br>";
echo "faço curso " . $curso . "<br>";

//atv3

$numero1 = (10);
$numero2 = (2);

$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$multiplicacao = $numero1 * $numero2;
$divisao = $numero1 / $numero2;

echo "Soma: " . $soma . "<br>";
echo "Subtração: " . $subtracao . "<br>";
echo "Multiplicação: " . $multiplicacao . "<br>";
if ($numero2 != 0) {
    echo "Divisão: " . $divisao . "<br>";
} else {
    echo "Divisão: Não é possível dividir por zero\n";
}
 echo "<br>";

//atv4

$num1 = 10;
$num2 = 5;

if ($num1 > $num2) {
    echo "O primeiro número ($num1) é maior que o segundo número ($num2).";
} elseif ($num2 > $num1) {
    echo "O segundo número ($num2) é maior que o primeiro número ($num1).";
} else {
    echo "Os dois números ($num1 e $num2) são iguais.";
}

echo "<br>";
//atv5

$minhaString = "Esta é uma string de exemplo";


$minhaString = strtolower($minhaString);

if (str_contains($minhaString, 'a') && str_contains($minhaString, 'o')) {
    echo "A string contém as letras 'a' e 'o'.";
} else {
    echo "A string não contém as letras 'a' e 'o'.";
}
 
echo "<br>";

//atv6

function retorna_argumento($arg) {
    return $arg;
}

$valor = "sara é linda";
$resultado = retorna_argumento($valor);
echo "Resultado da função: " . $resultado;

echo "<br>";

//atv7

function verificarSenha($senha) {
    if (strlen($senha) <= 10) {
        return false;
    }
    
    $temMaiuscula = false;
    $temMinuscula = false;
    $temNumero = false;
    
    
    for ($i = 0; $i < strlen($senha); $i++) {
        if (ctype_upper($senha[$i])) {
            $temMaiuscula = true;
        } elseif (ctype_lower($senha[$i])) {
            $temMinuscula = true;
        } elseif (ctype_digit($senha[$i])) {
            $temNumero = true;
        }
        
        if ($temMaiuscula && $temMinuscula && $temNumero) {
            break;
        }
    }
    
    return ($temMaiuscula && $temMinuscula && $temNumero);
}

$senha1 = "sarabela1";
$senha2 = "saraperfeita";
$senha3 = "SaraLinda123";

echo "Senha 1: " . (verificarSenha($senha1) ? "Válida" : "Inválida") . "<br>";
echo "Senha 2: " . (verificarSenha($senha2) ? "Válida" : "Inválida") . "<br>";
echo "Senha 3: " . (verificarSenha($senha3) ? "Válida" : "Inválida") . "<br>";

//atv8

function idadedasara($idade) {
    $resultado = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
    return $resultado;
}

$idade1 = 25;
$idade2 = 17;

echo "Idade $idade1: " . verificarMaiorIdade($idade1) . "<br>";
echo "Idade $idade2: " . verificarMaiorIdade($idade2) . "<br>";

//atv9

$alunos = array(
    'Junior' => 9.5,
    'Maria' => 10,
    'Paulo' => 6,
    'Ana'   => 8.5,
    'Pedro' => 6.5,
    'Julia' => 5.5
);

echo "Alunos Aprovados:\n";
foreach ($alunos as $nome => $nota) {
    if ($nota >= 7) {
        echo "Nome: $nome, Nota: $nota\n";
    }
}

//atv10

function calcularAreaDoCirculo($raio) {

    $pi = M_PI;
    
    $area = $pi * pow($raio, 2);
    
    return $area;
}

$raio = 4;
$area = calcularAreaDoCirculo($raio);

echo "Raio: $raio\n";
echo "Área do círculo: " . number_format($area, 2) . "\n";
echo "<br>";
//atv11

function numeros($numero) {
    $numerosPares = array();

    for ($i = 0; $i <= $numero; $i += 2) {
        $numerosPares[] = $i;
    }

    return $numerosPares;
}

$entrada = 10;
$resultado = numeros($entrada);

echo "Números pares até $entrada:\n";
foreach ($resultado as $valor) {
    echo "$valor ";
}
echo "\n";
echo "<br>";

//atv12


function determinarSeculo($ano) {
    
    $seculo = ceil($ano / 100);
    
    return $seculo;
}

$ano1 = 1950;
$ano2 = 2005;
$ano3 = 1900;

echo "Ano $ano1 pertence ao século " . determinarSeculo($ano1) . "\n";
echo "Ano $ano2 pertence ao século " . determinarSeculo($ano2) . "\n";
echo "Ano $ano3 pertence ao século " . determinarSeculo($ano3) . "\n";

//atv13

function ehPalindromo($str) {
    
    $str = strtolower(str_replace(' ', '', $str));
    
    $strInvertida = strrev($str);
    
    if ($str == $strInvertida) {
        return true;
    } else {
        return false;
    }
}

$string1 = "arara";
$string2 = "socorram me subi no onibus em marrocos";
$string3 = "php é legal";

echo "String '$string1' é um palíndromo? " . (ehPalindromo($string1) ? "Sim" : "Não") . "\n";
echo "String '$string2' é um palíndromo? " . (ehPalindromo($string2) ? "Sim" : "Não") . "\n";
echo "String '$string3' é um palíndromo? " . (ehPalindromo($string3) ? "Sim" : "Não") . "\n";

       

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
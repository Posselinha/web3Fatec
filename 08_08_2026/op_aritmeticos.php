<?php

$n1 = 18;
$n2 = 20;
$soma = 0;

$soma = $n1 + $n2;

echo "O resultado da soma -> $soma";

$nota1 = 0.5;
$nota2 = 9;
$nota3 = 5;
$nota4 = 7;

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
echo $media;
echo "<br>";
echo sqrt(48); // raiz quadrada sqrt é SQuare RooT;
echo "<br>";
echo number_format(100000.2, 6, ".", "");
echo "<br>";
echo pow(5, 2); // potencia, pow de power of

$num = 28;
$raiz = sqrt($num);
$formatado = number_format($raiz, 2, ".", "");

echo "<br>Número da raiz formatado: $formatado";

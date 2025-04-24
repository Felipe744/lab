<?php

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;
$notaFilme = 8.8;
$incluidoNoPlano = true;

echo "Nome do filme: " . $nomeFilme . "\n"; //concatenação
echo "Nome do filme: $nomeFilme\n"; //interpolação

//sem vantagens de usar aspas duplas ou aspas simples, usar convenção do time!

$testeVariavelInput = $argv[1] ?? 2022;

echo "Teste variável: " . $testeVariavelInput . "\n";
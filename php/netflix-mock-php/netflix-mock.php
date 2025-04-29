<?php

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Filme2";
$nomeFilme = "Filme3";

$anoLancamento = 2022;
$notaFilme = 8.8;
$incluidoNoPlano = true;

echo "Nome do filme: " . $nomeFilme . "\n"; //concatenação
echo "Nome do filme: $nomeFilme\n"; //interpolação

//sem vantagens de usar aspas duplas ou aspas simples, usar convenção do time!

$testeVariavelInput = $argv[1] ?? 2022;

echo "Teste variável: " . $testeVariavelInput . "\n";

if ($anoLancamento > 2022) {
    echo "Esse filme eh um lancamento\n";
} else {
    echo "Nao eh um lancamento\n";
}

$genero = match($nomeFilme) {
    "Top Gun - Maverick" => "acao",
    "Filme2" => "terror",
    "Filme3" => "comedia",
    default => "outros",
};

echo $genero . "\n";

$filme = [
    "nome" => "Filme1",
    "ano" => 2020,
    "nota" => 9.5,
    "genero" => "comedia",
];

echo $filme["nome"] . "\n";

$notas = [];

for ($contador = 0; $contador < 10; $contador++) {
    $notas[] = $contador;
}

var_dump($notas);

echo "\n" . count($notas);

$somaDeNotas = 0;

foreach ($notas as $nota) {
    $somaDeNotas += $nota;
}

echo "\n Soma das notas = $somaDeNotas";

$somaDeNotas = array_sum($notas);

echo "\n Soma das notas = $somaDeNotas";

$numeroTeste = 1_000; //posso add o _ apenas para melhorar a visualizacao

$numeroTeste = (int) 1.6;

echo "\n $numeroTeste";
<?php

echo "Bem-vindo(a) ao screen match! \n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++){
    $notas[] = (float) $argv[$contador];
}

$somaDeNotas = 0;
foreach ($notas as $nota) {
    $somaDeNotas += $nota;
}


var_dump($notas);

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";  


if($anoLancamento > 2022){
    echo "Esse filme é um lançamento \n";
} 
elseif($anoLancamento > 2020 && $anoLancamento <= 2022){
    echo "Esse filme ainda é novo \n";
}
else {
    echo "Esse filme NÃO é um lançamento \n";
}

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido"
};

echo "O genero do filme é: $genero \n";

echo $argc . "\n";

var_dump($argv);

$filme = [
    "nome" => "007",
    "ano" => 2021,
    "nota" => 7.2,
    "genero" => "Ação"
];

echo "Nome filme: "  . $filme["nome"] . "\n";
echo "Nome genero: " . $filme["genero"] . "\n";
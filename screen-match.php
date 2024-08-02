<?php

echo "Bem-vindo(a) ao screen match!
";

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Se beber não case";
$nomeFilme = "Thor: Ragnarok";

$anoLancamento = $argv[1] ?? 1991;

$somaDeNotas = 9 + 6 + 8 + 7.5 + 5;
$notaFilme = $somaDeNotas / 5;
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
<?php

$titular = "Marcos Paulo";
$saldo = 1000;

exibirMenu();

do {

//$entrada = readline();
$entrada = (int) fgets(STDIN);

    switch ($entrada) {
        case 1:
            consultaSaldo($titular, $saldo);
            exibirMenu();
            break;
        case 2:
            sacarValor($saldo);
            exibirMenu();
            break;
        case 3:
            depositarValor();
            exibirMenu();
            break;
        case 4:
            sair();
            break;        
        default:
            opcaoNaoDisponivel();
            break;
    }

} while ($entrada != 4);


function exibirMenu(){
    echo "1. Consultar saldo atual \n";
    echo "2. Sacar valor \n";
    echo "3. Depositar valor \n";
    echo "4. Sair \n";
}

function consultaSaldo($titular, $saldo){
    echo "*************** \n";

    echo "Titular: $titular \n";
    echo "Saldo atual: R$ $saldo \n";

    echo "*************** \n";
}

function sacarValor($saldo){
    echo "Qual valor deseja sacar? \n";
    $valorASacar = (float) fgets(STDIN);
    if($valorASacar > $saldo){
        echo "Valor insuficiente! \n";
    } else {
        $saldo -= $valorASacar;
    }

}

function depositarValor(){
    echo "Quanto deseja depositar? \n";
    $valorADepositar = (float) fgets(STDIN);
    $saldo += $valorADepositar;

}

function sair(){
    echo "Sair \n";
}

function opcaoNaoDisponivel(){
    echo "Opção não disponível!";
}


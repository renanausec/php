<?php
function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorASacar): array //array e float aqui são os tipos de variaveis que podem ser recebidos apenas
{
    if($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não tem saldo suficiente para sacar este valor");
    }
    else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar): array
{
    if($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    }
    else {
        exibeMensagem("Depositos devem ter valores positivos");
    }
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta) {
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta (array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo </li>";
}
?>
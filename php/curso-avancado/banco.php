<?php
//require_once é quando vc nao tem certeza se ja foi incluido o arquivo
require_once 'funcoes.php';

$contasCorrentes = [
    '485.541.912-21' => [
        'titular' => 'Maria',
        'saldo' => 5000
    ],
    '123.456.789-10' => [
        'titular' => 'José',
        'saldo' => 3000
    ],
    '123.456.789-11' => [
        'titular' => 'Renan',
        'saldo' => 10000
    ]
];

//adicionar um item em um array associativo
$contasCorrentes['123.456.779-18'] = [
    'titular' => 'Vanessa',
    'saldo' => 4000
];

$contasCorrentes['123.456.779-18'] = sacar(
    $contasCorrentes['123.456.779-18'],
    3900.1
);

$contasCorrentes['123.456.789-10'] = depositar(
    $contasCorrentes['123.456.789-10'],
    100.5
);
unset($contasCorrentes['123.456.789-10']);

titularComLetrasMaiusculas($contasCorrentes['123.456.779-18']);

/*foreach ($contasCorrentes as $cpf => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta; //list() faz uma variavel para nao precisar ficar chamando o array
    exibeMensagem("$cpf - $titular - R$ $saldo");
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Contas Correntes </h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= "{$conta['titular']} - $cpf"; ?></h3>
        </dt>
        <dd>
            <h3> <?= "Saldo: {$conta['saldo']}"; ?></h3>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>
<?php
/*echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
    exibeConta($conta);
}
echo "</ul>"; */
?>
<?php 
$conta1 = [
   'titular' => 'Umbralma',
   'saldo' => 10300
];
 $conta2 = [
    'titular' => 'Aislinn',
    'saldo' => 13000]
    ;
$conta3 = [
    'titular' => 'Asterion',
    'saldo' => 4000
];
 
$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0 ; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes [$i] ['titular'] . PHP_EOL;
}

//FOREACH

foreach ($contasCorrentes as $conta) {

    echo $conta['titular'] . PHP_EOL;
}

$contasCorrentes[12345637811] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];


$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];


foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}

if (500 > $contasCorrentes['123.456.789-11']['saldo']) {
    echo "Você não pode sacar este valor" . PHP_EOL;
} else 
    $contasCorrentes['123.456.789-11']['saldo'] -= 500;

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}

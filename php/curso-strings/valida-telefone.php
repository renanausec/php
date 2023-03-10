<?php
// verificar os dados da validacao no site regex101.com
// validacao de cpf seria: $cpfValido = preg_match('/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$/', $cpf);

$telefones = ['(43) 90000-0000', '(43) 1111-2124', '(55) 94445-4412'];

foreach($telefones as $telefone) {
    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4}-[0-9]{4})$/';
    $telefonevalido = preg_match($regex, $telefone, $correspondencia); //faz a validação pelo regex

    //var_dump($correspondencia); //vai mostrar em array as partes correspondentes de cada numero...
    //...se tiver algo escrito dentro de uma string antes ou depois de qlqr numero ele nao pega

    if($telefonevalido) {
        echo "Telefone válido" . PHP_EOL;
    } else {
        echo "telefone inválido" . PHP_EOL;
    }
    
    echo preg_replace(
        $regex,
        '(XX) \2',
        $telefone
    ) . PHP_EOL;
}
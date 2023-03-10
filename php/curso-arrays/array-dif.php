<?php
$notasBimestre1 = [
    'Renan' => 4,
    'Victor' => 9,
    'Joseph' => 9,
    'Adolfo' => 5,
    'Marcus'=> 7
];

$notasBimestre2 = [
    'Renan' => 10,
    'Victor' => 9,
    'Adolfo' => 5,
];

// para ignorar a chave e mostrar apenas o que não se repete de valores é o array_diff() (as chaves sao ignoradas)
// var_dump(array_diff($notasBimestre1, $notasBimestre2)); 
// para ignorar o valor e ver a chave é o arrya_diff_key()
// var_dump(array_diff_key($notasBimestre1, $notasBimestre2));
// verifica quais os alunos que faltaram e os que tiraram notas diferentes array_diff_assoc()
// var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
//var_dump(array_keys($alunosFaltantes)); //pega as chaves dos faltantes
//var_dump(array_values($alunosFaltantes)); //pega as notas do alunos faltantes

$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos)); // inverte a chave com o valor combinando os 2 arrays novos
<?php

$alunos = array(
    array("Nome" => "Maria", "Curso" => "ADS", "Média" => 7.0, "Situação" => ""),
    array("Nome" => "João", "Curso" => "CD", "Média" => 5.0, "Situação" => ""),
    array("Nome" => "José", "Curso" => "CD", "Média" => 8.0, "Situação" => ""),
    array("Nome" => "Pedro", "Curso" => "ADS", "Média" => 1.5, "Situação" => ""),
    array("Nome" => "Paulo", "Curso" => "ADS", "Média" => 6.0, "Situação" => "")
);

foreach ($alunos as $key => $aluno) {
    if ($aluno["Média"] < 2.0) {
        $alunos[$key]["Situação"] = "Reprovado";
    } elseif ($aluno["Média"] >= 2.0 && $aluno["Média"] < 6.0) {
        $alunos[$key]["Situação"] = "Exame Final";
    } else {
        $alunos[$key]["Situação"] = "Aprovado";
    }
}

echo "<table border='1'>
        <tr>
            <th>Nome</th>
            <th>Curso</th>
            <th>Média</th>
            <th>Situação</th>
        </tr>";
foreach ($alunos as $aluno) {
    echo "<tr>
            <td>{$aluno['Nome']}</td>
            <td>{$aluno['Curso']}</td>
            <td>{$aluno['Média']}</td>
            <td>{$aluno['Situação']}</td>
          </tr>";
}
echo "</table>";

$contagem = array();
foreach ($alunos as $aluno) {
    $curso = $aluno["Curso"];
    $situacao = $aluno["Situação"];
    
    if (!isset($contagem[$curso][$situacao])) {
        $contagem[$curso][$situacao] = 1;
    } else {
        $contagem[$curso][$situacao]++;
    }
}

echo "<br><br>";
foreach ($contagem as $curso => $situacoes) {
    echo "$curso:<br>";
    foreach ($situacoes as $situacao => $quantidade) {
        echo "- $situacao: $quantidade<br>";
    }
}
?>

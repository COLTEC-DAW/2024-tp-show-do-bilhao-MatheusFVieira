<?php
$perguntas = [
    "Quantos países existem no mundo de acordo com a ONU?",
    "Em qual ano o Acre foi comprado pelo Brasil?",
    "Em qual ano a linguagem php foi lançada?",
    "Quem é o homem mais rico do mundo de acordo com a Forbes?",
    "Qual é o nome da divisão celular que gera os gametas?"
];

$alternativas = [
    ["194", "193", "195", "199"],
    ["1905", "1903", "1907", "1908"],
    ["1995", "1994", "1992", "1997"],
    ["Elon Musk", "Bill Gates", "Véio da Havan", "Jeff Bezos"],
    ["Meiose", "Mitose", "Celulose", "Glicose"]
];

$respostasCorretas = [3, 2, 1, 4, 1];

for ($i = 0; $i < count($perguntas); $i++) {
    echo "<h3>Pergunta " . ($i + 1) . ": " . $perguntas[$i] . "</h3>";
    echo "<ul>";
    for ($j = 0; $j < count($alternativas[$i]); $j++) {
        echo "<li>" . ($j + 1) . ": " . $alternativas[$i][$j] . "</li>";
    }
    echo "</ul>";
}
?>
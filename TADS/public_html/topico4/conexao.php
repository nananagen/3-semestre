<?php

$db = new mysli('mariadb','root','root','tads');

$query = 'SELECT nome FROM tads.alunos;';

$result= $db->query($query);

while ($linha = $result->fetch_assoc()) {
    echo "<p> {$linha["id"]} {$linha["nome"]} {$linha["matricula"]} <p>";
}

$db->close();
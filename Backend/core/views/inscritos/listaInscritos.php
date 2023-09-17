<?php

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Inscritos no Vestibular</title>


    <style>
    body,
html {
  font-family: "Muli", sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f2f2f2;
}

header {
  background-color: #127e71;
  color: #ffffff;
  text-align: center;
  padding: 20px 0;
}

h1 {
  font-size: 36px;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  text-align: center;
}

.table-container {
  display: flex;
  flex-direction: column;
  align-items: center;
}

table {
  width: 100%;
  border-collapse: collapse;
  background-color: #fff;
  box-shadow: 0 2px 10px #999;
  margin: 20px 0;
}

th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ccc;
}

th {
  background-color: #127e71;
  color: #ffffff;
}

tr:nth-child(even) {
  background-color: #f4f4f4;
}

tr:hover {
  background-color: #cccccc;
}

@media (max-width: 600px) {
  table {
    font-size: 14px;
  }
}

    </style>


</head>

<body>
    <h1>Lista de Inscritos no Vestibular</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Curso</th>
                <th>Mensagem</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Substitua esta parte com a lógica para buscar os inscritos no banco de dados
            // e exibi-los na tabela
            foreach ($inscritos as $inscrito) {
                echo "<tr>";
                echo "<td>{$inscrito->id}</td>";
                echo "<td>{$inscrito->nome}</td>";
                echo "<td>{$inscrito->telefone}</td>";
                echo "<td>{$inscrito->curso_desejado}</td>";
                echo "<td>{$inscrito->mensagem}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>
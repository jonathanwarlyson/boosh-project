<?php
    $livros = [
        'O Iluminado' => ['autor' => 'Stephen King', 'numdepag' => 510] ,
        'M ou N' => ['autor' => 'Agatha Christie', 'numdepag' => 180] ,
        'Galveston' => ['autor' => 'Desconhecido', 'numdepag' => 280] ,
        'A casa do penhasco' => ['autor' => 'Agatha Christie', 'numdepag' => 240] ,
    ];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOSH!</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h1>Boosh!</h1>
    <p>Essa é a sua estante virtual!</p>
    <table>
        <tr><th>nome</th><th>autor</th><th>núm. de páginas</th><th>status</th></tr>
        <?php foreach ($livros as $name => $data) { ?> 
            <tr>
                <td><?= $name ?></td>
                <td><?= $data['autor'] ?></td>
                <td><?= $data['numdepag'] ?></td>
                <td>NDA</td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
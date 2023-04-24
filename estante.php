<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/estante.css">
    <title>Sua estante</title>
</head>
<body>
     <img src="images/cor2-p.png" class="icon" alt="">
    <div class="container3">
        <h1 class="title">BEM VINDO(A) À SUA ESTANTE!</h1>
        <h2 class="count">VOCÊ POSSUI: 3 LIVROS</h2>
        <div style="overflow-x: auto;position: relative;top: 6em;">
            <table cellspacing="0">
                <thead>
                    <tr>
                        <th>LIVRO</th>
                        <th>AUTOR</th>
                        <th>GÊNERO</th>
                        <th class="endcell">PÁGINAS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>UI Pedia</td>
                        <td>Pixsel Academy</td>
                        <td>Estudo</td>
                        <td class="endcell">626</td>
                    </tr>
                    <tr>
                        <td>PHP & MySQL</td>
                        <td>Jon Duckett</td>
                        <td>Estudo</td>
                        <td class="endcell">660</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <h3 class="plustext">ADICIONE MAIS LIVROS!</h3>
        </div>
        <div class="plus-btn">
            <div class="sym">+</div>
        </div>
    </div>
</body>

<?php include 'includes/footer.php'; ?>
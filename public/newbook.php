<?php 
//PARTE A: Configuração 
 declare(strict_types = 1);
 include 'includes/header.php'; 
 include '../src/bootstrap.php';
 

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); //pega o id validado

//valores que serão necessários para o HTML

$book = [
    'id' => $id,
    'name' => '',
    'author' => '',
    'page' => '',
    'id_genre' => '',
];

$genre = [
    'id' => '',
    'name' => '',
];

$errors = [
    'name' => '',
    'author' => '',
    'page' => '',
    'genre' => '',
];

if ($id)
{
    $book = $cms->getBook()->get($id);
    if (!$book)
    {
        $message = 'Livro não encontrado!';
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $book['name'] = $_POST['name'];
    $book['author'] = $_POST['author'];
    $book['page'] = $_POST['page'];
    $genre['name'] = $_POST['genre']; //merece atenção

    $errors['name'] = (Validate::isText($book['name'], 1, 50)) ? '' : 'Name should be 1-50 characters.';
    $errors['author'] = (Validate::isText($book['author'], 1, 40)) ? '' : 'Author should be 1-30 characters.';
    $errors['page'] = (Validate::isNumber($book['page'], 1, 2500)) ? '' : 'It must be 1-3000.';
    $errors['genre'] = (Validate::isText($genre['name'], 1, 30)) ? '' : 'It must be 1-30 length'; //merece atenção
}
?>

<body>
<img src="images/logocorw-p.png" class="logo" alt="">
<section>
        <div class="container-nl">
            <h2 class="subtitulo-nl">NOVO LIVRO</h2>
            <form action="newbook.php" id="form" method="POST">
                
            <label for="name">NOME DO LIVRO</label>
            <input type="text" name="name" value="<?= html_escape($book['name']) ?>" placeholder="Digite o nome do livro">
            <span class="error"><?= $errors['name']?></span>
                
            <label for="author">NOME DO AUTOR</label>
            <input type="text" name="author" value="<?= html_escape($book['author']) ?>"  placeholder="Digite o nome do autor do livro">
            <span class="error"><?= $errors['author'] ?></span>
                
            <label for="pags">QTD. DE PÁGINAS</label>
            <input type="text" name="page" value="<?= html_escape($book['page']) ?>" placeholder="Ex.: 240">
            <span class="error"><?= $errors['page'] ?></span>
                
            <label for="genero">GÊNERO</label>
            <input type="text" name="genre" value="<?= html_escape($genre['name']) ?>" placeholder="Insira o gênero do livro">
            <span class="error"><?= $errors['genre'] ?></span>
                
            <input type="submit" name="add" value="ADICIONAR" class="submit">
            </form>
        </div>
</section>
</body>

<?php include 'includes/footer.php'; ?>
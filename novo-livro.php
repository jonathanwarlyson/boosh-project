<?php
 declare (strict_types = 1);
 require 'includes/validate.php';
 include 'includes/header.php'; 
 
 $info = [
    'name' => '',
    'author' => '',
    'page' => '',
    'gender' => '',
 ];
 $errors = [
    'name' => '',
    'author' => '',
    'page' => '',
    'gender' => '',
 ];

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $info['name'] = $_POST['name'];
    $info['author'] = $_POST['author'];
    $info['page'] = $_POST['page'];
    $info['gender'] = $_POST['gender'];

    $errors['name'] = is_text($info['name'], 4, 50) ? '' : 'Must be 4 - 50 characters!';
    $errors['author'] = is_text($info['author'], 4, 35) ? '' : 'Must be 4 - 35 characters!';
    $errors['page'] = is_number($info['page'], 1, 10000) ? '' : 'Must be 1 - 10000 pages!';
    $errors['gender'] = isset($info['gender']) && $info['gender'] !== '' ? '' : 'Please select a gender.';
    
    $invalid = implode($errors);
    if ($invalid) {
        $message = 'Please correct the following errors:';
    } else {

    }
}
?>

<body>
<?= $message ?>
<img src="images/logocorw-p.png" class="logo" alt="">
<section>
        <div class="container-nl">
            <h2 class="subtitulo-nl">NOVO LIVRO</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form" method="POST">
                <label for="nome">NOME DO LIVRO</label>
                <input type="text" name="name" value="<?= htmlspecialchars($info['name']) ?>" placeholder="Digite o nome do livro">
                <span class="error"><?= $errors['name'] ?></span>
                <label for="autor">NOME DO AUTOR</label>
                <input type="text" name="author" value="<?= htmlspecialchars($info['author']) ?>" placeholder="Digite o nome do autor do livro">
                <span class="error"><?= $errors['author'] ?></span>
                <label for="pags">QTD. DE PÁGINAS</label>
                <input type="text" name="page" value="<?= htmlspecialchars($info['page']) ?>" placeholder="Ex.: 240">
                <span class="error"><?= $errors['page'] ?></span>
                <label for="genero">GÊNERO</label>
                <select name="gender" value="<?= htmlspecialchars($info['gender']) ?>" required>
                    <option value="" disabled selected hidden >Selecione um gênero</option>
                    <option value="action">Ação e aventura</option>
                    <option value="biografy">Biografia</option>
                    <option value="conto">Conto</option>
                    <option value="thriller">Distopia</option>
                    <option value="drama">Drama</option>
                    <option value="fantasy">Fantasia</option>
                    <option value="cientific">Ficção cientifica</option>
                    <option value="graphic">Graphic novel</option>
                    <option value="horror">Horror</option>
                    <option value="kids">Infantil</option>
                    <option value="nonfiction">Não Ficção</option>
                    <option value="poem">Poesia</option>
                    <option value="romance">Romance</option>
                    <option value="police">Romance policial</option>
                    <option value="thriller">Thriller e suspense</option>
                </select>
                <span class="error"><?= $errors['gender'] ?></span>
                
                <input type="submit" name="add" value="ADICIONAR" class="submit" value="Submit">
            </form>
        </div>
</section>
<div class="container-add" id="modal">
    <div class="modal-content">
        <h1 class="titulo-add">VOCÊ ADICIONOU UM LIVRO NA SUA ESTANTE!</h1>
        <h2 class="access-text">ACESSE JÁ SUA ESTANTE!</h2>
        <div class="add-button">IR PARA ESTANTE</div>
    </div>
</div>
<script src="javascript/script.js"></script>
</body>

<?php include 'includes/footer.php'; ?>
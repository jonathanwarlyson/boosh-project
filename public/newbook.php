<?php 
 include 'includes/header.php'; 
?>

<body>
<img src="images/logocorw-p.png" class="logo" alt="">
<section>
        <div class="container-nl">
            <h2 class="subtitulo-nl">NOVO LIVRO</h2>
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="form" method="POST">
                
            <label for="nome">NOME DO LIVRO</label>
                <input type="text" name="name"  placeholder="Digite o nome do livro">
                
                <label for="autor">NOME DO AUTOR</label>
                <input type="text" name="author" placeholder="Digite o nome do autor do livro">
                
                <label for="pags">QTD. DE PÁGINAS</label>
                <input type="text" name="page"  placeholder="Ex.: 240">
                
                <label for="genero">GÊNERO</label>
                <select name="gender"  required>
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
                
                <input type="submit" name="add" value="ADICIONAR" class="submit">
            </form>
        </div>
</section>
</body>

<?php include 'includes/footer.php'; ?>
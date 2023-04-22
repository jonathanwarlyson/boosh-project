<?php include 'includes/header.php'; ?>

<body>
<img src="images/logocorw-p.png" class="logo" alt="">
<section>
        <div class="container-nl">
            <h2 class="subtitulo-nl">NOVO LIVRO</h2>
            <form>
                <label for="nome">NOME DO LIVRO</label>
                <input type="text" name="nome" placeholder="Digite o nome do livro">
                <label for="autor">NOME DO AUTOR</label>
                <input type="text" name="autor" placeholder="Digite o nome do autor do livro">
                <label for="genero">GÊNERO</label>
                <select name="genero" id="gender" required>
                    <option value="" disabled selected hidden >Selecione um gênero</option>
                    <option value="policial">Romance policial</option>
                    <option value="romance">Romance</option>
                    <option value="fantasia">Fantasia</option>
                    <option value="thriller">Thriller e suspense</option>
                    <option value="cientifica">Ficção Cientifica</option>
                    <option value="distopia">Distopia</option>
                    <option value="acav">Ação e aventura</option>
                    <option value="Horror">Horror</option>
                    <option value="novel">Graphic novel</option>
                    <option value="poema">Poesia</option>
                    <option value="conto">Conto</option>
                    <option value="drama">Drama</option>
                    <option value="biografia">Biografia</option>
                    <option value="infantil">Infantil</option>
                    <option value="nonfiction">Não ficção</option>
                </select>
                <label for="pags">QTD. DE PÁGINAS</label>
                <input type="text" name="pags" placeholder="Ex.: 240">
                <input type="submit" name="add" value="ADICIONAR" class="submit">
            </form>
        </div>
</section>
</body>

<?php include 'includes/footer.php'; ?>
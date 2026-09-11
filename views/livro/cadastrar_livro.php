<?php
require_once  __DIR__ . "/../../templates/_cabecalho.php"
?>
    <main class="main-detalhe">
        <form action="#" method="POST" enctype="multipart/form-data">

            <div class="form-item">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" required>
            </div>

            <div class="form-item">
                <label for="ano">Ano de publicação</label>
                <input type="text" name="ano" id="ano" required>
            </div>

            <div class="form-item">
                <label for="autor">Autor</label>
                <input type="text" name="autor" id="autor" required>
            </div>

            <div class="form-item">
                <label for="resumo">Resumo da publicação</label>
                <textarea name="resumo" id="resumo" rows="5"></textarea>
            </div>

            <div class="form-item">
                <label for="categoria">Categoria do livro</label>
                <select name="categoria" id="categoria" required>
                    <option value="cat1">Categoria 1</option>
                    <option value="cat2">Categoria 2</option>
                </select>
            </div>

            <div class="form-item">
                <label for="capa">Capa do livro</label>
                <input type="file" id="capa" name="capa" accept="image/*">
            </div>

            <button type="submit">Cadastrar</button>

        </form>
    </main>
    <?php
require_once  __DIR__ . "/../../templates/_rodape.php"
    ?>
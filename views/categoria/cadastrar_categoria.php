<?php
require_once __DIR__ . "/../../templates/_cabecalho.php"
?>
    <main class="main-detalhe">
        <form action="#" method="POST">
            <div class="form-item">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <button type="submit">Cadastrar</button>
        </form>
    </main>
    <?php
require_once "/../../templates/_rodape.php"
    ?>
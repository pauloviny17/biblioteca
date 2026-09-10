<?php
require_once  __DIR__ . "/../../templates/_cabecalho.php"
?>
    <main>
        <h1>Cadastro</h1>

        <form action="#" method="POST" enctype="multipart/form-data">

            <div class="form-item">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
            </div>

            <div class="form-item">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>
            </div>

            <div class="form-item">
                <label for="perfil">Foto de Perfil</label>
                <input type="file" id="perfil" name="perfil" accept="image/*">
            </div>

            <div class="botoes">
                <button type="submit">Cadastrar</button>
            </div>

        </form>
    </main>
    <?php
require_once  __DIR__ . "/../../templates/_rodape.php"
    ?>
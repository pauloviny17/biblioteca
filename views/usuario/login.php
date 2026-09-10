<?php
require_once  __DIR__ . "/../../templates/_cabecalho.php"
?>
    <main class="main-detalhe">
        <form id="loginForm">
            <div class="form-item">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-item">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" required>
                <img src="imgs/visibility_lock.png" alt="Mostrar senha" id="iconeOlho">
            </div>
            <div class="botoes">
                <button type="button">Esqueci minha senha</button>
                <button type="submit">Entrar</button>
            </div>
        </form>
    </main>
    <?php
require_once  __DIR__ . "/../../templates/_rodape.php"
    ?>
<?php
require_once  __DIR__ . "/templates/_cabecalho.php";
$conn = new PDO("mysql:host=localhost;dbname=biblioteca;charset=utf8mb4", "root","");
$query = "SELECT * FROM livro";
$resultado = $conn->query($query)->fetchAll();
echo "<pre>";
var_dump($resultado);
echo"</pre>";
?>
    <main>
        <img src="https://picsum.photos/900/300" alt="Banner" id="jumbo">
        <h1>Biblioteca</h1>

        <div class="card-container">
            <?php foreach($resultado as $livro): ?>
            <a href="/biblioteca/views/livro/detalhes.php"><div class="card"><div class="card-img"><?php if($livro['capa']==null): ?><img src="/biblioteca/imgs/capas/generica.png" alt=""><?php else: ?><img src="/biblioteca/imgs/capas/uploads/<?=  $livro['capa'] ?>" alt""></div><div class="card-text"><h2><?=  $livro['titulo'] ?></h2></div></div></a><?php endforeach; ?>

        </div>
    </main>
    <?php
require_once  __DIR__ . "/templates/_rodape.php"
    ?>

  
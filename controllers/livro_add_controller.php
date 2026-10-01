<?php
require_once __DIR__ . "/../models/livro.php";

$titulo= $_POST['titulo'];
$ano_pub = $_POST['ano_pub'];
$autor = $_POST['autor'];
$resumo = $_POST['resumo'];
$id_categoria = $_POST['categoria'];



if(!empty($_FILES['foto']['name'])) {

    $foto = $_FILES['foto'];
    $extensao = strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));
    $nomedafoto = uniqid() . '.' . $extensao;
    $caminho = __DIR__ . "/../imgs/capas/uploads/" . $nomedafoto;
    move_uploaded_file($foto['tmp_name'], $caminho);
} else {
    $foto = null;
}
$livro = New livro();
$livro->inserir($titulo, $ano_pub, $autor, $resumo, $foto, $id_categoria);
header('Location: /biblioteca/views/livro/gerenciar_livros.php');
exit();

<?php
require_once __DIR__ . "/../models/livro.php";
session_start();

$titulo= $_POST['titulo'];
$ano_pub = $_POST['ano'];
$autor = $_POST['autor'];
$resumo = $_POST['resumo'];
$id_categoria = $_POST['categoria'];

if(!empty($_FILES['capa']['name'])) {

    $foto = $_FILES['capa'];
    $extensao = strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));
    $nomedafoto = uniqid() . '.' . $extensao;
    $caminho = __DIR__ . "/../imgs/capas/uploads/" . $nomedafoto;
    move_uploaded_file($foto['tmp_name'], $caminho);

} else {
    $nomedafoto = null;
}
$livro = New livro();
$livro->inserir($titulo, $ano_pub, $autor, $resumo, $nomedafoto, $id_categoria);
header('Location: /biblioteca/views/livro/gerenciar_livros.php');
exit();

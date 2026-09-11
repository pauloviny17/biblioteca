CREATE DATABASE IF NOT EXISTS BILIOTECA;
USE biblioteca;
Create table if not exists categoria (
    id_categoria INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) not null unique 
);
Create table if not exists livro (
    id_livro INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) not null,
    ano_pub VARCHAR(4),
    autor VARCHAR(255),
    RESUMO TEXT,
    CAPA VARCHAR(255),
    id_categoria INT,
    FOREIGN KEY (id_categoria) references categoria (id_categoria)
);
Create table if not exists usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) not null,
    email VARCHAR(255) not null unique,
    nsenha VARCHAR(255) not null,
    foto VARCHAR(255)
);
-- seed
insert into categoria (nome) Values ("romance"), ("Terror"),("Fantasia");
Insert into livro (titulo, ano_pub, autor,resumo,id_categoria) values ("Orgulho e Preconceito", "1813", "Jane Austen", "Lorem Ipsum", 1), ("IT: A Coisa", "1986", "Stephen King", "Lorem Ipsum",2), ("Harry Potter e a Pedra Filosofal", "1997", "J.k.Rowling", "Lorem Ipsum",3)
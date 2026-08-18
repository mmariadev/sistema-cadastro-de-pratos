CREATE DATABASE sistema_cadastro_pratos;
USE sistema_cadastro_pratos;

CREATE TABLE usuario (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome_usuario VARCHAR(100) NOT NULL,
    email_usuario VARCHAR(100) NOT NULL
);

CREATE TABLE pratos (
    id_pratos INT AUTO_INCREMENT PRIMARY KEY,
    nome_pratos VARCHAR(100) NOT NULL,
    descricao_pratos VARCHAR(200) NOT NULL,
    preco_pratos DECIMAL(10,2) NOT NULL,
    categoria_pratos ENUM('Entrada', 'Prato principal', 'Sobremesa'),
    usuario_id INT NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuario(id_usuario)
);
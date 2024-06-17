CREATE DATABASE senaiflix_arthur;
USE senaiflix_arthur;
CREATE TABLE clientes (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
cpf VARCHAR(11) NOT NULL,
endereco VARCHAR(255),
bairro VARCHAR(100),
cidade VARCHAR(100),
estado VARCHAR(2),
cep VARCHAR(8),
email VARCHAR(100),
telefone VARCHAR(15),
data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP,
data_atualizacao DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
status INT(1)
);
CREATE TABLE filmes (
id INT AUTO_INCREMENT PRIMARY KEY,
titulo VARCHAR(255) NOT NULL,
descricao TEXT,
ano_lancamento DATE,
genero VARCHAR(100),
classificacao VARCHAR(10),
data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP,
data_atualizacao DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
status INT(1)
);
CREATE TABLE assinaturas (
id INT AUTO_INCREMENT PRIMARY KEY,
id_cliente INT,
plano VARCHAR(50),
data_inicio DATE,
data_fim DATE,
data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP,
data_atualizacao DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
status INT(1),
FOREIGN KEY (id_cliente) REFERENCES clientes(id)
);
CREATE TABLE usuarios (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(255) NOT NULL,
usuario VARCHAR(50) UNIQUE NOT NULL,
senha VARCHAR(255) NOT NULL,
email VARCHAR(100) UNIQUE NOT NULL,
data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP,
data_atualizacao DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
status INT(1)
);
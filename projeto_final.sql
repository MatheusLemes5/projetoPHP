USE loja;

CREATE TABLE usuario (
codusuario INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(40) NOT NULL,
password VARCHAR(15) NOT NULL, 
nome VARCHAR(40) NOT NULL
);

CREATE TABLE admin (
codadmin INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(40) NOT NULL,
password VARCHAR(15) NOT NULL,
nome VARCHAR(40) NOT NULL);

CREATE TABLE veiculo (
codveiculo INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
imagem longblob NOT NULL,
ano INT(5) NOT NULL,
marca VARCHAR(20),
modelo VARCHAR(20),
quilometragem int,
adicionais VARCHAR(20),
valor int,
contato VARCHAR(20)
FOREIGN KEY (codadmin) REFERENCES admin(codadmin)
);

CREATE TABLE carrinho (
codcarrinho INT(8) UNSIGNED AUTO_INCREMENT,
codusuario INT(8) UNSIGNED,
codadmin INT(8) UNSIGNED,
codveiculo INT(8) UNSIGNED,
FOREIGN KEY (codusuario) REFERENCES usuario(codusuario),
FOREIGN KEY (codveiculo) REFERENCES veiculo(codveiculo),
FOREIGN KEY (codadmin) REFERENCES admin(codadmin)
);

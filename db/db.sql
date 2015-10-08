CREATE DATABASE ecommerce;
 
CREATE TABLE categorias (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	categoria VARCHAR(50)
);

CREATE TABLE produtos (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	produto VARCHAR(100),
	categoria_id INT UNSIGNED,
	preco DOUBLE,
	FOREIGN KEY (categoria_id) REFERENCES 
		categorias(id)
);

INSERT INTO categorias(categoria) VALUES
('Informática'),
('Livros'),
('Games');

INSERT INTO produtos (produto, categoria_id, preco) VALUES
('Notebook', 1, 2500),
('Desktop', 1, 3000),
('Impressora', 1, 1000),
('Cake PHP Cookbook', 2, 60),
('Aprendendo MySQL', 2, 80),
('PHP avançado', 2, 100);
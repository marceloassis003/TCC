

CREATE TABLE proprietario (
	cnpj INT(15) PRIMARY KEY,
	idLogin int not null, --FK login
	nome VARCHAR(50),
	telefone INT(30),
	email VARCHAR(50),  
	FOREIGN KEY (idLogin)
	REFERENCES login(idLogin)
	);

CREATE TABLE funcionario (
	idFunc INT PRIMARY KEY AUTO_INCREMENT, 
	idLogin INT not null, --fk login
	cnpj INT(15) not null, --fk proprietario
	nome VARCHAR(50),
	telefone INT(30), 
	email VARCHAR(50),
	FOREIGN KEY(idLogin) 
	REFERENCES login(idLogin),
	FOREIGN KEY(cnpj)
	REFERENCES proprietario(cnpj)
	);

CREATE TABLE login (
	idLogin INT PRIMARY KEY AUTO_INCREMENT,
	usuario VARCHAR (20),
	senha VARCHAR(10) 
	);

CREATE TABLE relatorios (
	codRelatorios INT PRIMARY KEY AUTO_INCREMENT,
	cnpj INT(15) not null, --fk porprietario
	conteudo VARCHAR(200), 
	FOREIGN KEY(cnpj)
	REFERENCES proprietario(cnpj)
	);



	INSERT INTO proprietario(cpnj, idLogin, nome, telefone, email) VALUES('39247982000156', '1', 'janaina','40028922','raingate@gmail.com');


	SELECT * FROM 'proprietario' WHERE usuario = "valor1" and senha = "valor2"



	
	INSERT INTO login(usuario, senha) VALUES('admin','1234');
	INSERT INTO login(usuario, senha) VALUES('func','4321');

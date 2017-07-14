CREATE DATABASE eventos;

use eventos;

CREATE TABLE usuario(
	id_usuario INT AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR(40) NOT NULL UNIQUE,
	senha VARCHAR(40) NOT NULL
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

CREATE TABLE evento(
	id_evento INT AUTO_INCREMENT PRIMARY KEY,
	id_usuario INT NOT NULL REFERENCES usuario(id_usuario),
	nome VARCHAR(60) NOT NULL,
	endereco VARCHAR(60) NOT NULL,
	responsavel VARCHAR(60) NOT NULL,
	logo VARCHAR(60) NOT NULL,
	status_evento BOOL NOT NULL,
	data_evento DATE NOT NULL
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO usuario VALUES (DEFAULT,'usuario@servidor.com','12345');

INSERT INTO evento VALUES (DEFAULT,1,'Lançamento de Livro','Rua das Flores','José','logo.jpg',true,'2016-01-30');
INSERT INTO evento VALUES (DEFAULT,1,'Inauguração de Loja','Rua das Vitoria','José','logo.jpg',false,'2016-04-30');
INSERT INTO evento VALUES (DEFAULT,1,'Lançamento de Revista','Rua das Alegrias','Paulo','logo.jpg',false,'2016-02-02');
INSERT INTO evento VALUES (DEFAULT,1,'Lançamento de Carro','Rua das Flores','Maria','logo.jpg',true,'2016-12-30');
INSERT INTO evento VALUES (DEFAULT,1,'Festa','Rua das Flores','José','logo.jpg',false,'2016-05-30');
INSERT INTO evento VALUES (DEFAULT,1,'Ferias coletiva','Rua das Flores','José','logo.jpg',true,'2016-07-30');

/**Listar todos eventos por data de eventos por ondem de data.*/
SELECT * FROM evento ORDER BY data_evento.
/**Listar os eventos que não ocorreram por ordem de data.*/
SELECT * FROM evento WHERE status_evento = true AND data_evento < "2016-05-21" ORDER BY data_evento;

UPDATE evento SET nome = "Balionia", endereco = "x", reponsavel = "x", logo = "x", status_evento = 0, data_evento = "1900-01-01" where id_evento = 7;

SELECT * FROM usuario WHERE email = 'usuario@servidor.com' AND senha = '12345';

SELECT id_usuario FROM usuario WHERE email = 'usuario@servidor.com' AND senha = '12345';


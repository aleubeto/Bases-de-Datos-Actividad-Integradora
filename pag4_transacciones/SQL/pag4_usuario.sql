CREATE TABLE IF NOT EXISTS pag4_usuario (
    idUsuario INT(11) NOT NULL AUTO_INCREMENT,
    usuario VARCHAR(100) DEFAULT NULL,
    saldo INT(11) NOT NULL,
    PRIMARY KEY(idUsuario)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

INSERT INTO pag4_usuario (usuario, saldo) VALUES
("Alejandro Ubeto", 1000),
("Iker Guerero", 1500),
("Oscar Ramirez", 1250),
("Francisco Rocha", 1000),
("Juan Carlos Llanos", 2000);
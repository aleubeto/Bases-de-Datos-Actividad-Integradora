CREATE TABLE IF NOT EXISTS pag4_transaccion (
    idTransaccion INT(11) NOT NULL AUTO_INCREMENT,
    monto INT(11) NOT NULL,
    fecha DATETIME DEFAULT NULL,
    idRemitente INT(11) NOT NULL,
    idDestinatario INT(11) NOT NULL,
    PRIMARY KEY(idTransaccion),
    FOREIGN KEY(idRemitente)
        REFERENCES pag4_usuario(idUsuario)
        ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY(idDestinatario)
        REFERENCES pag4_usuario(idUsuario)
        ON UPDATE CASCADE ON DELETE RESTRICT,
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
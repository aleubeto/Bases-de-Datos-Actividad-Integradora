CREATE TABLE IF NOT EXISTS pag2_registro (
    idRegistro INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) DEFAULT NULL,
    apellidos VARCHAR(100) DEFAULT NULL,
    semestre INT(11) DEFAULT NULL,
    restriccion VARCHAR(2) DEFAULT NULL,
    idCarrera INT(11) NOT NULL,
    idCampus INT(11) NOT NULL,
    PRIMARY KEY(idRegistro),
    FOREIGN KEY(idCarrera)
        REFERENCES pag2_carrera(idCarrera)
        ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY(idCampus)
        REFERENCES pag2_campus(idCampus)
        ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
CREATE TABLE IF NOT EXISTS pag2_campus (
    idCampus INT(11) NOT NULL AUTO_INCREMENT,
    campus VARCHAR(20) DEFAULT NULL,
    PRIMARY KEY(idCampus)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

INSERT INTO pag2_campus (campus) VALUES
    ("Tampico"),
    ("Queretaro"),
    ("Puebla"),
    ("Cuernavaca"),
    ("Hidalgo"),
    ("Toluca");
CREATE TABLE IF NOT EXISTS pag2_carrera (
    idCarrera INT(11) NOT NULL AUTO_INCREMENT,
    carrera VARCHAR(5) DEFAULT NULL,
    PRIMARY KEY(idCarrera)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

INSERT INTO pag2_carrera (carrera) VALUES
    ("ITC"),
    ("IRS"),
    ("LAD"),
    ("IBT"),
    ("ARQ"),
    ("LRI"),
    ("IDM"),
    ("IC");
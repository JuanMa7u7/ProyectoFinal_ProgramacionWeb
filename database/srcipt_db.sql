DROP TABLE IF EXISTS
    `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios`(
    `numControl` VARCHAR(8) NOT NULL,
    `password` VARCHAR(10) NOT NULL,
    `rol_id` INT(8) NOT NULL,
    `nombre` VARCHAR(50) NOT NULL,
    `ApPaterno` VARCHAR(50) NOT NULL,
    `ApMaterno` VARCHAR(50) NOT NULL,
    PRIMARY KEY(`numControl`)
) ENGINE = MyISAM AUTO_INCREMENT = 4 DEFAULT CHARSET = latin1;

INSERT INTO `usuarios` (`numControl`, `password`, `rol_id`,`nombre`, `ApPaterno`, `ApMaterno`) VALUES
('11231695', '12345', 1,'Pedro','Godinez','Gonzales'), --Usuario de un profesor
('16241095', '12345', 2,'Diego','Valadez','Olmos'); --Usuario de un alumno
COMMIT;
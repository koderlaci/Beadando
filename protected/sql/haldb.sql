Táblaszerkezetek

CREATE TABLE `haldb`.`halak` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `halnev` VARCHAR(64) NOT NULL , `haltap` VARCHAR(64) NOT NULL , `szarmazas` VARCHAR(64) NOT NULL , `halfaj` VARCHAR(64) NOT NULL , `szin` VARCHAR(64) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `haldb`.`tap` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `tapnev` VARCHAR(64) NOT NULL , `lejaratidatum` DATE NOT NULL , `izesites` VARCHAR(64) NOT NULL , `allag` VARCHAR(64) NOT NULL , `ar` INT(64) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

halak tábla adatok

INSERT INTO `halak` (`id`, `halnev`, `haltap`, `szarmazas`, `halfaj`, `szin`) VALUES
(1, 'Bajszos Harcsa', 'Gombás', 'Európa', 'Harcsaféle', 'Barna'),
(2, 'Szürke Ponty', 'Gombás', 'Európa', 'Pontyféle', 'Szürke'),
(3, 'Sebes Pisztráng', 'Kolbászos', 'Izland', 'Lazacféle', 'Pöttyös'),
(4, 'Bohóchal', 'Sajtos', 'Vörös-tenger', 'Sügéralakú', 'Narancssárga'),
(5, 'Fehér Cápa', 'Kolbászos', 'Nyílt víz', 'Porcos hal', 'Fehér');

tap tábla adatok

INSERT INTO `tap` (`id`, `tapnev`, `lejaratidatum`, `izesites`, `allag`, `ar`) VALUES
(1, 'Aquario', '2025-11-01', 'Kolbászos', 'Lágy', '1000'),
(2, 'YOYO', '2023-06-12', 'Gombás', 'Kemény', '2000'),
(3, 'Tetra Pro', '2021-05-04', 'Sajtos', 'Ropogós', '2500')

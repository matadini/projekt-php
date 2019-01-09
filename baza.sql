CREATE TABLE `uzytkownicy` (
  `uzytkownik_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) CHARACTER SET latin1 NOT NULL,
  `haslo` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`uzytkownik_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

CREATE TABLE `pacjenci` (
  `pacjent_id` int(11) NOT NULL AUTO_INCREMENT,
  `imie` varchar(100) NOT NULL,
  `nazwisko` varchar(100) NOT NULL,
  `pesel` varchar(11) NOT NULL,
  `plec` varchar(1) NOT NULL,
  `data_urodzenia` varchar(100) NOT NULL,
  PRIMARY KEY (`pacjent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

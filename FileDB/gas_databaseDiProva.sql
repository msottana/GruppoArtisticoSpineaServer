-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Lug 04, 2015 alle 10:27
-- Versione del server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gas_database`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `carosello`
--

CREATE TABLE IF NOT EXISTS `carosello` (
`idCarosello` int(11) NOT NULL,
  `Immagine` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `eventi`
--

CREATE TABLE IF NOT EXISTS `eventi` (
`idEventi` int(11) NOT NULL,
  `Titolo` varchar(45) NOT NULL,
  `Descrizione` text NOT NULL,
  `Luogo` varchar(45) DEFAULT NULL,
  `DataInizio` date NOT NULL,
  `DataFine` date DEFAULT NULL,
  `Immagine` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `eventi_has_quadri`
--

CREATE TABLE IF NOT EXISTS `eventi_has_quadri` (
  `Eventi_idEventi` int(11) NOT NULL,
  `Quadri_idQuadri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `gruppo`
--

CREATE TABLE IF NOT EXISTS `gruppo` (
`idGruppo` int(11) NOT NULL,
  `Foto` varchar(45) NOT NULL,
  `Descrizione` text NOT NULL,
  `Indirizzo` varchar(45) DEFAULT NULL,
  `NumeroTel` varchar(45) DEFAULT NULL,
  `Mail` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `pittori`
--

CREATE TABLE IF NOT EXISTS `pittori` (
`idPittori` int(11) NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `Cognome` varchar(45) NOT NULL,
  `Descrizione` text,
  `AutoreDescrizione` varchar(45) DEFAULT NULL,
  `Foto` varchar(45) NOT NULL,
  `Indirizzo` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Mail` varchar(45) DEFAULT NULL,
  `Facebook` varchar(100) DEFAULT NULL,
  `Twitter` varchar(45) DEFAULT NULL,
  `Google+` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `pittori`
--

INSERT INTO `pittori` (`idPittori`, `Nome`, `Cognome`, `Descrizione`, `AutoreDescrizione`, `Foto`, `Indirizzo`, `Telefono`, `Mail`, `Facebook`, `Twitter`, `Google+`) VALUES
(1, 'Sergio', 'Vozza', 'Artista dal portato gradevole, sia per quanto riguarda la forma e sia per quanto concerne l’uso del colore, Sergio si caratterizza per una serie di opere segnate da un evidente, ma oltremodo originale, richiamo alle matrici surrealistiche e metafisiche. Attraverso queste due accezioni stilistiche, l’autore, da felice ed intuitivo autodidatta, è riuscito ad elaborare, nel corso degli anni, un proprio linguaggio, caratterizzato da visioni immaginifiche, ma non prive di una certa adesione al realismo contemporaneo. Fra architetture classiche, scene di vita quotidiana, strutture inverosimili, si sviluppano diversi soggetti spesso resi bidimensionalmente, ma sempre dipinti in modo tale da accentuare la semplicità di ogni singolo elemento strutturale. Ogni particolare di qualsiasi quadro è reso accuratamente, nulla è lasciato al caso; protagonista indiscusso è inoltre il colore, concepito come una sorta di materia da spalmare delicatamente, senza che possa urtare con gli stessi soggetti o con le architetture raffigurate. I temi scelti sono la chiara espressione dei sentimenti provati dall’artista, il quale riesce, attraverso i propri occhi e la propria mente, ad evocare l’universo circostante, caratterizzato spesso da una esasperante quotidianità; ma in ognuno dei lavori è anche possibile percepire una altra dimensione in cui a primeggiare sono la fantasia e l’incanto.', 'Luigi Fusco', 'img/sergiovozza/foto_sergio.jpg', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `pittori_has_eventi`
--

CREATE TABLE IF NOT EXISTS `pittori_has_eventi` (
  `Pittori_idPittori` int(11) NOT NULL,
  `Eventi_idEventi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `quadri`
--

CREATE TABLE IF NOT EXISTS `quadri` (
`idQuadri` int(11) NOT NULL,
  `Titolo` varchar(45) NOT NULL,
  `NumeroPosti` int(11) NOT NULL,
  `Descrizione` text,
  `Immagine` varchar(45) NOT NULL,
  `Recente` tinyint(1) NOT NULL,
  `Pittori_idPittori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carosello`
--
ALTER TABLE `carosello`
 ADD PRIMARY KEY (`idCarosello`);

--
-- Indexes for table `eventi`
--
ALTER TABLE `eventi`
 ADD PRIMARY KEY (`idEventi`);

--
-- Indexes for table `eventi_has_quadri`
--
ALTER TABLE `eventi_has_quadri`
 ADD PRIMARY KEY (`Eventi_idEventi`,`Quadri_idQuadri`), ADD KEY `fk_Eventi_has_Quadri_Quadri1_idx` (`Quadri_idQuadri`), ADD KEY `fk_Eventi_has_Quadri_Eventi1_idx` (`Eventi_idEventi`);

--
-- Indexes for table `gruppo`
--
ALTER TABLE `gruppo`
 ADD PRIMARY KEY (`idGruppo`);

--
-- Indexes for table `pittori`
--
ALTER TABLE `pittori`
 ADD PRIMARY KEY (`idPittori`);

--
-- Indexes for table `pittori_has_eventi`
--
ALTER TABLE `pittori_has_eventi`
 ADD PRIMARY KEY (`Pittori_idPittori`,`Eventi_idEventi`), ADD KEY `fk_Artisti_has_Eventi_Eventi1_idx` (`Eventi_idEventi`), ADD KEY `fk_Artisti_has_Eventi_Artisti1_idx` (`Pittori_idPittori`);

--
-- Indexes for table `quadri`
--
ALTER TABLE `quadri`
 ADD PRIMARY KEY (`idQuadri`,`Pittori_idPittori`), ADD KEY `fk_Quadri_Artisti_idx` (`Pittori_idPittori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carosello`
--
ALTER TABLE `carosello`
MODIFY `idCarosello` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eventi`
--
ALTER TABLE `eventi`
MODIFY `idEventi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gruppo`
--
ALTER TABLE `gruppo`
MODIFY `idGruppo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pittori`
--
ALTER TABLE `pittori`
MODIFY `idPittori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `quadri`
--
ALTER TABLE `quadri`
MODIFY `idQuadri` int(11) NOT NULL AUTO_INCREMENT;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `eventi_has_quadri`
--
ALTER TABLE `eventi_has_quadri`
ADD CONSTRAINT `fk_Eventi_has_Quadri_Eventi1` FOREIGN KEY (`Eventi_idEventi`) REFERENCES `eventi` (`idEventi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Eventi_has_Quadri_Quadri1` FOREIGN KEY (`Quadri_idQuadri`) REFERENCES `quadri` (`idQuadri`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `pittori_has_eventi`
--
ALTER TABLE `pittori_has_eventi`
ADD CONSTRAINT `fk_Artisti_has_Eventi_Artisti1` FOREIGN KEY (`Pittori_idPittori`) REFERENCES `pittori` (`idPittori`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Artisti_has_Eventi_Eventi1` FOREIGN KEY (`Eventi_idEventi`) REFERENCES `eventi` (`idEventi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `quadri`
--
ALTER TABLE `quadri`
ADD CONSTRAINT `fk_Quadri_Artisti` FOREIGN KEY (`Pittori_idPittori`) REFERENCES `pittori` (`idPittori`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

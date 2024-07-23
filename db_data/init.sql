SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS mydatabase;
USE mydatabase;

CREATE TABLE IF NOT EXISTS `filiere` (
  `NomF` VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL,
  `description` VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`NomF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert data into the `filiere` table
INSERT INTO `filiere` (`NomF`, `description`) VALUES ('LI1', 'info');
INSERT INTO `filiere` (`NomF`, `description`) VALUES ('LI2', 'info');
INSERT INTO `filiere` (`NomF`, `description`) VALUES ('LI3', 'info');

CREATE TABLE IF NOT EXISTS `etudiant` (
  `matricule` VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL,
  `nom` VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL,
  `prenom` VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL,
  `adresse` VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL,
  `date_naissance` DATE NOT NULL,
  `email` VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL,
  `filiere` VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`matricule`),
  KEY `filiere` (`filiere`),
  CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`filiere`)
    REFERENCES `filiere` (`NomF`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `etudiant` (`matricule`, `nom`, `prenom`, `adresse`, `date_naissance`, `email`, `filiere`) VALUES 
('1254', 'rayen', 'belkahla', 'teboulba', '2002-02-02', 'rayen@yahoo.fr', 'LI2');

COMMIT;

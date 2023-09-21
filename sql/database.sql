CREATE DATABASE IF NOT EXISTS GARAGEVPARROT;

CREATE TABLE IF NOT EXISTS EMPLOYES (
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    NOM VARCHAR(32),
    PRENOM VARCHAR(32),
    EMAIL VARCHAR(128) UNIQUE NOT NULL,
    MDP VARCHAR(256) NOT NULL,
    ADMINISTRATEUR BOOLEAN NOT NULL,
    ROLE VARCHAR(32) NOT NULL
);

CREATE TABLE IF NOT EXISTS VOITURES (
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    MARQUE VARCHAR(32) NOT NULL,
    MODELE VARCHAR(32) NOT NULL,
    ANNEE SMALLINT NOT NULL,
    ENERGIE VARCHAR(32) NOT NULL,
    TRANSMISSION VARCHAR(32) NOT NULL,
    MOTORISATION VARCHAR(64) NOT NULL,
    PRIX INT NOT NULL,
    KILOMETRAGE INT NOT NULL,
    PORTES INT NOT NULL,
    PLACES INT NOT NULL,
    COULEUR VARCHAR(32) NOT NULL,
    CVFISC INT NOT NULL,
    CVR INT NOT NULL
);


CREATE TABLE IF NOT EXISTS TYPES_VEHICULES (
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    LIBELLE VARCHAR(32) NOT NULL,
    VOITURE_ID INT NOT NULL,
    FOREIGN KEY (VOITURE_ID) REFERENCES VOITURES (ID)
);


CREATE TABLE IF NOT EXISTS EQUIPEMENTS (
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    LIBELLE VARCHAR(1024) NOT NULL,
    VOITURE_ID INT NOT NULL,
    FOREIGN KEY (VOITURE_ID) REFERENCES VOITURES (ID)
);


CREATE TABLE IF NOT EXISTS IMAGES_VOITURE (
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    URL VARCHAR(1024) NOT NULL,
    NOM VARCHAR(128) NOT NULL,
    VOITURE_ID INT NOT NULL,
    FOREIGN KEY (VOITURE_ID) REFERENCES VOITURES (ID)
);

CREATE TABLE IF NOT EXISTS IMAGES (
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    URL VARCHAR(1024) NOT NULL,
    NOM VARCHAR(128) NOT NULL
);

CREATE TABLE IF NOT EXISTS COMMENTAIRES (
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    MOTIF VARCHAR(128) NOT NULL,
    NOM VARCHAR(32) NOT NULL,
    PRENOM VARCHAR(32) NOT NULL,
    EMAIL VARCHAR(128) NOT NULL,
    NOTE VARCHAR (1) NOT NULL,
    MESSAGE VARCHAR(150) NOT NULL,
    PUBLIE BOOLEAN NOT NULL
);


CREATE TABLE IF NOT EXISTS HORAIRES (
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    JOUR VARCHAR(32) NOT NULL,
    MATIN VARCHAR(32) NOT NULL,
    APRESMIDI VARCHAR(32) NOT NULL
);

-- Requête Mercedes Vito
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`)
VALUES (NULL, 'Mercedes', 'Vito', '2019', 'Diesel', 'Manuelle', '144 DCI', '52000', '51000', '4', '4', 'Blanc', '7', '136');

SET @dernier_id_voiture_mercedes = LAST_INSERT_ID();

INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES 
(NULL, 'Climatisation manuelle', @dernier_id_voiture_mercedes),
(NULL, 'Douche', @dernier_id_voiture_mercedes),
(NULL, 'Toit relevable', @dernier_id_voiture_mercedes),
(NULL, 'Caméra de recul', @dernier_id_voiture_mercedes),
(NULL, 'Bluetooth', @dernier_id_voiture_mercedes),
(NULL, 'Apple CarPlay', @dernier_id_voiture_mercedes),
(NULL, 'Android Auto', @dernier_id_voiture_mercedes);

INSERT INTO `TYPES_VEHICULES` (`ID`, `LIBELLE`, `VOITURE_ID`)
VALUES (NULL, 'Van', @dernier_id_voiture_mercedes);

INSERT INTO `IMAGES_VOITURE` (`ID`, `URL`, `VOITURE_ID`)
VALUES (NULL, ('./images/mercedes-vito-blanc/avant'), @dernier_id_voiture_mercedes );


-- Requête Kia Niro EV
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`)
VALUES (NULL, 'Kia', 'Niro EV', '2023', 'Electrique', 'Automatique', '150 kwh', '45640', '5890', '5', '5', 'Blanc', '4', '204');

SET @dernier_id_voiture_kia = LAST_INSERT_ID();

INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES 
(NULL, 'Climatisation automatique bi-zone', @dernier_id_voiture_kia),
(NULL, 'Caméra de recul', @dernier_id_voiture_kia),
(NULL, 'Bluetooth', @dernier_id_voiture_kia),
(NULL, 'Lane Assist', @dernier_id_voiture_kia),
(NULL, 'Bluetooth', @dernier_id_voiture_kia),
(NULL, 'Android Auto', @dernier_id_voiture_kia),
(NULL, 'Apple CarPlay', @dernier_id_voiture_kia),
(NULL, 'Limiteur & régulateur de vitesse adaptatif', @dernier_id_voiture_kia),
(NULL, 'Écran tactile 11 pouces' , @dernier_id_voiture_kia),
(NULL, 'Commandes au volant', @dernier_id_voiture_kia);

INSERT INTO `TYPES_VEHICULES` (`ID`, `LIBELLE`, `VOITURE_ID`)
VALUES (NULL, 'SUV', @dernier_id_voiture_kia);


-- Requête Kia Sportage 2023
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) 
VALUES (NULL, 'Kia', 'Sportage', '2023', 'Hybride rechargeable', 'Automatique', '1.6 T-GDI', '50790', '10000', '5', '5', 'Vert', '11', '265');

SET @dernier_id_voiture_kia_vert = LAST_INSERT_ID();

INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES 
(NULL, 'Climatisation automatique bi-zone', @dernier_id_voiture_kia_vert),
(NULL, 'Caméra de recul', @dernier_id_voiture_kia_vert),
(NULL, 'Toit ouvrant & panoramique', @dernier_id_voiture_kia_vert),
(NULL, 'Sièges avant ventilés', @dernier_id_voiture_kia_vert),
(NULL, 'Bluetooth', @dernier_id_voiture_kia_vert),
(NULL, 'Android Auto', @dernier_id_voiture_kia_vert),
(NULL, 'Apple CarPlay', @dernier_id_voiture_kia_vert),
(NULL, 'Limiteur & régulateur de vitesse adaptatif', @dernier_id_voiture_kia_vert),
(NULL, 'Jantes alu' , @dernier_id_voiture_kia_vert),
(NULL, 'Commandes au volant', @dernier_id_voiture_kia_vert);

INSERT INTO `TYPES_VEHICULES` (`ID`, `LIBELLE`, `VOITURE_ID`)
VALUES (NULL, 'SUV', @dernier_id_voiture_kia_vert);


-- Requête Toyota Aygo X
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) 
VALUES (NULL, 'Toyota', 'Aygo-X', '2022', 'Essence', 'Manuelle', '1.O VVT-i', '12000', '60200', '5', '5', 'Blanc', '4', '72');

SET @dernier_id_voiture_toyota = LAST_INSERT_ID();

INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES 
(NULL, 'Climatisation manuelle', @dernier_id_voiture_toyota),
(NULL, 'Caméra de recul', @dernier_id_voiture_toyota),
(NULL, 'Rétroviseurs électriques', @dernier_id_voiture_toyota),
(NULL, 'Sièges à réglage électrique', @dernier_id_voiture_toyota),
(NULL, 'Bluetooth', @dernier_id_voiture_toyota),
(NULL, 'Android Auto', @dernier_id_voiture_toyota),
(NULL, 'Apple CarPlay', @dernier_id_voiture_toyota),
(NULL, 'Limiteur & régulateur de vitesse', @dernier_id_voiture_toyota),
(NULL, 'Écran tactile 7 pouces' , @dernier_id_voiture_toyota),
(NULL, 'Commandes au volant', @dernier_id_voiture_toyota);

INSERT INTO `TYPES_VEHICULES` (`ID`, `LIBELLE`, `VOITURE_ID`)
VALUES (NULL, 'Citadine', @dernier_id_voiture_toyota);


-- Requête Peugeot 208
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) 
VALUES (NULL, 'Peugeot', '208', '2021', 'Essence', 'Manuelle', '1.2 Pure Tech', '13400', '54000', '5', '5', 'Noir', '5', '100');

SET @dernier_id_voiture_peugeot = LAST_INSERT_ID();

INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES 
(NULL, 'Climatisation manuelle', @dernier_id_voiture_peugeot),
(NULL, 'Caméra de recul', @dernier_id_voiture_peugeot),
(NULL, 'Rétroviseurs électriques', @dernier_id_voiture_peugeot),
(NULL, 'Sièges à réglage électrique', @dernier_id_voiture_peugeot),
(NULL, 'Bluetooth', @dernier_id_voiture_peugeot),
(NULL, 'Android Auto', @dernier_id_voiture_peugeot),
(NULL, 'Apple CarPlay', @dernier_id_voiture_peugeot),
(NULL, 'Limiteur & régulateur de vitesse', @dernier_id_voiture_peugeot),
(NULL, 'Écran tactile 7 pouces' , @dernier_id_voiture_peugeot),
(NULL, 'Commandes au volant', @dernier_id_voiture_peugeot);

INSERT INTO `TYPES_VEHICULES` (`ID`, `LIBELLE`, `VOITURE_ID`)
VALUES (NULL, 'Citadine', @dernier_id_voiture_peugeot);


-- Requête Seat Arona
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) 
VALUES (NULL, 'Seat', 'Arona', '2022', 'Essence', 'Manuelle', '1.O TCI', '26490', '2210', '5', '5', 'Blanc', '6', '115');

SET @dernier_id_voiture_seat = LAST_INSERT_ID();

INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES 
(NULL, 'Climatisation manuelle', @dernier_id_voiture_seat),
(NULL, 'Caméra de recul', @dernier_id_voiture_seat),
(NULL, 'Rétroviseurs électriques', @dernier_id_voiture_seat),
(NULL, 'Sièges à réglage électrique', @dernier_id_voiture_seat),
(NULL, 'Bluetooth', @dernier_id_voiture_seat),
(NULL, 'Android Auto', @dernier_id_voiture_seat),
(NULL, 'Apple CarPlay', @dernier_id_voiture_seat),
(NULL, 'Allume-cigare', @dernier_id_voiture_seat),
(NULL, 'Écran tactile 7 pouces' , @dernier_id_voiture_seat),
(NULL, 'Commandes au volant', @dernier_id_voiture_seat);

INSERT INTO `TYPES_VEHICULES` (`ID`, `LIBELLE`, `VOITURE_ID`)
VALUES (NULL, 'Citadine', @dernier_id_voiture_seat);


-- Requête Cupra Leon
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) 
VALUES (NULL, 'Cupra', 'Leon VZ', '2022', 'Hybride rechargeable', 'Automatique', '1.4 E hybride', '38990', '13969', '5', '5', 'Noir', '8', '240');

SET @dernier_id_voiture_cupra = LAST_INSERT_ID();

INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES 
(NULL, 'Climatisation automatique', @dernier_id_voiture_cupra),
(NULL, 'Caméra de recul', @dernier_id_voiture_cupra),
(NULL, 'Banquette 2/3 1/3', @dernier_id_voiture_cupra),
(NULL, '2 USB-C avant/arrière', @dernier_id_voiture_cupra),
(NULL, 'Bluetooth', @dernier_id_voiture_cupra),
(NULL, 'Android Auto', @dernier_id_voiture_cupra),
(NULL, 'Apple CarPlay', @dernier_id_voiture_cupra),
(NULL, 'Jantes alu', @dernier_id_voiture_cupra),
(NULL, 'Écran tactile 8 pouces' , @dernier_id_voiture_cupra),
(NULL, 'Commandes au volant', @dernier_id_voiture_cupra);

INSERT INTO `TYPES_VEHICULES` (`ID`, `LIBELLE`, `VOITURE_ID`)
VALUES (NULL, 'Citadine', @dernier_id_voiture_cupra);


-- Requête Cupra Formentor
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) 
VALUES (NULL, 'Cupra', 'Formentor', '2022', 'Diesel', 'Automatique', '2.0 TDI', '36990', '16723', '5', '5', 'Noir', '8', '150');

SET @dernier_id_voiture_cupra_formentor = LAST_INSERT_ID();

INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES 
(NULL, 'Climatisation automatique', @dernier_id_voiture_cupra_formentor),
(NULL, 'Caméra de recul', @dernier_id_voiture_cupra_formentor),
(NULL, 'Sièges baquets en cuir noir', @dernier_id_voiture_cupra_formentor),
(NULL, '2 USB-C avant/arrière', @dernier_id_voiture_cupra_formentor),
(NULL, 'Bluetooth', @dernier_id_voiture_cupra_formentor),
(NULL, 'Android Auto', @dernier_id_voiture_cupra_formentor),
(NULL, 'Apple CarPlay', @dernier_id_voiture_cupra_formentor),
(NULL, 'Jantes allliage 19 pouces', @dernier_id_voiture_cupra_formentor),
(NULL, 'Pack Drive Assist XL' , @dernier_id_voiture_cupra_formentor),
(NULL, 'Commandes au volant', @dernier_id_voiture_cupra_formentor);

INSERT INTO `TYPES_VEHICULES` (`ID`, `LIBELLE`, `VOITURE_ID`)
VALUES (NULL, 'SUV', @dernier_id_voiture_cupra_formentor);


-- Requête Mercedes Classe A
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) 
VALUES (NULL, 'Mercedes', 'A 180 d', '2021', 'Diesel', 'Automatique', '7 G DCT', '28490', '49093', '5', '5', 'Blanc', '6', '116');

SET @dernier_id_voiture_mercedes_classea = LAST_INSERT_ID();

INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES 
(NULL, 'Climatisation automatique', @dernier_id_voiture_mercedes_classea),
(NULL, 'Caméra de recul', @dernier_id_voiture_mercedes_classea),
(NULL, 'Pack confort', @dernier_id_voiture_mercedes_classea),
(NULL, 'Sièges à réglage électrique', @dernier_id_voiture_mercedes_classea),
(NULL, 'Bluetooth', @dernier_id_voiture_mercedes_classea),
(NULL, 'Android Auto', @dernier_id_voiture_mercedes_classea),
(NULL, 'Apple CarPlay', @dernier_id_voiture_mercedes_classea),
(NULL, 'Écran tactile 10 pouces', @dernier_id_voiture_mercedes_classea),
(NULL, 'Rétroviseurs électriques' , @dernier_id_voiture_mercedes_classea),
(NULL, 'Commandes au volant', @dernier_id_voiture_mercedes_classea);

INSERT INTO `TYPES_VEHICULES` (`ID`, `LIBELLE`, `VOITURE_ID`)
VALUES (NULL, 'Berline', @dernier_id_voiture_mercedes_classea);


-- Requête Kia Ceed
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) 
VALUES (NULL, 'Kia', 'CEED', '2022', 'Essence', 'Manuelle', '1.0 T-GDI', '19490', '34346', '5', '5', 'Gris', '5', '100');

SET @dernier_id_voiture_kia_ceed = LAST_INSERT_ID();

INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES 
(NULL, 'Climatisation automatique', @dernier_id_voiture_kia_ceed),
(NULL, 'Radar de recul', @dernier_id_voiture_kia_ceed),
(NULL, 'Accourdoir central arrière', @dernier_id_voiture_kia_ceed),
(NULL, 'Lane Assist', @dernier_id_voiture_kia_ceed),
(NULL, 'Bluetooth', @dernier_id_voiture_kia_ceed),
(NULL, 'Android Auto', @dernier_id_voiture_kia_ceed),
(NULL, 'Apple CarPlay', @dernier_id_voiture_kia_ceed),
(NULL, 'Écran tactile 10 pouces', @dernier_id_voiture_kia_ceed),
(NULL, 'Rétroviseurs électriques' , @dernier_id_voiture_kia_ceed),
(NULL, 'Commandes au volant', @dernier_id_voiture_kia_ceed);

INSERT INTO `TYPES_VEHICULES` (`ID`, `LIBELLE`, `VOITURE_ID`)
VALUES (NULL, 'Citadine', @dernier_id_voiture_kia_ceed);


-- Requête Volkswagen Golf
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) 
VALUES (NULL, 'VolksWagen', 'Golf', '2017', 'Essence', 'Manuelle', '1.O TSI', '15490', '102189', '5', '5', 'Blanc', '6', '110');

SET @dernier_id_voiture_volkswagen = LAST_INSERT_ID();

INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES 
(NULL, 'Climatisation manuelle', @dernier_id_voiture_volkswagen),
(NULL, 'Aide au stationnement avant/arrière', @dernier_id_voiture_volkswagen),
(NULL, 'Peinture métalisée', @dernier_id_voiture_volkswagen),
(NULL, 'Allume-cigare', @dernier_id_voiture_volkswagen),
(NULL, 'Bluetooth', @dernier_id_voiture_volkswagen),
(NULL, 'Android Auto', @dernier_id_voiture_volkswagen),
(NULL, 'Apple CarPlay', @dernier_id_voiture_volkswagen),
(NULL, 'Écran tactile 8 pouces', @dernier_id_voiture_volkswagen),
(NULL, 'Rétroviseurs électriques' , @dernier_id_voiture_volkswagen),
(NULL, 'Commandes au volant', @dernier_id_voiture_volkswagen);

INSERT INTO `TYPES_VEHICULES` (`ID`, `LIBELLE`, `VOITURE_ID`)
VALUES (NULL, 'Citadine', @dernier_id_voiture_volkswagen);


-- Requête Seat Arona 2019
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) 
VALUES (NULL, 'Seat', 'Arona', '2019', 'Essence', 'Manuelle', '1.O ECO TSI', '18990', '10008', '5', '5', 'Gris', '6', '115');

SET @dernier_id_voiture_seat_arona_2019 = LAST_INSERT_ID();

INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES 
(NULL, 'Climatisation manuellle', @dernier_id_voiture_seat_arona_2019),
(NULL, 'Aide au démarrage en côte', @dernier_id_voiture_seat_arona_2019),
(NULL, 'Sart & Stop', @dernier_id_voiture_seat_arona_2019),
(NULL, 'Radar de recul', @dernier_id_voiture_seat_arona_2019),
(NULL, 'Bluetooth', @dernier_id_voiture_seat_arona_2019),
(NULL, 'Rétroviseurs électriques' @dernier_id_voiture_seat_arona_2019),
(NULL, 'Banquette 2/3 1/3', @dernier_id_voiture_seat_arona_2019),
(NULL, 'Allume-cigare', @dernier_id_voiture_seat_arona_2019),
(NULL, 'Limiteur de vitesse', @dernier_id_voiture_seat_arona_2019),
(NULL, 'Commandes au volant', @dernier_id_voiture_seat_arona_2019);

INSERT INTO `TYPES_VEHICULES` (`ID`, `LIBELLE`, `VOITURE_ID`)
VALUES (NULL, 'Citadine', @dernier_id_voiture_seat_arona_2019);


-- Requête Renault Captur 2022
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) 
VALUES (NULL, 'Renault', 'Captur', '2022', 'Essence', 'Manuelle', 'TCe 90-21', '20450', '15102', '5', '5', 'Bleu', '5', '90');

SET @dernier_id_voiture_renault_captur = LAST_INSERT_ID();

INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES 
(NULL, 'Climatisation automatique', @dernier_id_voiture_renault_captur),
(NULL, 'Roue de secours', @dernier_id_voiture_renault_captur),
(NULL, 'Pack sécurité standard', @dernier_id_voiture_renault_captur),
(NULL, 'Radar de recul avant/arrière', @dernier_id_voiture_renault_captur),
(NULL, 'Bluetooth', @dernier_id_voiture_renault_captur),
(NULL, 'Prise jack', @dernier_id_voiture_renault_captur),
(NULL, 'Prise USB avant', @dernier_id_voiture_renault_captur),
(NULL, 'Rétroviseurs électriques', @dernier_id_voiture_renault_captur),
(NULL, 'Banquette 2/3 1/3', @dernier_id_voiture_renault_captur),
(NULL, 'Jantes alu', @dernier_id_voiture_renault_captur);

INSERT INTO `TYPES_VEHICULES` (`ID`, `LIBELLE`, `VOITURE_ID`)
VALUES (NULL, 'SUV', @dernier_id_voiture_renault_captur);


-- Requête Dacia Duster
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) 
VALUES (NULL, 'Dacia', 'Duster', '2018', 'Diesel', 'Manuelle', 'dCI 110 4x2', '13800', '101900', '5', '5', 'Noir', '6', '110');

SET @dernier_id_voiture_dacia = LAST_INSERT_ID();

INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES 
(NULL, 'Climatisation manuelle', @dernier_id_voiture_dacia),
(NULL, 'Roue de secours + cric' @dernier_id_voiture_dacia),
(NULL, 'Feux diurnes LED', @dernier_id_voiture_dacia),
(NULL, 'Airbag rideau', @dernier_id_voiture_dacia),
(NULL, 'Radar de recul', @dernier_id_voiture_dacia),
(NULL, 'Bluetooth', @dernier_id_voiture_dacia),
(NULL, 'Prise jack', @dernier_id_voiture_dacia),
(NULL, 'Prise USB avant', @dernier_id_voiture_dacia),
(NULL, 'Rétroviseurs rabattables', @dernier_id_voiture_dacia),
(NULL, 'Banquette 2/3 1/3', @dernier_id_voiture_dacia);

INSERT INTO `TYPES_VEHICULES` (`ID`, `LIBELLE`, `VOITURE_ID`)
VALUES (NULL, 'SUV', @dernier_id_voiture_dacia);


-- Requête Citroën C4
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) 
VALUES (NULL, 'Citroën', 'C4', '2017', 'Essence', 'Manuelle', 'Pure Tech 130 S&S BVM6', '15290', '44707', '5', '5', 'Gris', '7', '130');

SET @dernier_id_voiture_citroen_c4 = LAST_INSERT_ID();

INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES 
(NULL, 'Climatisation manuelle', @dernier_id_voiture_citroen_c4),
(NULL, 'Roue de secours', @dernier_id_voiture_citroen_c4),
(NULL, 'Pack sécurité', @dernier_id_voiture_citroen_c4),
(NULL, 'Bouclier avant avec insert chromé', @dernier_id_voiture_citroen_c4),
(NULL, 'Bouclier arrière avec insert chromé', @dernier_id_voiture_citroen_c4),
(NULL, 'Radar de recul', @dernier_id_voiture_citroen_c4),
(NULL, 'Bluetooth', @dernier_id_voiture_citroen_c4),
(NULL, 'Limiteur & régulateur de vitesse', @dernier_id_voiture_citroen_c4),
(NULL, 'Commandes au volant', @dernier_id_voiture_citroen_c4),
(NULL, 'Rétroviseurs électriques', @dernier_id_voiture_citroen_c4);

INSERT INTO `TYPES_VEHICULES` (`ID`, `LIBELLE`, `VOITURE_ID`)
VALUES (NULL, 'Citadine', @dernier_id_voiture_citroen_c4);

-- Requête Suzuki Vitara
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) 
VALUES (NULL, 'Suzuki', 'Vitara', '2021', 'Hybride', 'Automatique', '1.4 BOOSTERJet AllGrip', '23770', '20761', '5', '5', 'Blanc', '7', '121');

SET @dernier_id_voiture_suzuki = LAST_INSERT_ID();

INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES 
(NULL, 'Climatisation automatique bi-zone', @dernier_id_voiture_suzuki),
(NULL, 'Aide au freinage', @dernier_id_voiture_suzuki),
(NULL, 'Caméra de recul', @dernier_id_voiture_suzuki),
(NULL,'Lane Assist', @dernier_id_voiture_suzuki),
(NULL,'Limiteur & régulateur de vitesse', @dernier_id_voiture_suzuki),
(NULL,'Commandes au volant', @dernier_id_voiture_suzuki),
(NULL,'Prises USB avant', @dernier_id_voiture_suzuki),
(NULL,'Bluetooth', @dernier_id_voiture_suzuki),
(NULL,'Apple CarPlay', @dernier_id_voiture_suzuki),
(NULL,'Android Auto', @dernier_id_voiture_suzuki);

INSERT INTO `TYPES_VEHICULES` (`ID`, `LIBELLE`, `VOITURE_ID`)
VALUES (NULL, 'SUV', @dernier_id_voiture_suzuki);


-- Requêtes jours d'ouverture
INSERT INTO `HORAIRES` (`ID`, `JOUR`, `MATIN`, `APRESMIDI`) VALUES (NULL, 'Lundi', '10h-12h', '14h-19h');
INSERT INTO `HORAIRES` (`ID`, `JOUR`, `MATIN`, `APRESMIDI`) VALUES (NULL, 'Mardi', '8h-12h', '14h-19h');
INSERT INTO `HORAIRES` (`ID`, `JOUR`, `MATIN`, `APRESMIDI`) VALUES (NULL, 'Mercredi', '8h-12h', '14h-19h');
INSERT INTO `HORAIRES` (`ID`, `JOUR`, `MATIN`, `APRESMIDI`) VALUES (NULL, 'Jeudi', '8h-12h', '14h-19h');
INSERT INTO `HORAIRES` (`ID`, `JOUR`, `MATIN`, `APRESMIDI`) VALUES (NULL, 'Vendredi', '8h-12h', '14h-19h');
INSERT INTO `HORAIRES` (`ID`, `JOUR`, `MATIN`, `APRESMIDI`) VALUES (NULL, 'Samedi', '8h-12h', '14h-18h');
INSERT INTO `HORAIRES` (`ID`, `JOUR`, `MATIN`, `APRESMIDI`) VALUES (NULL, 'Dimanche', 'Fermé', 'Fermé');


INSERT INTO `EMPLOYES` (`ID`, `NOM`, `PRENOM`, `EMAIL`, `MDP`, `ADMINISTRATEUR`, `ROLE`) VALUES 
(NULL, 'Michel', 'Jean', 'j.michel@garageparrot.fr', '$2y$10$FnrGsFdlozLf89/tCxKlDe0lGLrnQwkW2SSUae/EEbHIjB.CcZxfm', '', '');

-- Requêtes images
INSERT INTO `IMAGES` (`ID`, `URL`, `NOM`) VALUES 
(NULL, 'ftp://storepl@ftp.cluster028.hosting.ovh.net/www/img/garagevparrot.png', 'logo');
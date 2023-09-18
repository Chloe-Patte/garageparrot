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


CREATE TABLE IF NOT EXISTS IMAGES (
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    URL VARCHAR(1024) NOT NULL,
    VOITURE_ID INT NOT NULL,
    FOREIGN KEY (VOITURE_ID) REFERENCES VOITURES (ID)
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


INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Mercedes', 'Vito', '2019', 'Diesel', 'Manuelle', '144 DCI', '52000', '51000', '4', '4', 'Blanc', '7', '136');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Kia', 'Niro EV', '2023', 'Electrique', 'Automatique', '150 kwh', '45640', '5890', '5', '5', 'Blanc', '4', '204');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Kia', 'Sportage', '2023', 'Hybride rechargeable', 'Automatique', '1.6 T-GDI', '50790', '10000', '5', '5', 'Vert', '11', '265');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Toyota', 'Aygo-X', '2022', 'Essence', 'Manuelle', '1.O VVT-i', '12000', '60200', '5', '5', 'Blanc', '4', '72');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Peugeot', '208', '2021', 'Essence', 'Manuelle', '1.2 Pure Tech', '13400', '54000', '5', '5', 'Noir', '5', '100');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Seat', 'Arona', '2022', 'Essence', 'Manuelle', '1.O TCI', '26490', '2210', '5', '5', 'Blanc', '6', '115');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Cupra', 'Leon VZ', '2022', 'Hybride rechargeable', 'Automatique', '1.4 E hybride', '38990', '13969', '5', '5', 'Noir', '8', '240');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Cupra', 'Formentor', '2022', 'Diesel', 'Automatique', '2.0 TDI', '36990', '16723', '5', '5', 'Noir', '8', '150');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Mercedes', 'A 180 d', '2021', 'Diesel', 'Automatique', '7 G DCT', '28490', '49093', '5', '5', 'Blanc', '6', '116');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Kia', 'CEED', '2022', 'Essence', 'Manuelle', '1.0 T-GDI', '19490', '34346', '5', '5', 'Gris', '5', '100');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'VolksWagen', 'Golf', '2017', 'Essence', 'Manuelle', '1.O TSI', '15490', '102189', '5', '5', 'Blanc', '6', '110');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Seat', 'Arona', '2019', 'Essence', 'Manuelle', '1.O ECO TSI', '18990', '10008', '5', '5', 'Gris', '6', '115');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Renault', 'Captur', '2022', 'Essence', 'Manuelle', 'TCe 90-21', '20450', '15102', '5', '5', 'Bleu', '5', '90');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Dacia', 'Duster', '2018', 'Diesel', 'Manuelle', 'dCI 110 4x2', '13800', '101900', '5', '5', 'Noir', '6', '110');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Citroën', 'C4', '2017', 'Essence', 'Manuelle', 'Pure Tech 130 S&S BVM6', '15290', '44707', '5', '5', 'Gris', '7', '130');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Suzuki', 'Vitara', '2021', 'Hybride', 'Automatique', '1.4 BOOSTERJet AllGrip', '23770', '20761', '5', '5', 'Blanc', '7', '121');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Peaugeot', '3008', '2018', 'Essence', 'Manuelle', '1.2 Pure Tech S&S BVM6', '19990', '79981', '5', '5', 'Noir', '7', '130');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Renault', 'Zoé', '2019', 'Electrique', 'Automatique', 'R110', '13100', '40100', '5', '5', 'Blanc', '1', '108');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Fiat', '500L', '2018', 'Diesel', 'Manuelle', 'MY19 500l 1.6 MultiJet', '13490', '104777', '5', '5', 'Bleu', '6', '120');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Citroën', 'C3', '2017', 'Essence', 'Manuelle', 'Pure Tech 82', '11990', '44086', '5', '5', 'Orange', '4', '82');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Mitsubishi', 'ASX', '2019', 'Essence', 'Manuelle', 'MY 19 ASX 1.6 MIVEC 117 2WD', '16990', '55214', '5', '5', 'Blanc', '7', '117');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Kia', 'E-Niro', '2020', 'Electrique', 'Automatique', '150 kwh', '27990', '31182', '5', '5', 'Blanc', '1', '204');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'MG', 'ZSEV', '2021', 'Electrique', 'Automatique', '105 kwh', '20990', '48578', '5', '5', 'Noir', '1', '143');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Kia', 'e-Soul', '2022', 'Electrique', 'Automatique', '100 kwh', '33990', '11000', '5', '5', 'Rouge', '3', '204');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Kia', 'Stonic', '2021', 'Essence', 'Manuelle', '1.0 T-GDi MHEV iBVM6', '16990', '62805', '5', '5', 'Gris', '5', '100');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Mitsubishi', 'Outlander', '2019', 'Hybride', 'Automatique', 'PHEV Outlander 2.4 PHEV Twin motor 4WD', '29490', '62657', '5', '5', 'Blanc', '5', '224');
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) VALUES (NULL, 'Citroën', 'C5 Aircross', '2018', 'Diesel', 'Automatique', 'Blue HDI S&S FILL EAT8', '33460', '4730', '5', '5', 'Gris', '6', '130');


INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation manuelle, Douche, Toit relevable, Caméra de recul, Bluetooth, Apple CarPlay, Android Auto', NULL);
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation automatique bi-zone, Caméra de recul, Bluetooth, Apple CarPlay, Android Auto, Limiteur & régulateur de vitesse adaptatif, Commandes au volant, Lane Assist', NULL);
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation automatique bi-zone, Toit ouvrant & panoramique, Caméra de recul, Bluetooth, Apple CarPlay, Android Auto, Sièges avant ventilé, Jantes alu, Limiteur & régulateur de vitesse adaptatif, Commandes au volant', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation manuelle, Caméra de recul, Bluetooth, Apple CarPlay, Android Auto, LRétroviseur électrique, Ecran tactile 7"', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation manuelle, Vitres électriques, ABS, Commandes au volant, Bluetooth, Allume-cigare', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation manuelle, 2 sièges ISOFIX, Pack Drive Assist XL, Jantes Alliage 18"','');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation automatique, Banquette 2/3 1/3, 2 USB-C avant/arrière, Caméra de recul, Bluetooth, Apple CarPlay, Jantes alu', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation automatique, Sièges baquets en cuir noir, 2 USB-C avant/arrière, Pack Drive Assist XL, Caméra de recul, Bluetooth, Apple CarPlay, Jantes allliage 19"', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation automatique, Pack Confort, Commandes au volant, Bluetooth, Apple CarPlay, Android Auto, Ecran tactile 10"', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation automatique, ABS, Accourdoir central arrière, Radar de recul, Bluetooth, Apple CarPlay, Android Auto, Lane Assist', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation manuelle, Peinture métalisée, Radar de recul avant/arrière, Bluetooth, Apple CarPlay, Android Auto', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation manuellle, Aide au démarrage en côte, Start & Stop, Radar de recul, Bluetooth', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation automatique, Roue de secours, Pack de sécurité standard, Radar de recul avant/arrière, Bluetooth', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation manuelle, Roue de secours + cric, Feux diurne LED, Airbag rideau, Radar de recul, Bluetooth', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation manuelle, Roue de secours, Pack sécurité, Bouclier avant/arrière avec insert chromé, Radar de recul, Bluetooth', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation automatique bi-zone, Aide au freinage, Caméra de recul, Bluetooth, Apple CarPlay, Lane Assist', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation automatique, Roue de secours, Crocheet attelage, Caméra & radar de recul, Bluetooth', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation manuelle, Allumage automatique des feux, Essuis-glace automatique, Radar de recul, Bluetooth, Apple CarPlay, Câble de recharge mode 3 type 2', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation manuelle, Pack attelage, Commandes au volant, Radar de recul, Bluetooth, Prise USB avant', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation manuelle, Commandes au volant, Radar de recul, Bluetooth, Ecran tactile 11"', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation automatique, Airbag genoux conducteur, Commandes au volant, Accoudoir central avant/arrière, Caméra de recul, Bluetooth', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation automatique bi-zone, Airbag genous conducteur, Commandes au volant, Caméra & radar de recul, Accoudoir central avant/arrière, Bluetooth, Apple CarPlay, Android Auto', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation automatique, Commandes au volant, 3 ports USB, Caméra & radar de recul, Bluetooth', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation automatique bi-zone, Commandes au volant, Airbag genoux conducteur, Caméra & radar de recul, Bluetooth, Apple CarPlay, Android Auto, Lane Assist', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation automatique, Pack sécurité, Caméra de recul, Bluetooth, Apple CarPlay, Android Auto, Lane Assist', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation automatique, Pack sécurité, Aide au démarrage en côte, Caméra de recul, Commandes au volant, Bluetooth, Apple CarPlay, Android Auto', '');
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, 'Climatisation manuelle, Pack attelage, Commande vocale, Commandes au volant, Caméra & radar de recul, Bluetooth, Ecran tactile 10"', '');

INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`)
VALUES (NULL, 'Mercedes', 'Vito', '2019', 'Diesel', 'Manuelle', '144 DCI', '52000', '51000', '4', '4', 'Blanc', '7', '136');

SET @dernier_id_voiture_mercedes = LAST_INSERT_ID();

INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`)
VALUES (NULL, 'Climatisation manuelle, Douche, Toit relevable, Caméra de recul, Bluetooth, Apple CarPlay, Android Auto', @dernier_id_voiture_mercedes);

INSERT INTO `TYPES_VEHICULES` (`ID`, `LIBELLE`, `VOITURE_ID`)
VALUES (NULL, 'Van', @dernier_id_voiture_mercedes);

INSERT INTO `IMAGES` (`ID`, `URL`, `VOITURE_ID`)
VALUES (NULL, LOAD_FILE('./images/voiture1.png'), @dernier_id_voiture_mercedes );


-- Répétez le processus pour la voiture Kia
INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`)
VALUES (NULL, 'Kia', 'Niro EV', '2023', 'Electrique', 'Automatique', '150 kwh', '45640', '5890', '5', '5', 'Blanc', '4', '204');

-- Récupérez l'ID de la voiture Kia que vous venez d'insérer
SET @dernier_id_voiture_kia = LAST_INSERT_ID();

-- Insérez les équipements pour la voiture Kia en utilisant l'ID récupéré
INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`)
VALUES (NULL, 'Climatisation automatique bi-zone, Caméra de recul, Bluetooth, Apple CarPlay, Android Auto, Limiteur & régulateur de vitesse adaptatif, Commandes au volant, Lane Assist', @dernier_id_voiture_kia);

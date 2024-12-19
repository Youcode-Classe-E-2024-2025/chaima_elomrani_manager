CREATE TABLE utilisateur (
    id_utilisateur INT AUTO_INCREMENT PRIMARY KEY,  
    nom VARCHAR(255) NOT NULL, 
    email VARCHAR(255) UNIQUE NOT NULL, 
    mot_de_passe VARCHAR(255) NOT NULL
    
);

INSERT INTO utilisateur (nom, email, mot_de_passe) VALUES
('Alice Dupont', 'alice.dupont@example.com', 'MotDePasse123'),
('Bob Martin', 'bob.martin@example.com', 'Password456'),
('Carla Moreau', 'carla.moreau@example.com', 'CarlaSecure789'),
('David Leroy', 'david.leroy@example.com', 'DavLeroy456'),
('Emma Lefevre', 'emma.lefevre@example.com', 'EmmaLefevre987'),
('Franck Gauthier', 'franck.gauthier@example.com', 'FrAnck@123'),
('Géraldine Renault', 'geraldine.renault@example.com', 'Geri987654'),
('Hugo Picard', 'hugo.picard@example.com', 'Hugo@5678'),
('Isabelle Boucher', 'isabelle.boucher@example.com', 'IsaBoucher@456'),
('Jacques Dufresne', 'jacques.dufresne@example.com', 'JacDufresne123'),
('Katherine Lefevre', 'katherine.lefevre@example.com', 'KateLefevre2024'),
('Louis Charpentier', 'louis.charpentier@example.com', 'LouisCharp@22');


-- *******************************************************************


CREATE TABLE categorie (
    id_categorie INT AUTO_INCREMENT PRIMARY KEY,  
    nom VARCHAR(255) NOT NULL  
);

INSERT INTO categorie (nom)
VALUES 
('Salle de réunion'),
('Salle de conférence'),
('Espace coworking'),
('Salle de formation'),
('Salle de séminaire'),
('Bureau privé');

-- *******************************************************************

CREATE TABLE salle (
    id_salle INT AUTO_INCREMENT PRIMARY KEY,  
    nom VARCHAR(255) NOT NULL, 
    capacite INT NOT NULL,  
    equipement TEXT,
    id_categorie INT,
    FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie) 
);


INSERT INTO salle (nom, capacite, equipement) VALUES
('Salle A', 50, 'Projecteur, Tableau blanc'),
('Salle B', 30, 'Ordinateur, Climatisation'),
('Salle C', 100, 'Haut-parleurs, Microphone'),
('Salle D', 25, 'Wifi, Tableau interactif'),
('Salle E', 75, 'Caméra de conférence, Écran géant'),
('Salle F', 40, 'Système de sonorisation, Podium'),
('Salle G', 60, 'Éclairage intelligent, Ordinateur'),
('Salle H', 20, 'Tableau blanc, Connexion ethernet'),
('Salle I', 15, 'Microphone, Projecteur'),
('Salle J', 35, 'Tableau blanc, Haut-parleurs'),
('Salle K', 45, 'Ordinateur, Wifi'),
('Salle L', 80, 'Caméra de conférence, Écran interactif');


-- *******************************************************************


CREATE TABLE role(
   id_role INT AUTO_INCREMENT PRIMARY KEY , 
   role_name VARCHAR(200) NOT NULL UNIQUE
);


INSERT INTO role (role_name)
VALUES 
('Administrateur'),
('Utilisateur'),
('Visiteur');

-- *******************************************************************

CREATE TABLE reservation (
    id INT AUTO_INCREMENT PRIMARY KEY , 
    id_utilisateur INT , 
    id_salle INT , 
    durée INT NOT NULL,
    date_reservation TIMESTAMP NOT NULL,
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur),
    FOREIGN KEY (id_salle) REFERENCES salle(id_salle)
);

INSERT INTO reservation(durée , date_reservation)
VALUES
( '2h', '2024-12-19'),
( '4h', '2024-12-20'),
( '1h', '2024-12-18'),
( '6h', '2024-12-22'),
( '3h', '2024-12-25'),
( '8h', '2024-12-27'),
( '5h', '2024-12-30'),
( '2h', '2025-01-02'),
( '4h', '2025-01-05');

-- *******************************************************************


CREATE TABLE avis (
    id_avis SERIAL PRIMARY KEY,  
    id_utilisateur INT,  
    id_salle INT,  
    commentaire TEXT, 
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur), 
    FOREIGN KEY (id_salle) REFERENCES salle(id_salle)  
);

INSERT INTO avis ( commentaire) VALUES
( 'Salle bien équipée pour des réunions.'),
( 'Manque de climatisation, sinon parfait.'),
( 'Très pratique pour des petites équipes.'),
('Idéal pour les grandes conférences.'),
('Salle spacieuse, équipements modernes.'),
( 'Bien pour les formations.'),
( 'Espace trop petit pour un grand groupe.'),
( 'Parfait pour des séminaires.');
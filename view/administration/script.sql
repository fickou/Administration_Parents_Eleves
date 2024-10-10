-- Table des élèves
CREATE TABLE eleves (
    id_eleve VARCHAR(255) PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255),
    genre VARCHAR(10),
    date_naissance DATE,
    photo VARCHAR(255),
    classe VARCHAR(255),
    email_tuteur VARCHAR(255),
    nom_tuteur VARCHAR(255),
    nom_mere VARCHAR(255),
    contact VARCHAR(50),
    adresse TEXT,
    nom_utilisateur VARCHAR(255),
    mot_de_passe VARCHAR(255),
    date_inscription DATETIME DEFAULT CURRENT_TIMESTAMP,
    date_modification DATETIME ON UPDATE CURRENT_TIMESTAMP
);

-- Table des professeurs
CREATE TABLE professeurs (
    id_professeur VARCHAR(255) PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255),
    genre VARCHAR(10),
    date_naissance DATE,
    photo VARCHAR(255),
    identifiant VARCHAR(255),
    telephone VARCHAR(50),
    email VARCHAR(255) NOT NULL,
    adresse TEXT,
    nom_utilisateur VARCHAR(255),
    mot_de_passe VARCHAR(255),
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    date_modification DATETIME ON UPDATE CURRENT_TIMESTAMP
);

-- Table de l'administration
CREATE TABLE administration (
    id_administration VARCHAR(255) PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255),
    email VARCHAR(255) NOT NULL,
    telephone VARCHAR(50),
    mot_de_passe VARCHAR(255),
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    date_modification DATETIME ON UPDATE CURRENT_TIMESTAMP
);

-- Table des cours
CREATE TABLE cours (
    id_cours VARCHAR(255) PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    description TEXT,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    date_modification DATETIME ON UPDATE CURRENT_TIMESTAMP
);

-- Table d'association entre les cours et les professeurs
CREATE TABLE cours_professeurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cours_id INT,
    professeur_id INT,
    FOREIGN KEY (cours_id) REFERENCES cours(id),
    FOREIGN KEY (professeur_id) REFERENCES professeurs(id_professeur)
);

-- Table des factures
CREATE TABLE factures (
    id INT AUTO_INCREMENT PRIMARY KEY,
    eleve_id INT,
    type VARCHAR(255) NOT NULL,
    montant DECIMAL(10, 2) NOT NULL,
    date_emission DATETIME DEFAULT CURRENT_TIMESTAMP,
    date_paiement DATETIME,
    statut VARCHAR(50) NOT NULL,
    description TEXT,
    FOREIGN KEY (eleve_id) REFERENCES eleves(id_eleve)
);

-- Table des notifications
CREATE TABLE notifications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    message TEXT,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    statut VARCHAR(50) NOT NULL
);

-- Table des programmes scolaires
CREATE TABLE programmes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    description TEXT,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    date_modification DATETIME ON UPDATE CURRENT_TIMESTAMP
);

-- Table des bulletins
CREATE TABLE bulletins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    eleve_id INT,
    cours_id INT,
    note VARCHAR(10) NOT NULL,
    commentaires TEXT,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (eleve_id) REFERENCES eleves(id_eleve),
    FOREIGN KEY (cours_id) REFERENCES cours(id_cours)
);

-- Table des messages
CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    expediteur_id INT,
    destinataire_id INT,
    contenu TEXT,
    date_envoi DATETIME DEFAULT CURRENT_TIMESTAMP,
    statut VARCHAR(50) NOT NULL
);

-- Table des annonces
CREATE TABLE annonces (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    contenu TEXT,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    statut VARCHAR(50) NOT NULL
);

-- Table des pages
CREATE TABLE pages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    contenu TEXT,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    date_modification DATETIME ON UPDATE CURRENT_TIMESTAMP
);

-- Table des rapports
CREATE TABLE rapports (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description TEXT,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    date_modification DATETIME ON UPDATE CURRENT_TIMESTAMP
);

-- Table des performances
CREATE TABLE performances (
    id INT AUTO_INCREMENT PRIMARY KEY,
    eleve_id INT,
    cours_id INT,
    note VARCHAR(10) NOT NULL,
    commentaires TEXT,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (eleve_id) REFERENCES eleves(id_eleve),
    FOREIGN KEY (cours_id) REFERENCES cours(id_cours)
);

-- Table des présences
CREATE TABLE presences (
    id INT AUTO_INCREMENT PRIMARY KEY,
    eleve_id INT,
    date DATETIME NOT NULL,
    statut VARCHAR(50) NOT NULL,
    commentaires TEXT,
    FOREIGN KEY (eleve_id) REFERENCES eleves(id_eleve)
);

-- Table des classes
CREATE TABLE classes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    description TEXT,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    date_modification DATETIME ON UPDATE CURRENT_TIMESTAMP
);

-- Table des évaluations
CREATE TABLE evaluations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    eleve_id INT,
    cours_id INT,
    note VARCHAR(10) NOT NULL,
    commentaires TEXT,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (eleve_id) REFERENCES eleves(id_eleve),
    FOREIGN KEY (cours_id) REFERENCES cours(id_cours)
);

-- Table des réunions
CREATE TABLE reunions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description TEXT,
    date_reunion DATETIME NOT NULL,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Table des événements
CREATE TABLE evenements (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description TEXT,
    date_evenement DATETIME NOT NULL,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP
);

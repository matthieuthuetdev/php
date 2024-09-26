CREATE TABLE restaurant(
    id INT AUTO_INCREMENT=0,
    nom VARCHAR(50) NOT NULL,
    commentaire TEXT,
    prix DECIMAL(19, 4) NOT NULL,
    adresse VARCHAR(255),
    note DECIMAL(15, 1),
    visite DATE,
);
-- DROP TABLE restaurant;
-- 
-- 

CREATE TABLE restaurants(
   id INT AUTO_INCREMENT,
   nom VARCHAR(100) NOT NULL,
   commentaire TEXT ,
   prix DECIMAL(8,2) NOT NULL,
   adresse VARCHAR(255) ,
   note DOUBLE,
   visite DATE,
   Constraint Pk_retaurant PRIMARY KEY(id),
   CONSTRAINT ck_note CHECK(note BETWEEN 0 AND 10 )
);

USE guiderestaurant
INSERT INTO
    restaurants (nom, commentaire, prix, adresse, note, visite) VALUES (
        "L’ADRIATICO",
        "Une des meilleurs pizzéria de la région Service très agréable, efficace et souriant Salle principale un peu bruyante mais cela donne un côté italien je recommande",
        25,
        "6 route de Neuf Brisach, 68000, Colmar, France",
        8,
        "2020-02-04"
    )
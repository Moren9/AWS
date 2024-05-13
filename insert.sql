CREATE TABLE utente(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL
);
INSERT INTO utente (username, password) VALUES ('Ruben', 'CiscoLover'), ('Riccardo', 'WikipediaLover');
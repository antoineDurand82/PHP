CREATE TABLE fortnite;
USE fortnite;

CREATE TABLE user (id INT AUTO_INCREMENT, login VARCHAR(255), password VARCHAR(255), PRIMARY KEY (id));
CREATE TABLE spawn (id INT AUTO_INCREMENT, name VARCHAR(255), linkimg VARCHAR(255), PRIMARY KEY (id));

INSERT INTO user (login, password) values ('root', 'root');
INSERT INTO spawn (name, linkimg) values ('Loot Lake', './img/loot_lake.jpg');
INSERT INTO spawn (name, linkimg) values ('Anarchy Acres', './img/anarchy_acres.jpg');
INSERT INTO spawn (name, linkimg) values ('Pleasant Park', './img/pleasant_park.jpg');
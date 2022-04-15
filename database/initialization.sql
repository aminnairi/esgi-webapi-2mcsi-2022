DROP DATABASE IF EXISTS `esgi-webapi-2mcsi-2022`;

CREATE DATABASE `esgi-webapi-2mcsi-2022` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

CREATE TABLE users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(25) NOT NULL,
    username VARCHAR(25) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone CHAR(10) NOT NULL,
    website varchar(50) NOT NULL
) ENGINE = InnoDB;

CREATE TABLE posts(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    userId INT NOT NULL REFERENCES users(id),
    title VARCHAR(25) NOT NULL,
    body TEXT NOT NULL
) ENGINE = InnoDB;

CREATE TABLE comments(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    postId INT NOT NULL REFERENCES posts(id),
    name VARCHAR(25) NOT NULL,
    email VARCHAR(50) NOT NULL
) ENGINE = InnoDB;

CREATE TABLE albums(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    userId INT NOT NULL REFERENCES users(id),
    title VARCHAR(25) NOT NULL
) ENGINE = InnoDB;

CREATE TABLE photos(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    albumId INT NOT NULL REFERENCES albums(id),
    title VARCHAR(25) NOT NULL,
    url VARCHAR(100) NOT NULL,
    thumbnailUrl VARCHAR(100) NOT NULL
) ENGINE = InnoDB;

CREATE TABLE todos(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    userId INT NOT NULL REFERENCES users(id),
    title VARCHAR(25) NOT NULL,
    completed BOOLEAN DEFAULT FALSE
) ENGINE = InnoDB;

INSERT INTO users(name, username, email, phone, website) VALUES('NAIRI', 'Amin', 'anairi@esgi.fr', '0102030405', 'https://github.com/aminnairi');
INSERT INTO posts(userId, title, body) VALUES(1, 'Titre', 'Contenu');

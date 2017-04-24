-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2017-04-03 23:10:31.973

-- tables
-- Table: forum
CREATE TABLE forum (
    idn_forum int NOT NULL AUTO_INCREMENT,
    dsc_forum varchar(250) NOT NULL,
    dsc_titulo_forum varchar(50) NOT NULL,
    CONSTRAINT forum_pk PRIMARY KEY (idn_forum)
);

-- Table: mensagem
CREATE TABLE mensagem (
    idn_mensagem int NOT NULL AUTO_INCREMENT,
    pessoa_idn_pessoa int NOT NULL,
    dsc_mensagem varchar(300) NULL,
    forum_idn_forum int NOT NULL,
    CONSTRAINT mensagem_pk PRIMARY KEY (idn_mensagem)
);

-- Table: pessoa
CREATE TABLE pessoa (
    idn_pessoa int NOT NULL AUTO_INCREMENT,
    dsc_nome varchar(50) NOT NULL,
    nu_cpf varchar(12) NOT NULL,
    dsc_email varchar(50) NOT NULL,
    nu_matricula varchar(15) NOT NULL,
    senha varchar(25) NOT NULL,
    CONSTRAINT pessoa_pk PRIMARY KEY (idn_pessoa)
);

-- foreign keys
-- Reference: mensagem_forum (table: mensagem)
ALTER TABLE mensagem ADD CONSTRAINT mensagem_forum FOREIGN KEY mensagem_forum (forum_idn_forum)
    REFERENCES forum (idn_forum);

-- Reference: mensagem_pessoa (table: mensagem)
ALTER TABLE mensagem ADD CONSTRAINT mensagem_pessoa FOREIGN KEY mensagem_pessoa (pessoa_idn_pessoa)
    REFERENCES pessoa (idn_pessoa);

-- End of file.


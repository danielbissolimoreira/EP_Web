
CREATE TABLE Pessoa
(
	EMAIL                VARCHAR(30) NOT NULL,
	NOME                 VARCHAR(20) NOT NULL,
	TELEFONE             INTEGER NOT NULL,
	SENHA                VARCHAR(10) NULL
);

ALTER TABLE Pessoa
ADD PRIMARY KEY (EMAIL);

CREATE TABLE Agenda
(
	DIA                  DATE NOT NULL,
	DATA_COMPLETA        DATETIME NULL,
	HORA                 TIME NOT NULL,
	EMAIL                VARCHAR(30) NOT NULL
);

ALTER TABLE Agenda
ADD PRIMARY KEY (DIA,HORA,EMAIL);

ALTER TABLE Agenda
ADD FOREIGN KEY R_3 (EMAIL) REFERENCES Pessoa (EMAIL);
CREATE TABLE Etudiants(
v_id_etu			VARCHAR(20)				NOT NULL,
v_id_carte			VARCHAR(20)				NOT NULL,
v_prenom			VARCHAR(50)				NOT NULL,
v_nom 				VARCHAR(50)				NOT NULL,
v_id_groupe			VARCHAR(20)				NOT NULL,
d_creat				DATETIME				NOT NULL,
v_id_user_creat		VARCHAR(20)				NOT NULL,
d_maj				DATETIME				NOT NULL,
v_id_user_maj		VARCHAR(20)				NOT NULL,
v_statut			VARCHAR(1)	DEFAULT 'I' NOT NULL,

CONSTRAINT PK_ETUDIANTS 	PRIMARY KEY (v_id_etu, v_id_carte),
CONSTRAINT FK_ETU_GROU		FOREIGN KEY (v_id_groupe) REFERENCES Groupes(v_id_groupe)
);
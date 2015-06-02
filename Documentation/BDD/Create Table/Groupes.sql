CREATE TABLE Groupes(
v_id_groupe			VARCHAR(20)				NOT NULL,
v_id_classe			VARCHAR(20)				NOT NULL,
v_libelle			VARCHAR(100)			NOT NULL,
d_creat				DATETIME				NOT NULL,
v_id_user_creat		VARCHAR(20)				NOT NULL,
d_maj				DATETIME				NOT NULL,
v_id_user_maj		VARCHAR(20)				NOT NULL,
v_statut			VARCHAR(1)	DEFAULT 'I' NOT NULL,

CONSTRAINT PK_GROUPES 		PRIMARY KEY (v_id_groupe),
CONSTRAINT FK_GRO_CLAS		FOREIGN KEY (v_id_classe) REFERENCES Classes(v_id_classe)
);
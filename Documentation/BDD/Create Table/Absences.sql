CREATE TABLE Absences(
v_id_abs			VARCHAR(20)				NOT NULL,
v_id_etu			VARCHAR(20)				NOT NULL,
d_abs				DATETIME 				NOT NULL,
v_just				VARCHAR(1)	DEFAULT 'N'	NOT NULL,
d_creat				DATETIME				NOT NULL,
v_id_user_creat		VARCHAR(20)				NOT NULL,
d_maj				DATETIME				NOT NULL,
v_id_user_maj		VARCHAR(20)				NOT NULL,
v_statut			VARCHAR(1)	DEFAULT 'I' NOT NULL,

CONSTRAINT PK_ABSENCES		PRIMARY KEY (v_id_abs),
CONSTRAINT FK_ABS_ETU		FOREIGN KEY (v_id_etu) REFERENCES Etudiants(v_id_etu),
CONSTRAINT FK_ABS_USER_CRE 	FOREIGN KEY (v_id_user_creat) REFERENCES Utilisateurs(v_id_user),
CONSTRAINT FK_ABS_USER_MAJ 	FOREIGN KEY (v_id_user_maj) REFERENCES Utilisateurs(v_id_user)
);
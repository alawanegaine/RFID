CREATE TABLE Emargements(
v_id_emarg			VARCHAR(20)				NOT NULL,
v_id_carte			VARCHAR(20)				NOT NULL,
d_date_emarg		DATETIME				NOT NULL,
d_date_synchro		DATETIME				NOT NULL,
d_creat				DATETIME				NOT NULL,
v_id_user_creat		VARCHAR(20)				NOT NULL,
d_maj				DATETIME				NOT NULL,
v_id_user_maj		VARCHAR(20)				NOT NULL,
v_statut			VARCHAR(1)	DEFAULT 'I' NOT NULL,

CONSTRAINT PK_EMARGEMENTS		PRIMARY KEY (v_id_emarg),
CONSTRAINT FK_EMARG_USER_CRE 	FOREIGN KEY (v_id_user_creat) REFERENCES Utilisateurs(v_id_user),
CONSTRAINT FK_EMARG_USER_MAJ 	FOREIGN KEY (v_id_user_maj) REFERENCES Utilisateurs(v_id_user)
);
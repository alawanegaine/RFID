CREATE TABLE Creneaux(
v_id_creneau		VARCHAR(20)				NOT NULL,
v_id_groupe			VARCHAR(20)				NOT NULL,
d_date_emarg		DATETIME				NOT NULL,
d_date_synchro		DATETIME				NOT NULL,
d_creat				DATETIME				NOT NULL,
v_id_user_creat		VARCHAR(20)				NOT NULL,
d_maj				DATETIME				NOT NULL,
v_id_user_maj		VARCHAR(20)				NOT NULL,
v_statut			VARCHAR(1)	DEFAULT 'I' NOT NULL,

CONSTRAINT PK_CRENEAUX		PRIMARY KEY (v_id_creneau),
CONSTRAINT FK_CREN_GROU		FOREIGN KEY (v_id_groupe) REFERENCES Groupes(v_id_groupe)
);
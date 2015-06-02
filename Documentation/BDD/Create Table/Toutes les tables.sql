CREATE TABLE classes(
v_id_classe			VARCHAR(20)				NOT NULL,
v_libelle			VARCHAR(100)			NOT NULL,
v_statut			VARCHAR(1)	DEFAULT 'I' NOT NULL,

CONSTRAINT PK_CLASSES	PRIMARY KEY (v_id_classe)
);

CREATE TABLE groupes(
v_id_groupe			VARCHAR(20)				NOT NULL,
v_id_classe			VARCHAR(20)				NOT NULL,
v_libelle			VARCHAR(100)			NOT NULL,
v_statut			VARCHAR(1)	DEFAULT 'I' NOT NULL,

CONSTRAINT PK_GROUPES 		PRIMARY KEY (v_id_groupe),
CONSTRAINT FK_GRO_CLAS		FOREIGN KEY (v_id_classe) REFERENCES classes(v_id_classe)
);

CREATE TABLE utilisateurs(
v_id_user			VARCHAR(20)				NOT NULL,
v_prenom			VARCHAR(50)				NOT NULL,
v_nom 				VARCHAR(50)				NOT NULL,
v_type				VARCHAR(1)	DEFAULT 'E'	NOT NULL,
v_login				VARCHAR(20)				NOT NULL,
v_mdp				VARCHAR(20)				NOT NULL,
v_statut			VARCHAR(1)	DEFAULT 'I' NOT NULL,

CONSTRAINT PK_UTILISATEURS 	PRIMARY KEY (v_id_user)
);

CREATE TABLE etudiants(
v_id_etu			VARCHAR(20)				NOT NULL,
v_id_carte			VARCHAR(20)				NOT NULL,
v_prenom			VARCHAR(50)				NOT NULL,
v_nom 				VARCHAR(50)				NOT NULL,
v_id_groupe			VARCHAR(20)				NOT NULL,
v_statut			VARCHAR(1)	DEFAULT 'I' NOT NULL,

CONSTRAINT PK_ETUDIANTS 	PRIMARY KEY (v_id_etu),
INDEX IX_CARTE	(v_id_carte),
CONSTRAINT FK_ETU_GROU		FOREIGN KEY (v_id_groupe) REFERENCES groupes(v_id_groupe)
);

CREATE TABLE absences(
v_id_abs			VARCHAR(20)				NOT NULL,
v_id_etu			VARCHAR(20)				NOT NULL,
d_abs				DATETIME 				NOT NULL,
v_just				VARCHAR(1)	DEFAULT 'N'	NOT NULL,
v_statut			VARCHAR(1)	DEFAULT 'I' NOT NULL,

CONSTRAINT PK_ABSENCES	PRIMARY KEY (v_id_abs),
CONSTRAINT FK_ABS_ETU	FOREIGN KEY (v_id_etu) REFERENCES etudiants(v_id_etu)
);

CREATE TABLE creneaux(
v_id_creneau		VARCHAR(20)				NOT NULL,
v_id_groupe			VARCHAR(20)				NOT NULL,
d_date_emarg		DATETIME				NOT NULL,
d_date_synchro		DATETIME				NOT NULL,
v_statut			VARCHAR(1)	DEFAULT 'I' NOT NULL,

CONSTRAINT PK_CRENEAUX		PRIMARY KEY (v_id_creneau),
CONSTRAINT FK_CREN_GROU		FOREIGN KEY (v_id_groupe) REFERENCES groupes(v_id_groupe)
);

CREATE TABLE emargements(
v_id_emarg			VARCHAR(20)				NOT NULL,
v_id_carte			VARCHAR(20)				NOT NULL,
d_date_emarg		DATETIME				NOT NULL,
d_date_synchro		DATETIME				NOT NULL,
v_statut			VARCHAR(1)	DEFAULT 'I' NOT NULL,

CONSTRAINT PK_EMARGEMENTS	PRIMARY KEY (v_id_emarg),
CONSTRAINT FK_EMA_ETU		FOREIGN KEY (v_id_carte) REFERENCES etudiants(v_id_carte)
);
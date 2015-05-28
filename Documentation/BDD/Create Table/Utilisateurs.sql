CREATE TABLE Utilisateurs(
v_id_user			VARCHAR(20)				NOT NULL,
v_prenom			VARCHAR(50)				NOT NULL,
v_nom 				VARCHAR(50)				NOT NULL,
v_type				VARCHAR(1)	DEFAULT 'E'	NOT NULL,
v_login				VARCHAR(20)				NOT NULL,
v_mdp				VARCHAR(20)				NOT NULL,
d_creat				DATETIME				NOT NULL,
v_id_user_creat		VARCHAR(20)				NOT NULL,
d_maj				DATETIME				NOT NULL,
v_id_user_maj		VARCHAR(20)				NOT NULL,
v_statut			VARCHAR(1)	DEFAULT 'I' NOT NULL,

CONSTRAINT PK_UTILISATEURS 	PRIMARY KEY (v_id_user)
);
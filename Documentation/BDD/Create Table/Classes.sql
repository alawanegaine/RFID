CREATE TABLE Classes(
v_id_classe			VARCHAR(20)				NOT NULL,
v_libelle			VARCHAR(100)			NOT NULL,
d_creat				DATETIME				NOT NULL,
v_id_user_creat		VARCHAR(20)				NOT NULL,
d_maj				DATETIME				NOT NULL,
v_id_user_maj		VARCHAR(20)				NOT NULL,
v_statut			VARCHAR(1)	DEFAULT 'I' NOT NULL,

CONSTRAINT PK_CLASSES	PRIMARY KEY (v_id_classe)
);
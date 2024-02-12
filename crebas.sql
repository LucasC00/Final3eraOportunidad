/* ---------------------------------------------------------------------- */
/* Script generated with: DeZign for Databases 13.0.4                     */
/* Target DBMS:           PostgreSQL 14                                   */
/* Project file:          Tercera.dez                                     */
/* Project name:          Tercera                                         */
/* Author:                                                                */
/* Script type:           Database creation script                        */
/* Created on:            2024-02-12 17:43                                */
/* ---------------------------------------------------------------------- */


/* ---------------------------------------------------------------------- */
/* Add tables                                                             */
/* ---------------------------------------------------------------------- */

/* ---------------------------------------------------------------------- */
/* Add table "clubes"                                                     */
/* ---------------------------------------------------------------------- */



CREATE TABLE clubes (
    id SERIAL  NOT NULL,
    nombre CHARACTER VARYING(40)  NOT NULL,
    fecha_fundacion DATE  NOT NULL,
    descripcion TEXT  NOT NULL,
    CONSTRAINT PK_clubes PRIMARY KEY (id)
);



/* ---------------------------------------------------------------------- */
/* Add table "paises"                                                     */
/* ---------------------------------------------------------------------- */



CREATE TABLE paises (
    id SERIAL  NOT NULL,
    nombre CHARACTER VARYING(40)  NOT NULL,
    CONSTRAINT PK_paises PRIMARY KEY (id)
);



/* ---------------------------------------------------------------------- */
/* Add table "posiciones"                                                 */
/* ---------------------------------------------------------------------- */



CREATE TABLE posiciones (
    id SERIAL  NOT NULL,
    nombre CHARACTER VARYING(40)  NOT NULL,
    CONSTRAINT PK_posiciones PRIMARY KEY (id)
);



/* ---------------------------------------------------------------------- */
/* Add table "usuarios"                                                   */
/* ---------------------------------------------------------------------- */



CREATE TABLE usuarios (
    id SERIAL  NOT NULL,
    email CHARACTER VARYING(40)  NOT NULL,
    password CHARACTER VARYING(50)  NOT NULL,
    CONSTRAINT PK_usuarios PRIMARY KEY (id)
);



/* ---------------------------------------------------------------------- */
/* Add table "jugadores"                                                  */
/* ---------------------------------------------------------------------- */



CREATE TABLE jugadores (
    id SERIAL  NOT NULL,
    club_id INTEGER  NOT NULL,
    posicion_id INTEGER  NOT NULL,
    nacionalidad_id INTEGER  NOT NULL,
    nombre CHARACTER VARYING(40)  NOT NULL,
    apellido CHARACTER VARYING(40)  NOT NULL,
    edad INTEGER  NOT NULL,
    nro_camiseta INTEGER,
    CONSTRAINT PK_jugadores PRIMARY KEY (id)
);



/* ---------------------------------------------------------------------- */
/* Add foreign key constraints                                            */
/* ---------------------------------------------------------------------- */

ALTER TABLE jugadores ADD CONSTRAINT clubes_jugadores 
    FOREIGN KEY (club_id) REFERENCES clubes (id);

ALTER TABLE jugadores ADD CONSTRAINT posiciones_jugadores 
    FOREIGN KEY (posicion_id) REFERENCES posiciones (id);

ALTER TABLE jugadores ADD CONSTRAINT paises_jugadores 
    FOREIGN KEY (nacionalidad_id) REFERENCES paises (id);


insert into clubes (nombre,fecha_fundacion,descripcion) values('Mi Club','2024-01-01','Este es mi club');

insert into paises (nombre) values('Paraguay');
insert into paises (nombre) values('Brasil');
insert into paises (nombre) values('Uruguay');
insert into paises (nombre) values('Bolivia');
insert into paises (nombre) values('Argentina');

insert into posiciones (nombre) values ('Arquero');
insert into posiciones (nombre) values ('Defensor');
insert into posiciones (nombre) values ('Centrocampista');
insert into posiciones (nombre) values ('Delantero');

INSERT INTO usuarios (email, password) VALUES
('usuario1@example.com', 'contraseña1'),
('usuario2@example.com', 'contraseña2'),
('usuario3@example.com', 'contraseña3');

INSERT INTO jugadores (club_id, posicion_id, nacionalidad_id, nombre, apellido, edad, nro_camiseta) VALUES
(1, 1, 1, 'Juan', 'Pérez', 25, 10);,
(1, 2, 2, 'Luis', 'Gómez', 28, 7),
(1, 3, 3, 'Carlos', 'Rodríguez', 23, 14);







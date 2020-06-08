CREATE SCHEMA IF NOT EXISTS academia5 DEFAULT CHARACTER SET utf8 ;
USE academia5;

CREATE TABLE IF NOT EXISTS  usuarios  (
   id_usuario  INT NOT NULL,
   email  VARCHAR(45) NOT NULL,
   fecha_alta  DATE NOT NULL,
   contrasena  VARCHAR(45) NOT NULL,
   nombre  VARCHAR(45) NOT NULL,
   ciudad_residencia  VARCHAR(45) NULL,
   usuarioscol  VARCHAR(45) NOT NULL,
  PRIMARY KEY ( id_usuario ));

CREATE TABLE IF NOT EXISTS  estudiante  (
   id_estudiante  INT NOT NULL,
   estudios  VARCHAR(45) NULL,
   usuarios_id_usuario  INT NOT NULL,
  PRIMARY KEY ( usuarios_id_usuario ),
    FOREIGN KEY ( usuarios_id_usuario )
    REFERENCES  usuarios  ( id_usuario )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS profesor  (
   id_profesor  INT NOT NULL,
   usuarios_id_usuario  INT NOT NULL,
   especialidad  VARCHAR(45) NOT NULL,
   foto  VARCHAR(45) NOT NULL,
   valoracion  DECIMAL NOT NULL,
  PRIMARY KEY ( usuarios_id_usuario ),
    FOREIGN KEY ( usuarios_id_usuario )
    REFERENCES  usuarios  ( id_usuario )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS curso  (
   id_curso  INT NOT NULL,
   nombre  VARCHAR(45) NOT NULL,
   precio  DECIMAL(3) NOT NULL,
   duracion  DECIMAL(4) NOT NULL,
   lecciones_curso  INT NOT NULL,
   valoracion  DECIMAL NOT NULL,
   profesor_usuarios_id_usuario  INT NOT NULL,
  PRIMARY KEY ( id_curso ,  profesor_usuarios_id_usuario ),
    FOREIGN KEY ( profesor_usuarios_id_usuario )
    REFERENCES profesor  ( usuarios_id_usuario )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS  cursos_en_propiedad  (
   estudiante_usuarios_id_usuario  INT NOT NULL,
   curso_id_curso  INT NOT NULL,
   curso_profesor_usuarios_id_usuario  INT NOT NULL,
  PRIMARY KEY ( estudiante_usuarios_id_usuario ,  curso_id_curso ,  curso_profesor_usuarios_id_usuario ),
    FOREIGN KEY ( estudiante_usuarios_id_usuario )
    REFERENCES estudiante  ( usuarios_id_usuario )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY ( curso_id_curso  ,  curso_profesor_usuarios_id_usuario )
    REFERENCES  curso  ( id_curso  ,  profesor_usuarios_id_usuario )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS  factura  (
   fecha_compra  DATE NOT NULL,
   precio  DECIMAL NULL,
   cursos_en_propiedad_estudiante_usuarios_id_usuario  INT NOT NULL,
   cursos_en_propiedad_curso_id_curso  INT NOT NULL,
   cursos_en_propiedad_curso_profesor_usuarios_id_usuario  INT NOT NULL,
  FOREIGN KEY ( cursos_en_propiedad_estudiante_usuarios_id_usuario  ,  cursos_en_propiedad_curso_id_curso  ,  cursos_en_propiedad_curso_profesor_usuarios_id_usuario )
    REFERENCES cursos_en_propiedad  ( estudiante_usuarios_id_usuario  ,  curso_id_curso  ,  curso_profesor_usuarios_id_usuario )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

	CREATE TABLE IF NOT EXISTS pregunta_respuesta  (
   id_pregunta  INT NOT NULL AUTO_INCREMENT,
   texto_respuesta  VARCHAR(45) NOT NULL,
   texto_pregunta  VARCHAR(45) NOT NULL,
   fecha_pregunta  DATE NOT NULL,
   fecha_respuesta  DATE NOT NULL,
   estudiante_usuarios_id_usuario  INT NOT NULL,
   profesor_usuarios_id_usuario  INT NOT NULL,
  PRIMARY KEY ( id_pregunta ,  estudiante_usuarios_id_usuario ,  profesor_usuarios_id_usuario ),
    FOREIGN KEY ( estudiante_usuarios_id_usuario )
    REFERENCES  estudiante  ( usuarios_id_usuario )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY ( profesor_usuarios_id_usuario )
    REFERENCES  profesor  ( usuarios_id_usuario )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS  interacciones  (
   id_interacciones  INT NOT NULL,
   fecha  DATETIME NOT NULL,
   texto  VARCHAR(45) NOT NULL,
   pregunta_respuesta_id_pregunta  INT NOT NULL,
   pregunta_respuesta_estudiante_usuarios_id_usuario  INT NOT NULL,
   pregunta_respuesta_profesor_usuarios_id_usuario  INT NOT NULL,
  PRIMARY KEY ( id_interacciones ),
 FOREIGN KEY ( pregunta_respuesta_id_pregunta  ,  pregunta_respuesta_estudiante_usuarios_id_usuario  ,  pregunta_respuesta_profesor_usuarios_id_usuario )
    REFERENCES  pregunta_respuesta  ( id_pregunta  ,  estudiante_usuarios_id_usuario  ,  profesor_usuarios_id_usuario )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

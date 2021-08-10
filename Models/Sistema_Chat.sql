CREATE TABLE Roles (
  idRoles INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Nombre  VARCHAR (50) NULL,
  Descripcion TEXT NULL,
  PRIMARY KEY(idRoles)
);

CREATE TABLE Estado (
  idEstado INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  DardeBaja_2 VARCHAR (50) NULL,
  Motivo TEXT NULL,
  PRIMARY KEY(idEstado)
);

CREATE TABLE Depto (
  idDepto INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Codigo VARCHAR (50) NULL,
  Nombre VARCHAR (50) NULL,
  Descripcion TEXT NULL,
  PRIMARY KEY(idDepto)
);

CREATE TABLE Usuario (
  idUsuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Depto_idDepto INTEGER UNSIGNED NOT NULL,
  Estado_idEstado INTEGER UNSIGNED NOT NULL,
  Roles_idRoles INTEGER UNSIGNED NOT NULL,
  Nombre VARCHAR (50) NULL,
  Apellido VARCHAR (50) NULL,
  Correo VARCHAR (50) NULL,
  Contrasena VARCHAR (50) NULL,
  PRIMARY KEY(idUsuario),
  INDEX Usuario_FKIndex1(Roles_idRoles),
  INDEX Usuario_FKIndex2(Estado_idEstado),
  INDEX Usuario_FKIndex3(Depto_idDepto)
);

CREATE TABLE Mensaje (
  idMensaje INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Depto_idDepto INTEGER UNSIGNED NOT NULL,
  Usuario_idUsuario INTEGER UNSIGNED NOT NULL,
  Mensaje TEXT NULL,
  PRIMARY KEY(idMensaje),
  INDEX Mensaje_FKIndex1(Usuario_idUsuario),
  INDEX Mensaje_FKIndex2(Depto_idDepto)
);



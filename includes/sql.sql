
CREATE DATABASE bd_explora_san_luis;
USE bd_explora_san_luis;

-- 1. Tablas Maestras (No dependen de nadie)
CREATE TABLE tl_roles (
    id_rol INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255)
);



-- 2. Tablas con Dependencias Simples
CREATE TABLE tl_usuarios (
    id_usuario INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255),
    email VARCHAR(255) UNIQUE NOT NULL,
    contrasena VARCHAR(255) NULL,
    id_google VARCHAR(255) UNIQUE NULL,-- Aquí se guarda el ID que te devuelve la API de Google
    verificado BOOLEAN DEFAULT FALSE, -- Para saber si confirmó su correo
    token_verificacion VARCHAR(255) NULL, -- Código enviado al correo
    id_rol INT,
    estado TINYINT NOT NULL DEFAULT 1,
    codigo_verificacion VARCHAR(6) NULL,
    
    -- Campos esenciales para JWT y Seguridad:
    refresh_token TEXT NULL, -- Para renovar el acceso sin pedir login otra vez
    token_version INT DEFAULT 1, -- Para invalidar todos los tokens si hay un hackeo
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP,
    
    FOREIGN KEY (id_rol) REFERENCES tl_roles(id_rol)
);

-- 2. Lugares (Regiones/Municipios)
CREATE TABLE lugares (
    id_lugar INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    departamento VARCHAR(100) NOT NULL,
    descripcion TEXT,
    estado TINYINT NOT NULL DEFAULT 1,
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tl_tipo_entidad (
    id_tipo INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255)
);


--  Entidades (Hoteles, Restaurantes, etc.)
CREATE TABLE tl_entidades (
    id_entidad INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_tipo INT,
    id_lugar INT NOT NULL,
    nombre_comercial VARCHAR(255),
    razon_social VARCHAR(100) NOT NULL,
    descripcion VARCHAR(500),
    hora_atencion VARCHAR(100) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    telefono VARCHAR(50) NOT NULL,
    rut VARCHAR(255),
    tipo_especifico VARCHAR(100), -- Ejemplo: 'restaurante bar'
    estado TINYINT NOT NULL DEFAULT 1, -- usams este campo para no tener que borrar entidades si no cambiarle el estado , y usamos TINYINT por q ocupa un BYTE encambio ENUM ocupa mas 
    sitio_web VARCHAR(255),
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_tipo) REFERENCES tl_tipo_entidad(id_tipo),
    FOREIGN KEY (id_lugar) REFERENCES lugares(id_lugar)
);

select * from tl_tipo_entidad;

-- 5. Imágenes de Entidades (Uno a Muchos)
CREATE TABLE imagenes_entidades (
    id_ INT AUTO_INCREMENT PRIMARY KEY,
    id_entidad INT NOT NULL,
    url_imagen_principal VARCHAR(255) NOT NULL,
    url_imagen_tipo_logo VARCHAR(255) NOT NULL,
    descripcion VARCHAR(100),
    CONSTRAINT fk_img_entidad FOREIGN KEY (id_entidad) REFERENCES tl_entidades(id_entidad) ON DELETE CASCADE
);

-- 6. Eventos
CREATE TABLE eventos (
    id_evento INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    fecha_inicio DATE,
    fecha_fin DATE,
    id_lugar INT NOT NULL,
    estado TINYINT NOT NULL DEFAULT 1,
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_evento_lugar FOREIGN KEY (id_lugar) REFERENCES lugares(id_lugar)
);

CREATE TABLE tl_resenas (
    id_resena INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    fecha DATE,
    comentario VARCHAR(255),
    estado TINYINT NOT NULL DEFAULT 1,
    id_usuario INT,
    FOREIGN KEY (id_usuario) REFERENCES tl_usuarios(id_usuario)
);
-- insercciones iniciales
insert into tl_roles(nombre) values ('admin'),('usuario'); -- roles iniciales
-- la contraseña es 123456 cuando se vaya a escribir en la pagina
insert into tl_usuarios(nombre,email,contrasena,id_rol,verificado) values ('admin','admin@admin.com','$2y$10$SGNCKhrJooXc42l.kv2LTOetnlmachpJJc.II0tlYTKi0BhD8/BMO',1,1);

-- codigo para insetar los tipos de entidades
insert into tl_tipo_entidad (nombre) 
values ('gastronomia'),
('recreacion'),('alojamiento'),
('transporte'),('agencias turisticas'),('sitios turisticos');





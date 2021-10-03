CREATE DATABASE cardel_decoration;
USE cardel_decoration;

CREATE TABLE Clientes(
ClienteId INT UNSIGNED NOT NULL AUTO_INCREMENT,
Nombre VARCHAR(50) NOT NULL,
Apellido VARCHAR(50) NOT NULL,
DUI VARCHAR(10) NULL,
Direccion VARCHAR(100) NOT NULL,
Telefono VARCHAR(200) NOT NULL,
PRIMARY KEY(ClienteId)
);
SELECT * FROM clientes;

INSERT INTO Clientes VALUES
(0,'Juan','Perez','12345678-9','San Miguel','76439283');

INSERT INTO Clientes VALUES
(0,'Francisco','Zamora','82918381-8', 'Usulután','83940276'),
(0,'María', 'Hernández', '61458237-9','Morazán','59327619'),
(0,'Fátima', 'Cáceres','44582803-9','San Miguel','71916920'),
(0,'José', 'Sorto','57447153-4','San Miguel','62840709'),
(0,'Joseline', 'Soto', '91475504-3','La Unión',' 65857737'),
(0,'Rafael', 'Vazquéz', '94963168-4', 'San Vicente','87824310'),
(0,'Roberto', 'Peréz','16454869-8','Cabañas','84831579');
CREATE TABLE categorias(
CategoriaId INT UNSIGNED NOT NULL AUTO_INCREMENT,
Nombre VARCHAR(100) NOT NULL,
Descripcion VARCHAR(200) NOT NULL,
PRIMARY KEY (CategoriaId)
);

INSERT INTO Categorias VALUES 
(0,'Flores Naturales', 'Categoría para arreglos florales y ramos'),
(0,'Cajas madera','Categoría para cajas hechas de madera decoradas'),
(0,'Cajas cartoncillo','Categoría para cajas hechas de cartoncillo decoradas'),
(0,'Cuadros','Categoria para cuadros personalizados'),
(0,'Globos','Categoría para globos personalizados'),
(0,'Portarretratos','Categoría para portarretratos personalizados'),
(0,'Dulceras','Categoría para diferentes dulceras decoradas'),
(0,'Albumes','Categoría para albumes personaizados'),
(0,'Centros de mesa','Categoría para centro de mesas decorados de diferentes materiales'),
(0,'Paquetes','Categoría para paquetes de eventos sociales'),
(0,'Decoraciones varias','Categorías para decoraciones varias individuales');
SELECT * FROM Productos;

CREATE TABLE Productos(
ProductoId INT UNSIGNED NOT NULL AUTO_INCREMENT,
Nombre VARCHAR(100) NOT NULL,
Precio DECIMAL(7,2) NOT NULL,
CategoriaId INT UNSIGNED NOT NULL,
Descripcion VARCHAR(200) NOT NULL,
PRIMARY KEY(ProductoId),
CONSTRAINT FK_CAT_PRO_ID FOREIGN KEY(Categoriaid) REFERENCES categorias(CategoriaId) ON UPDATE CASCADE
);
INSERT INTO Productos VALUES
(0,'Caja con arreglo de flores en su interior','30.25',2,'Caja con arreglo de flores de tu preferencia en su interior'),
(0,'Caja con flores en su interior','30.25',2,'Caja de flores en su interior con el color que prefieras'),
(0,'Caja con flores y dulces','30.00',2,'Caja con arreglo de flores en su interior acompañado con dulces'),
(0,'Caja de madera personalizada','15.00',2,'Caja de madera pintada y decorada a tu gusto'),
(0,'Caja de cartón personalizada','15.00',3,'Caja de cartón personalizada'),
(0,'Caja de cartón forrada','20.00',3,'Caja de cartón forrada y personalizada'),
(0,'Caja de cartón con despliegue','25.00',3,'Caja de cartón con despliegues laterales'),
(0,'Caja larga de cartón personalizada','25.00',3,'Caja larga de cartón personalizada'),
(0,'Caja de madera pequeña','10.00',2,'Caja de madera pintada y personalizada'),
(0,'Manualidad de corazón con luces LED','30.00',11,'Manualidad en forma de corazón y con luces LED'),
(0,'Cuadro collage con luces LED','35.00',4,'Cuadro collage acompañado con luces LED'),
(0,'Manualidad  de carta desplegable personalizada','35.00',11,'Manualidad desplegable con imágenes personalizadas'),
(0,'Manualidad de carta desplegable','5.00',11,'Manualidad de carta desplegable personalizada'),
(0,'Manualidad de entretenimiento','15.00',11,'Manualidad de cartón para entretenimiento');

SELECT * FROM Productos;



CREATE TABLE Usuarios(
UsuarioId INT UNSIGNED AUTO_INCREMENT NOT NULL,
Nombre VARCHAR(255) NULL,
Apellido VARCHAR(255) NULL,
Correo VARCHAR(255) NOT NULL,
Usuario VARCHAR(20) NOT NULL,
Password VARCHAR(100) NULL,
PRIMARY KEY(UsuarioId)
);
SELECT * FROM usuarios;
INSERT INTO usuarios VALUES
(0,'Gabriela','Zamora','gabriela.zamora99@hotmail.com','gabyzamora','gabyzamo'),
(0,'Sheyla','Guidos','sheylaguidos@gmail.com','sheylaguidos','sheyguidos'),
(0,'Carmen','Andrade','carmenandrade@gmail.com','carmenandrade','carmenandrade1');
INSERT INTO usuarios VALUES
(0,'Gaby','Zamora','gabriela.zamora99@gmail.com','admin','admin');

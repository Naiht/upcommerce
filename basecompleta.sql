create table usuarios(
id_usuario int NOT NULL AUTO_INCREMENT primary key,
nombres nvarchar(70),
apellidos nvarchar(70),
email nvarchar(100),
contra nvarchar(50)
);


create table usuario_rol(
id_rol int not null,
id_usuario int not null,
FOREIGN KEY (id_rol) REFERENCES roles(id_rol),
FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
);


create table roles(
id_rol int NOT NULL AUTO_INCREMENT primary key,
nombre nvarchar(20)
);

create table tiendas(
id_tienda INT NOT NULL AUTO_INCREMENT primary key,
id_usuario int,
nombre_t nvarchar(50),
color_ban nvarchar(50),
creacion_fecha date,
foto LONGBLOB 
);


create table cat_tiendas_u(
id_categ int not null,
id_tienda int not null,
FOREIGN KEY (id_categ) REFERENCES categorias_tienda(id_categ),
FOREIGN KEY (id_tienda) REFERENCES tiendas(id_tienda)
);

create table categorias_tienda(
id_categ INT NOT NULL AUTO_INCREMENT primary key,
nombre varchar(30)
);


create table categ_prod(
id_cat_prod INT NOT NULL AUTO_INCREMENT primary key,
nombrecatp varchar(50)
);

create table productos(
id_producto INT NOT NULL AUTO_INCREMENT primary key,
nombrep nvarchar(100),
descripcion nvarchar(500),
id_tienda int,
precio float,
fecha_publi date,
cantidad int,
estado_venta boolean,
id_cat_prod int,
FOREIGN KEY (id_cat_prod) REFERENCES categ_prod(id_cat_prod),
foto LONGBLOB 
);



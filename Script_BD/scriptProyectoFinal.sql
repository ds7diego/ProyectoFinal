CREATE TABLE Departamento (
	Codigo_Departamento integer not null,
	Nombre_Departamento varchar(20),
	primary key (Codigo_Departamento)

);

CREATE TABLE Jornadas_Laborales (
	Codigo_Jornada integer not null,
	Nombre_Jornada varchar (20),
	Hora_entrada varchar (20),
	Hora_salida varchar (20),
	primary key (Codigo_Jornada)
);

CREATE TABLE Empleado (
	Codigo_empleado integer not null,
	Nombre varchar (20),
	Codigo_Jornada integer,
	primary key (Codigo_empleado),
	foreign key (Codigo_Jornada) REFERENCES Jornadas_Laborales (Codigo_Jornada)
);

CREATE TABLE Permisos (
	Codigo_permiso integer not null,
	Codigo_empleado integer not null,
	Fecha_permiso date,
	motivo_falta varchar(50),
	primary key (Codigo_permiso),
	foreign key (Codigo_empleado) REFERENCES Empleado (Codigo_empleado)
);

CREATE TABLE Departamento_Empleado (
	Codigo_Departamento integer not null,
	Codigo_empleado integer not null,
	foreign key (Codigo_empleado) REFERENCES Empleado (Codigo_empleado),
	foreign key (Codigo_Departamento) REFERENCES Departamento (Codigo_Departamento)
);
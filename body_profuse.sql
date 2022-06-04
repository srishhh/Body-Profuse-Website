SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
create database body_profuse;
use body_profuse;
create table 'admin' (
'userID' varchar(200) not null,
'pwd' varchar(200),
primary key ('userID')
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
create table 'user' (
'userID' varchar(200) not null,
'pwd' varchar(200),
'name' varchar(200),
'address' varchar(200),
'phone' varchar(200),
primary key ('userID')
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
create table 'procedure_types' (
'procedure' varchar(200) not null,
primary key ('procedure')
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
create table 'appointment' (
'userID' varchar(200) not null,
'name' varchar(200),
'date' varchar(200),
'time' varchar(200),
'procedure' varchar(200) not null,
primary key ('userID'),
primary key ('procedure')
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
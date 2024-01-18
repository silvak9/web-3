create database aula_18;
use aula_18;
create table setor (
	codigo int not null primary key auto_increment,
    setor varchar(100)
);
create table nivel(
	codigo int not null primary key auto_increment,
    nivel varchar(50),
    salario float,
    setor_codigo int,
    foreign key (setor_codigo) references setor(codigo)
    );
create table funcionarios(
	codigo int not null primary key auto_increment,
    nome varchar(100),
    nivel_codigo int,
    foreign key (nivel_codigo) references nivel(codigo)
    );


-- Games.sql

create database games;
use games;

create table game (
	id int auto_increment primary key,
    name varchar(255) not null,
    year int
);

insert into game (name, year)
    values
    ('Halo', 2008),
    ('Mass Effect', 2005),
    ('Contra', 1986),
    ('Super Mario', 1985),
    ('Castlevania', 1943),
    ('Zelda', 1998);
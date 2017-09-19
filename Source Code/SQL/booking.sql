# create database
create database if not exists Cars;

# use the database
use Cars;

# make the table
create table if not exists booking(
	id serial not null primary key,
	custname varchar(50),
	pickdate date,
	dropdate date,
	picklocation varchar(50),
	droplocation varchar(50),
	carid int(11)
);

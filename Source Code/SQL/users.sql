create database if not exists Cars;

use Cars;

create table if not exists users(
	id serial not null primary key,
	username varchar(30),
	password char(40),
  email	varchar(40),
	firstname varchar(20),
	lastname varchar(20),
  gender varchar(20),
  dob  varchar(30),
	phone varchar(20),
  street varchar(50),
  suburb varchar(30),
  state varchar(20),
  postcode varchar(20),
  country varchar(20),
  rego datetime
);

insert into users (id, username, password, email, firstname, lastname, gender, dob, phone, street, suburb, state, postcode, country, rego)
              values (null,'admin', Sha('admin'),'admin@mcm.com','admin','admin', 'male', '05/07/1996','04123456789','123 admin st','admintown','vic','1234','australia', now());

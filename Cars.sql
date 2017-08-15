CREATE DATABASE Cars;

USE Cars;

CREATE TABLE IF NOT EXISTS user
(
  id serial primary key,
  username varchar(20), 
  password char(40)
);

insert into user values (null, 'admin', Sha('123'));




use mccrewco_cars;

create table if not exists admins(
	id serial not null primary key,
	username varchar(30),
	password char(50),
  email	varchar(40),
	firstname varchar(20),
	lastname varchar(20),
	code char(50)
);

insert into admins (id, username, password, email, firstname, lastname, code)
              values (null,'joleanisaac', Sha('jozz69'),'joleanisaac@mcm.com','Jolean','Isaac', Sha('C0129'));

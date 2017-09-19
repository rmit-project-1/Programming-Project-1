# create database
create database if not exists Cars;

# use the database
use Cars;

# make the table
create table if not exists fleet(
	id serial not null primary key,
	tier varchar(30),
	make varchar(30),
	year varchar(20),
	model varchar(30),
	engine varchar(40),
	power varchar(20),
	img  varchar(100),
	booked boolean,
	cost varchar(30),
	location varchar(40)
);

	#
	# Tier 1 Cars Richmond
	#-------------
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '1', 'Nissan','2015','GTR','6cyl 3.8L TwinTurbo','447KW','img/cars/tier 1/gtr.jpg', true, '$1100', 'Richmond');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '1', 'BMW','2016','M4','6cyl 3.0L Twin Turbo','317KW','img/cars/tier 1/m4.jpg', true, '$850', 'Richmond');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '1', 'Jaguar','2016','F-Type','8cyl 5.0L','364KW','img/cars/tier 1/f_type.jpg', true, '$900', 'Richmond');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '1', 'Ford','2016','Mustang GT','8cyl 5.0L','330Kw','img/cars/tier 1/mustang_gt.jpg', true,'$800', 'Richmond');
	#
	# Tier 2 Cars Richmond
	#-------------
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '2', 'McLaren','2015','650S','8cyl 3.8L','477KW','img/cars/tier 2/650s.jpg', true, '$1400', 'Richmond');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '2', 'Ferrari','2013','458 Speciale','8cyl 4.5L','445KW','img/cars/tier 2/ferrari_458_speciale.jpg', true, '$1300', 'Richmond');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '2', 'Mercedes-Benz','2015','AMG GTS','8cyl 4.0L','375KW','img/cars/tier 2/amg_gts.jpg', true, '$1350', 'Richmond');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '2', 'Audi','2016','R8 v10','10cyl 5.2L','452KW','img/cars/tier 2/r8.jpg', true, '$1500' , 'Richmond');
	#
	# Tier 3 Cars Richmond
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '3', 'McLaren','2014','P1','8cyl 3.8L','674KW','img/cars/tier 3/p1.jpg', true, '$1800', 'Richmond');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '3', 'Koenigsegg','2015','One:1','8cyl 5.0L Twin Turbo','1000KW','img/cars/tier 3/one_1.jpg', false, '$2600', 'Richmond');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '3', 'Pagani','2012','Huayra','12cyl 6.0L Bi Turbo','522KW','img/cars/tier 3/huayra.jpg',  false, '$2200', 'Richmond');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '3', 'Lamborghini','2013','Aventador','12cyl 6.5L','510KW','img/cars/tier 3/aventor.jpg', true, '$1800', 'Richmond');
	#
	#---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	# Tier 1 Cars West Melbourne
	#-------------
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '1', 'Nissan','2015','GTR','6cyl 3.8L TwinTurbo','447KW','img/cars/tier 1/gtr.jpg', true, '$1100', 'West Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '1', 'BMW','2016','M4','6cyl 3.0L Twin Turbo','317KW','img/cars/tier 1/m4.jpg', true, '$850', 'West Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '1', 'Jaguar','2016','F-Type','8cyl 5.0L','364KW','img/cars/tier 1/f_type.jpg', false, '$900', 'West Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '1', 'Ford','2016','Mustang GT','8cyl 5.0L','330Kw','img/cars/tier 1/mustang_gt.jpg', true,'$800', 'West Melbourne');
	#
	# Tier 2 Cars West Melbourne
	#-------------
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '2', 'McLaren','2015','650S','8cyl 3.8L','477KW','img/cars/tier 2/650s.jpg', true, '$1400', 'West Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '2', 'Ferrari','2013','458 Speciale','8cyl 4.5L','445KW','img/cars/tier 2/ferrari_458_speciale.jpg', true, '$1300', 'West Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '2', 'Mercedes-Benz','2015','AMG GTS','8cyl 4.0L','375KW','img/cars/tier 2/amg_gts.jpg', true, '$1350', 'West Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '2', 'Audi','2016','R8 v10','10cyl 5.2L','452KW','img/cars/tier 2/r8.jpg', false, '$1500' , 'West Melbourne');
	#
	# Tier 3 Cars West Melbourne
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '3', 'McLaren','2014','P1','8cyl 3.8L','674KW','img/cars/tier 3/p1.jpg', true, '$1800', 'West Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '3', 'Koenigsegg','2015','One:1','8cyl 5.0L Twin Turbo','1000KW','img/cars/tier 3/one_1.jpg', false, '$2600', 'West Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '3', 'Pagani','2012','Huayra','12cyl 6.0L Bi Turbo','522KW','img/cars/tier 3/huayra.jpg',  true, '$2200', 'West Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '3', 'Lamborghini','2013','Aventador','12cyl 6.5L','510KW','img/cars/tier 3/aventor.jpg', false, '$1800', 'West Melbourne');
	#
	#---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	# Tier 1 Cars South Bank
	#-------------
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '1', 'Nissan','2015','GTR','6cyl 3.8L TwinTurbo','447KW','img/cars/tier 1/gtr.jpg', true, '$1100', 'South Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '1', 'BMW','2016','M4','6cyl 3.0L Twin Turbo','317KW','img/cars/tier 1/m4.jpg', true, '$850', 'South Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '1', 'Jaguar','2016','F-Type','8cyl 5.0L','364KW','img/cars/tier 1/f_type.jpg', false, '$900', 'South Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '1', 'Ford','2016','Mustang GT','8cyl 5.0L','330Kw','img/cars/tier 1/mustang_gt.jpg', false,'$800', 'South Melbourne');
	#
	# Tier 2 Cars South Bank
	#-------------
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '2', 'McLaren','2015','650S','8cyl 3.8L','477KW','img/cars/tier 2/650s.jpg', true, '$1400', 'South Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '2', 'Ferrari','2013','458 Speciale','8cyl 4.5L','445KW','img/cars/tier 2/ferrari_458_speciale.jpg', true, '$1300', 'South Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '2', 'Mercedes-Benz','2015','AMG GTS','8cyl 4.0L','375KW','img/cars/tier 2/amg_gts.jpg', true, '$1350', 'South Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '2', 'Audi','2016','R8 v10','10cyl 5.2L','452KW','img/cars/tier 2/r8.jpg', false, '$1500' , 'South Melbourne');
	#
	# Tier 3 Cars South Bank
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '3', 'McLaren','2014','P1','8cyl 3.8L','674KW','img/cars/tier 3/p1.jpg', true, '$1800', 'South Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '3', 'Koenigsegg','2015','One:1','8cyl 5.0L Twin Turbo','1000KW','img/cars/tier 3/one_1.jpg', true, '$2600', 'South Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '3', 'Pagani','2012','Huayra','12cyl 6.0L Bi Turbo','522KW','img/cars/tier 3/huayra.jpg',  true, '$2200', 'South Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '3', 'Lamborghini','2013','Aventador','12cyl 6.5L','510KW','img/cars/tier 3/aventor.jpg', false, '$1800', 'South Melbourne');
	#
	#---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	# Tier 1 Cars North Meblourne
	#-------------
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '1', 'Nissan','2015','GTR','6cyl 3.8L TwinTurbo','447KW','img/cars/tier 1/gtr.jpg', true, '$1100', 'North Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '1', 'BMW','2016','M4','6cyl 3.0L Twin Turbo','317KW','img/cars/tier 1/m4.jpg', true, '$850', 'North Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '1', 'Jaguar','2016','F-Type','8cyl 5.0L','364KW','img/cars/tier 1/f_type.jpg', false, '$900', 'North Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '1', 'Ford','2016','Mustang GT','8cyl 5.0L','330Kw','img/cars/tier 1/mustang_gt.jpg', false,'$800', 'North Melbourne');
	#
	# Tier 2 Cars North Meblourne
	#-------------
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '2', 'McLaren','2015','650S','8cyl 3.8L','477KW','img/cars/tier 2/650s.jpg', true, '$1400', 'North Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '2', 'Ferrari','2013','458 Speciale','8cyl 4.5L','445KW','img/cars/tier 2/ferrari_458_speciale.jpg', true, '$1300', 'North Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '2', 'Mercedes-Benz','2015','AMG GTS','8cyl 4.0L','375KW','img/cars/tier 2/amg_gts.jpg', true, '$1350', 'North Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '2', 'Audi','2016','R8 v10','10cyl 5.2L','452KW','img/cars/tier 2/r8.jpg', false, '$1500' , 'North Melbourne');
	#
	# Tier 3 Cars North Meblourne
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '3', 'McLaren','2014','P1','8cyl 3.8L','674KW','img/cars/tier 3/p1.jpg', false, '$1800', 'North Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '3', 'Koenigsegg','2015','One:1','8cyl 5.0L Twin Turbo','1000KW','img/cars/tier 3/one_1.jpg', false, '$2600', 'North Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '3', 'Pagani','2012','Huayra','12cyl 6.0L Bi Turbo','522KW','img/cars/tier 3/huayra.jpg',  true, '$2200', 'North Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '3', 'Lamborghini','2013','Aventador','12cyl 6.5L','510KW','img/cars/tier 3/aventor.jpg', true, '$1800', 'North Melbourne');
	#
	#---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	# Tier 1 Cars Port Meblourne
	#-------------
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '1', 'Nissan','2015','GTR','6cyl 3.8L TwinTurbo','447KW','img/cars/tier 1/gtr.jpg', true, '$1100', 'Port Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '1', 'BMW','2016','M4','6cyl 3.0L Twin Turbo','317KW','img/cars/tier 1/m4.jpg', true, '$850', 'Port Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '1', 'Jaguar','2016','F-Type','8cyl 5.0L','364KW','img/cars/tier 1/f_type.jpg', true, '$900', 'Port Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '1', 'Ford','2016','Mustang GT','8cyl 5.0L','330Kw','img/cars/tier 1/mustang_gt.jpg', true,'$800', 'Port Melbourne');
	#
	# Tier 2 Cars Port Meblourne
	#-------------
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '2', 'McLaren','2015','650S','8cyl 3.8L','477KW','img/cars/tier 2/650s.jpg', true, '$1400', 'Port Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '2', 'Ferrari','2013','458 Speciale','8cyl 4.5L','445KW','img/cars/tier 2/ferrari_458_speciale.jpg', true, '$1300', 'Port Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '2', 'Mercedes-Benz','2015','AMG GTS','8cyl 4.0L','375KW','img/cars/tier 2/amg_gts.jpg', true, '$1350', 'Port Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '2', 'Audi','2016','R8 v10','10cyl 5.2L','452KW','img/cars/tier 2/r8.jpg', true, '$1500' , 'Port Melbourne');
	#
	# Tier 3 Cars Port Meblourne
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '3', 'McLaren','2014','P1','8cyl 3.8L','674KW','img/cars/tier 3/p1.jpg', true, '$1800', 'Port Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '3', 'Koenigsegg','2015','One:1','8cyl 5.0L Twin Turbo','1000KW','img/cars/tier 3/one_1.jpg', true, '$2600', 'Port Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '3', 'Pagani','2012','Huayra','12cyl 6.0L Bi Turbo','522KW','img/cars/tier 3/huayra.jpg',  true, '$2200', 'Port Melbourne');
insert into fleet (id, tier, make, year, model, engine, power, img, booked, cost, location) values (null, '3', 'Lamborghini','2013','Aventador','12cyl 6.5L','510KW','img/cars/tier 3/aventor.jpg', true, '$1800', 'Port Melbourne');

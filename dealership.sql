drop database if exists dealership;
 create database dealership;
 use dealership;
 create table employee(
	   	id integer auto_increment,
	   	firstname varchar(30),
	     surname varchar(30),
	     employeetype varchar(20),
	     dateofbirth date,
	     created_at datetime,
	     updated_at datetime,
	     deleted_at datetime,
	     primary key (id)
 );
 
 
 create table Car(
		id integer auto_increment,
		car_name varchar(30),
		manufacture_year varchar (30),
		car_price decimal(9,2),
		fuel_type varchar(20),
		on_sale boolean not null DEFAULT 0,
		created_at datetime,
      updated_at datetime,
      deleted_at datetime,
		primary key (id)
);

 create table Shift(
 	id integer auto_increment,
    employee_id integer,
    day_of_week varchar(30),
    start_time time,
    end_time time,
    created_at datetime,
    updated_at datetime,
    deleted_at datetime,
    primary key(id)
    
);


create table customer (
	id integer auto_increment,
  first_name varchar(30),
  last_name varchar(30),
  phone_number varchar(20),
  email varchar(30),
  address varchar(30),
  created_at DATETIME,
  updated_at DATETIME,
  deleted_at datetime,
  primary key(id)
);


create table Sale(
	id integer auto_increment,
	sale_price DECIMAL(8,2),
	sale_date date,
	customer_id integer,
	customer_name varchar(30),
	payment_type varchar(30),
	created_at datetime,
   updated_at datetime,
   deleted_at datetime,
	primary key(id),
	foreign key(customer_id) references customer(id)
);



		
		
 
 
insert into employee (firstname,surname,employeetype,dateofbirth) values ('james','brown','manager','2000-01-31');
insert into employee (firstname,surname,employeetype,dateofbirth) values ('ryan','barnes','receptionist','1985-10-28');
insert into employee (firstname,surname,employeetype,dateofbirth) values ('john','homes','dealer','1993-08-01');
insert into employee (firstname,surname,employeetype,dateofbirth) values ('lisa','hammond','dealer','1999-03-03');
insert into employee (firstname,surname,employeetype,dateofbirth) values ('alex','gibson','dealer','2007-09-29');
insert into employee (firstname,surname,employeetype,dateofbirth) values ('barry','bradshaw','manager','1979-12-19');
 
insert into Car (car_name,manufacture_year,car_price,fuel_type,on_sale)values ('Toyota', '2021', 25000.00, 'Petrol', 1);
insert into Car (car_name,manufacture_year,car_price,fuel_type,on_sale)values ('Honda', '2020', 20000.00, 'Petrol', 0);
insert into Car (car_name,manufacture_year,car_price,fuel_type,on_sale)values ('Tesla', '2022', 80000.00, 'Electric', 1);
insert into Car (car_name,manufacture_year,car_price,fuel_type,on_sale)values ('Ford', '2019', 35000.00, 'Electric', 0);
insert into Car (car_name,manufacture_year,car_price,fuel_type,on_sale)values ('BMW', '2021', 60000.00, 'Electric', 1);

insert into Shift ( employee_id, day_of_week, start_time, end_time)values ( 101, 'Monday', '08:00:00', '16:00:00');
insert into Shift ( employee_id, day_of_week, start_time, end_time)values ( 102, 'Tuesday', '09:00:00', '17:00:00');
insert into Shift ( employee_id, day_of_week, start_time, end_time)values ( 103, 'Wednesday', '10:00:00', '18:00:00');
insert into Shift ( employee_id, day_of_week, start_time, end_time)values ( 104, 'Thursday', '12:00:00', '20:00:00');
insert into Shift ( employee_id, day_of_week, start_time, end_time)VALUES ( 105, 'Friday', '13:00:00', '21:00:00');

insert into customer  ( first_name, last_name, phone_number, email, address)values ( 'John', 'Doe', '0851125632', 'johndoe@blue.com', '123 Main Street.');
insert into customer  ( first_name, last_name, phone_number, email, address)values ( 'Jane', 'Smith', '0862253675', 'janesmith@orange.com', '456 Oak Avenue.');
insert into customer  ( first_name, last_name, phone_number, email, address)values ( 'Bobby', 'Johnson', '0875549851', 'bobbyjohnson@purple.com', '789 Elm Street.');
insert into customer  ( first_name, last_name, phone_number, email, address)values ( 'Sarah', 'Lee', '0891463278', 'sarahlee@green.com', '321 Maple Lane.');
insert into customer  ( first_name, last_name, phone_number, email, address)values ( 'Mike', 'Davis', '0854498749', 'michaeldavis@red.com', '654 Pine Street.');

insert into Sale  ( sale_price, sale_date, customer_id, customer_name, payment_type)values ( 500.00, '2022-01-15', 1, 'John Doe', 'Credit Card');
insert into Sale  ( sale_price, sale_date, customer_id, customer_name, payment_type)values ( 1000.00, '2022-02-01', 3, 'Bob Johnson', 'Cash');
insert into Sale  ( sale_price, sale_date, customer_id, customer_name, payment_type)values ( 750.50, '2022-03-10', 2, 'Jane Smith', 'Debit Card');
insert into Sale  ( sale_price, sale_date, customer_id, customer_name, payment_type)values ( 2000.00, '2022-04-20', 5, 'Mike Davis', 'Cash');
insert into Sale  ( sale_price, sale_date, customer_id, customer_name, payment_type)values ( 1500.25, '2022-05-05', 4, 'Sara Lee', 'Credit Card');


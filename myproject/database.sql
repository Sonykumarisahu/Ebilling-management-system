create table users (
email_id varchar(50) primary key,
password varchar(20) not null,
first_name varchar(20) not null,
last_name varchar(20) not null
);

create table product (
product_name varchar(50) not null,
serial_no int primary key,
duration date not null,
price int not null
);

create table customer(
customer_id int primary key,
customer_name varchar(50) not null,
customer_address varchar(50) not null,
customer_email varchar(100) not null,
customer_phone int not null,
CONSTRAINT FOREIGN KEY(customer_email)
REFERENCES users(email_id) ON
DELETE CASCADE);

create table admin_table
( user_name varchar(20) primary key,
  password varchar(20) not null
);
  
CREATE TABLE transaction
(
transaction_Id int PRIMARY KEY AUTO_INCREMENT,
caf_form_no int NOT NULL,
serial_no int NOT NULL,
email_id varchar(50)
);

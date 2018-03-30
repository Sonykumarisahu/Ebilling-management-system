CREATE TABLE admin_table (
  email_id varchar(20) PRIMARY KEY,
  password varchar(20) NOT NULL
);


CREATE TABLE users (
  email_id varchar(50) PRIMARY KEY,
  first_name varchar(20) NOT NULL,
  last_name varchar(20) NOT NULL,
  address varchar(50) NOT NULL,
  phone_no char(10) NOT NULL,
  id_proof varchar(50) NOT NULL DEFAULT 'image.png',
  caf_form_no int(11) NOT NULL UNIQUE AUTO_INCREMENT
);


CREATE TABLE login (
  email_id varchar(50) NOT NULL,
  password varchar(20) NOT NULL
);

ALTER TABLE login ADD CONSTRAINT login_id_fk FOREIGN KEY (email_id) REFERENCES users (email_id) ON DELETE CASCADE;

CREATE TABLE payment (
  transaction_id int(11) AUTO_INCREMENT PRIMARY KEY,
  email_id varchar(50) NOT NULL,
  serial_no int(11) NOT NULL,
  caf_form_no int(11) NOT NULL,
  date_transaction timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE product (
  product_name varchar(50) NOT NULL,
  serial_no int(11) PRIMARY KEY,
  duration int(11) NOT NULL,
  price int(11) NOT NULL
);

ALTER TABLE payment ADD CONSTRAINT payment_id_fk FOREIGN KEY (email_id) REFERENCES users (email_id) ON DELETE CASCADE;

ALTER TABLE payment ADD CONSTRAINT payment_serial_fk FOREIGN KEY (serial_no) REFERENCES product (serial_no) ON DELETE CASCADE;

INSERT INTO admin_table( email_id , password ) VALUES ('admin@gmail.com', 'admin');
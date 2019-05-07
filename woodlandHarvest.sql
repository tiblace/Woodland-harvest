DROP DATABASE IF EXISTS woodlandHarvest;

CREATE DATABASE woodlandHarvest;

USE woodlandHarvest;



CREATE TABLE customers (
cust_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
last_name VARCHAR (80) NOT NULL,
first_name VARCHAR (80) NOT NULL,
email VARCHAR (512) NOT NULL
# password CHAR (64) NOT NULL ,
# salt CHAR (20)
);


CREATE TABLE musings(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title varchar(255) DEFAULT NULL,
    content TEXT

);

CREATE TABLE recipes (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    title varchar(255) DEFAULT NULL,
    content Text
);




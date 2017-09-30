create database if not exists BloodBank;

use BloodBank;

create table if not exists LogIn
(
  login_id int null auto_increment,
  username varchar(30) not null,
  pass text not null,
  primary key(login_id)
);

create table if not exists UserDetail
(
  userid int not null references LogIn(login_id),
  user_name varchar(30) not null,
  email varchar(30) not null,
  mobile bigint not null,
  address text not null,
  city varchar(20) not null,
  blood_group char(5) not null
);


create table if not exists RequestBlood
(
  username varchar(30) not null,
  city varchar(20) not null,
  bloodgroup char(5) not null,
  hospitalname text not null,
  mobilenumber bigint not null,
  units int not null
);

create table if not exists Camps
(
  name varchar(50) not null,
  address text not null,
  city varchar(20) not null,
  date_e date not null,
  time_e time not null
);

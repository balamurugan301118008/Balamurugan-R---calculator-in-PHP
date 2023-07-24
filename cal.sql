
drop database calculator;
create database calculator;

create table history(
    id int not null AUTO_INCREMENT,
  	inputOne int,
    operator varchar(255),
    inputTwo int,
    result int,
    PRIMARY key(id)
    );
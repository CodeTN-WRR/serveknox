drop database if exists testdb;

create database testdb;

use testdb;

create table user (
    firstname VARCHAR(64),
    lastname VARCHAR(64),
    username VARCHAR(64),
    passwordhash VARCHAR(64)
    );


    
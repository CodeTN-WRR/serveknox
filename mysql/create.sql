-- Delete any existing database
drop database if exists testdb;

-- Create a new database
create database testdb;

-- Switch to it so we can create its tables
use testdb;

-- Create tables
create table user (
    firstname VARCHAR(64),
    lastname VARCHAR(64),
    username VARCHAR(64),
    passwordhash VARCHAR(64)
    );


    
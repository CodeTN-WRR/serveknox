-- Delete any existing database
drop database if exists serveknox;

-- Create a new database
create database serveknox;

-- Switch to it so we can create its tables
use serveknox;

-- Create tables
create table user (
    firstname VARCHAR(64),
    lastname VARCHAR(64),
    username VARCHAR(64),
    passwordhash VARCHAR(64)
    );


    
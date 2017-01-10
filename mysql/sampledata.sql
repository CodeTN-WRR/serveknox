use serveknox;

-- Create tables
insert into user ( firstname, lastname, username, passwordhash )
values ('George', 'Jungle', 'gjungle', 'aiaiaiaiaai');

insert into event (eventdate, eventname, eventphoto) values ('2017-1-16', 'Animal Shelter Feeding', '../views/img/animal.jpg')
insert into event (eventdate, eventname, eventphoto) values ('2017-2-22', 'Blankets For The Homeless', '../views/img/homeless.jpg')
insert into event (eventdate, eventname, eventphoto) values ('2017-4-14', 'Hot Cocoa For Kids', '../views/img/cocoa.jpg')
insert into event (eventdate, eventname, eventphoto) values ('2017-6-23', 'Computer Tech Support', '../views/img/forestry.jpg')
insert into event (eventdate, eventname, eventphoto) values ('2017-9-1', 'Mental Health Clinic', '../views/img/house.jpg')
insert into event (eventdate, eventname, eventphoto) values ('2017-10-13', 'Auto Repair Station', '../views/img/pound.jpg')
create schema gameDB;
use gameDB;
#drop table User;
create table User(
	user_id int,
    age int,
    gender char,
    job varchar(100),
    primary key (user_id)
);

#drop table Developer;
create table Developer(
	developer_id int,
	developer_name varchar(100),
	location varchar(100),
    #rated by users
	average_game_rating decimal(5, 2),
    primary key (developer_id)
);

#drop table Game;
create table Game(
	game_id int,
    game_name varchar(100),
	genre varchar(100),
    #professional rating
	rating decimal(5, 2),
	release_date date,
    developer_id int,
    primary key (game_id),
	foreign key (developer_id) references Developer(developer_id)
);

CREATE TABLE Platform(
	platform_id int,
	platform_name varchar(100),
	primary key (platform_id)
);

#drop table Purchased;
CREATE TABLE Purchased(
	user_id int,
	game_id int,
	purchase_date date,
	rating decimal(5, 2),
	foreign key(user_id) references User(user_id),
	foreign key(game_id) references Game(game_id)
);

#drop table Belongsto;
CREATE TABLE  BelongsTo(
	game_id int,
	platform_id int,
	foreign key(game_id) references Game(game_id),
	foreign key(platform_id) references Platform(platform_id)
);

insert into User
values(0001, 21, "F", "student");
insert into User
values(0002, 23, "M", "student");
insert into User
values(0003, 24, "M", "accountant");

insert into Game
values(0001, "Tetris 99", "puzzle", 97.00, "2019-02-13", 0001);
#delete from Game where game_id = 0001;
insert into Game
values(0002, "Sekiro: Shadows Die Twice", "action", 93.00, "2019-03-22", 0002);
insert into Game
values(0003, "Dark Souls III", "action", 95.00, "2016-03-24", 0002);

insert into Developer
values(0001, "Arika", "JP", NULL);
#delete from Publisher where publisher_id = 0001;
insert into Developer
values(0002, "From Software", "JP", NULL);

insert into Platform
values(0001, "Nintendo Switch");
insert into Platform
values(0002, "PlayStation 4");
insert into Platform
values(0003, "Xbox");
insert into Platform
values(0004, "PC");

insert into purchased
values(0001, 0001, "2019-03-03", 100.00);
insert into purchased
values(0001, 0002, "2019-03-23", 100.00);
insert into purchased
values(0002, 0002, "2019-03-23", 95.00);
insert into purchased
values(0003, 0002, "2019-03-24", 90.00);
insert into purchased
values(0003, 0003, "2019-02-19", 80.00);
#delete from purchased where game_id = 0001;

insert into Belongsto
values(0001, 0001);
insert into Belongsto
values(0002,0004);
insert into Belongsto
values(0002,0003);
insert into Belongsto
values(0002,0002);
insert into Belongsto
values(0003,0004);
insert into Belongsto
values(0003,0003);
insert into Belongsto
values(0003,0002);
#delete from Belongsto where game_id = 0001;

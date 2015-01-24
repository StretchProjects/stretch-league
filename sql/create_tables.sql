/*
 * Run or copy & paste this code in a SQL editer to create the database and tables as per the video
 */

create database league;
use league;

create table ground
(
    ground_id           int             auto_increment,
        constraint ground_pk PRIMARY KEY (ground_id),
    ground_name         varchar(75)     not null,
    ground_address      varchar(100)    not null,
    ground_capacity     int             
);

create table player
(
    player_id           int             auto_increment,
        constraint player_pk primary key (player_id),
    player_name         varchar(30)     not null
);

create table referee
(
    referee_id          int             auto_increment,
        constraint referee_pk primary key (referee_id),
    referee_name        varchar(30)     not null
);

create table team
(
    team_id             int             auto_increment,
        constraint team_pk primary key (team_id),
    team_name           varchar(75)     not null,
    team_manager        varchar(30)     not null,
    team_contact_number char(11)        not null,
    team_crest          varchar(75)     not null,
    ground_id           int             not null,
        constraint team_ground_idx unique (ground_id),
        constraint team_ground_fk foreign key (ground_id) references ground (ground_id)
);

create table team_player 
(
    team_id             int not null,
        constraint team_player_team_fk foreign key (team_id) references team (team_id),
    player_id           int not null,
        constraint team_player_player_fk foreign key (player_id) references player (player_id),
        constraint team_player_pk primary key (team_id, player_id)
);

create table fixture
(
    fixture_id          int auto_increment,
        constraint fixture_pk primary key (fixture_id),
    fixture_date        int not null,
    fixture_time        int not null,
    home_team_id        int not null,
        constraint fixture_team_fk1 foreign key (home_team_id) references team (team_id),
    away_team_id        int not null,
        constraint fixture_team_fk2 foreign key (away_team_id) references team (team_id),
    referee_id          int not null,
        constraint fixture_referee_fk foreign key (referee_id) references referee (referee_id)
);

create table fixture_player
(
    fixture_id          int not null,
        constraint fixture_player_fixture_fk foreign key (fixture_id) references fixture (fixture_id),
    player_id           int not null,
    team_id             int not null,
        constraint fixture_player_team_player_fk foreign key (player_id, team_id) references team_player (player_id, team_id),
        constraint fixture_player_pk primary key (fixture_id, player_id, team_id)
);

create table goalscorer
(
    fixture_id          int not null,
    player_id           int not null,
    team_id             int not null,
        constraint goalscorer_fixture_player_fk foreign key (fixture_id, player_id, team_id) references fixture_player (fixture_id, player_id, team_id)
);

show tables;

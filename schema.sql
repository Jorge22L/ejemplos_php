create table notes (
    id int not null auto_increment,
    uuid varchar(255) not null unique,
    title varchar(255) not null,
    content text not null,
    updated date not null, 
    primary key (id)
);
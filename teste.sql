create database teste;
use teste;
create table nome (nome varchar (20));
select * from nome;
drop table produtos;

create table produtos (id integer auto_increment primary key, nome varchar(255), senha decimal(10,2));
insert into produtos values (1, 'Carro', 20000);
insert into produtos values (2, 'Motocicleta', 10000);
insert into produtos (nome, preco) values ('Bicicleta', 300);
select * from produtos;
select * from produtos order by id asc;

create table registro (id integer auto_increment primary key, nome varchar(200), sobrenome varchar(200), email varchar(200), senha int (200));
select * from registro;
drop table registro;
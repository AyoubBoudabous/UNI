**--table deletion**

Drop table etudients;

Drop table Matiers;

Drop table Notes;





**--table creation**

**\*1st method**

create table Etudients (

&#x09;cin char(8) primary key,

&#x09;nom varchar(10) not null,

&#x09;genre varchar(10) check (Genre in ('Masculin','Féminin')),

&#x09;date\_naissance date not null,

&#x09;adresse varchar(10) check (Adresse in ('Tunis','Ariana','Nabeul')),

&#x09;classe char(6) NOT NULL

);

**\*2nd method**

**/\***

CREATE TABLE etudients (

&#x20;   CIN             CHAR(8)      NOT NULL,

&#x20;   Nom             VARCHAR(10)  NOT NULL,

&#x20;   Genre           VARCHAR(10),

&#x20;   Date\_naissance  DATE         NOT NULL,

&#x20;   Adresse         VARCHAR(10),

&#x20;   Classe          CHAR(6)      NOT NULL,



&#x20;   CONSTRAINT pk\_etudients PRIMARY KEY (CIN),

&#x20;   CONSTRAINT ck\_etudients\_genre CHECK (Genre IN ('Masculin', 'Féminin')),

&#x20;   CONSTRAINT ck\_etudients\_adresse CHECK (Adresse IN ('Tunis', 'Ariana', 'Nabeul'))

);

\*/



Create table Matiers (

&#x09;code varchar(6),

&#x09;libelle varchar(20) NOT NULL,

&#x09;coefficient number(1),

&#x09;CONSTRAINT code\_pk primary key (code),

&#x09;CONSTRAINT coef\_ck check (coefficient between 1 and 3)

);



create table Notes (

&#x09;cin char(8) ,

&#x09;code varchar (6),

&#x09;note number(4,2) default 0

);



**--modification (alteration)**

alter table Notes ADD (

&#x09;constraint node\_pk primary key (cin,code),

&#x09;constraint cin\_fk foreign key (cin) references Etudients (cin),

&#x09;constraint code\_fk foreign key (code) references Matiers (code),

&#x09;constraint notes\_ck check (note between 0 and 20)

);



**--constraint check**

select constraint\_name, constraint\_type from user\_constraints where table\_name='NOTES' ;



**--column check**

desc Notes;



**--rename nad addition**

ALTER TABLE Etudients

rename column date\_naissance to dateN;



alter table Etudients

add tel char(8);



alter table etudients drop column tel;



alter table etudients add prenom varchar(10) not null;



\-- LMD



\-- insertion



insert into etudients (CIN,nom,prenom,genre,dateN,adresse,classe) values ('00245123','Tounsi','Mohamed','Masculin', '12/01/2001', 'Tunis', 'DSI21’);



insert into etudients (CIN,nom,prenom,genre,dateN,adresse,classe) values ('56421301','Chaabane','Meriem', 'Féminin','25/01/2001’, 'Nabeul','DSI21');



insert into etudients (CIN,nom,prenom,genre,dateN,adresse,classe) values ('01456987','Benzarti','Sonia', 'Féminin', '22/09/2000','Tunis', 'DSI22');



insert into etudients (CIN,nom,prenom,genre,dateN,adresse,classe) values ('14587210','Nabli','Kamel','Masculin','30/05/2000', 'Nabeul','DSI22');



insert into etudients (CIN,nom,prenom,genre,dateN,adresse,classe) values ('45256321','Masri','Salah','Masculin', '14/07/2000', 'Tunis', 'DSI22');



select \* from etudients;



\--ASCII

SELECT ASCII('your\_character') from dual;





insert into Matiers values ('Ang', 'Anglais',2);



insert into Matiers values ('AtBD’, 'Atelier BD' ,3);



insert into Matiers values ('BD', 'Bases de donn'||chr(14844058)||'es',2);



insert into Matiers values ('POO','Programmation Orient'||chr(14844058)||'e Objets',3);



alter table Matiers modify libelle varchar2(35); 



insert into Matiers values ('UML','Conception UML',3);



select \* from Matiers;





insert into Notes values ('00245123','UML',8.25);

insert into Notes values ('00245123','POO',10);

insert into Notes values ('00245123','BD',12);

insert into Notes values ('00245123','Ang',14.5);

insert into Notes values ('01456987','BD',15);

insert into Notes values ('01456987','UML',16);

insert into Notes values ('14587210','Ang',11.25);

insert into Notes values ('14587210','POO',9);



select \* from Notes;





create table Etudiants\_DSI21 (

&#x09;cin char(8) primary key,

&#x09;nom varchar(10) not null,

&#x09;prenom varchar(10) not null,

&#x09;genre varchar(10) check (Genre in ('Masculin','Féminin')),

&#x09;date\_naissance date not null,

&#x09;adresse varchar(10) check (Adresse in ('Tunis','Ariana','Nabeul'))

);



insert into Etudiants\_DSI21

select CIN, nom, prenom, genre, dateN, adresse

from etudients

where classe = 'DSI21'

;



Select \* from Etudiants\_DSI21;



Select CIN, nom, prenom from Etudiants\_DSI21;



alter table etudients

add tel char(8);



update etudients set tel='71225588' where CIN='00245123';

update etudients set tel='71252447' where CIN='01456987';

update etudients set tel='72265897' where CIN='14587210';

update etudients set tel='74661278' where CIN='45256321';

update etudients set tel='73661278' where CIN='56421301';



select \* from etudients;










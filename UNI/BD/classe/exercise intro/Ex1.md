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












**--table deletion**

Drop table etudients;



**--table creation**

create table etudients (

&#x09;CIN char(8) primary key,

&#x09;Nom varchar(10) not null,

&#x09;Genre varchar(10) check (Genre in ('Masculin','Féminin')),

&#x09;Date\_naissance date not null,

&#x09;Adresse varchar(10) check (Adresse in ('Tunis','Ariana','Nabeul'))

);






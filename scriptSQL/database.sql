create database airbnb_imagen;
use airbnb_imagen;
create table APARTAMENTO 
(
   IDAPTO               integer                        not null auto_increment,
   ALIASAPTO            varchar(55)                    not null,
   DIREAPTO             varchar(100)                   not null,
   CANCAMAS             integer                        not null,
   CAPACIDADAPTO        integer                        not null,
   PRECIOXDIA           float                          not null,
   IMAGEN               longblob                           not null,
   constraint PK_APARTAMENTO primary key (IDAPTO)
);

create table ARRIENDO 
(
   CODARRIENDO          integer                        not null auto_increment,
   IDPERSONA            integer                        not null,
   IDAPTO               integer                        not null,
   FECHAINGRESO         date                           not null,
   FECHASALIDA          date                           not null,
   constraint PK_ARRIENDO primary key (CODARRIENDO)
);

create table PERSONA 
(
   IDPERSONA            integer                        not null auto_increment,
   NOMBRE               varchar(50)                    not null,
   DIREPERSONA          varchar(50)                    not null,
   ORIGENPERSONA        varchar(50)                    not null,
   NUMACOMPANANTES      integer                        not null,
   constraint PK_PERSONA primary key (IDPERSONA)
);

alter table ARRIENDO
   add constraint FK_ARRIENDO_HACE_PERSONA foreign key (IDPERSONA)
      references PERSONA (IDPERSONA)
      on update restrict
      on delete restrict;

alter table ARRIENDO
   add constraint FK_ARRIENDO_TIENE_APARTAME foreign key (IDAPTO)
      references APARTAMENTO (IDAPTO)
      on update restrict
      on delete restrict;
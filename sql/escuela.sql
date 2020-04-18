create database escuela;
    use escuela;

create table director
(
    dior_id_director int auto_increment
        primary key,
    dior_matricula   varchar(50) null,
    dior_tipo        varchar(50) null
);

create table profesor
(
    pror_id_profesor int auto_increment
        primary key,
    pror_nombre      varchar(50) null,
    pror_clave       varchar(50) null,
    pror_id_director int         null,
    constraint profesor_director_dior_id_director_fk
        foreign key (pror_id_director) references director (dior_id_director)
            on update cascade on delete set null
);

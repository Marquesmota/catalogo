create database cadastro_usuario
create table usuario (
    nome varchar (50) not null,
    sobrenome varchar (50) not null,
    bairro varchar (120) not null,
    cidade varchar (120) not null,
    estado varchar (50) not null,
    email varchar (120) not null,
    senha varchar (32) not null,
    cpf varchar (14) not null,
    id int (11) not null,
    constraint pk_usuario primary key (id)

);
INSERT INTO `usuario`(`nome`, `sobrenome`, `bairro`, `cidade`, `estado`, `email`,
 `senha`, `cpf`, `id`) 
VALUES ('Marques','Mota','Colinas','Santana','São Paulo','marques.mottaa@gmail.com',
'motamota','2587469','12');

INSERT INTO `usuario`(`nome`, `sobrenome`, `bairro`, `cidade`, `estado`, `email`,
 `senha`, `cpf`, `id`) 
VALUES ('Ana Beatriz','Pedro','Jaraguá','São Paulo','São Paulo','annabeatrizpedro1@gmail.com',
'ana2103','47699007843','13');
INSERT INTO `usuario`(`nome`, `sobrenome`, `bairro`, `cidade`, `estado`, `email`, `senha`,
 `cpf`, `id`)
 VALUES ('Gabriel','Nogueira','Quitaúna','Osasco','São Paulo','fgn.nogueira@gmail.com',
 'GN0714','18903498713','14');
INSERT INTO `usuario`(`nome`, `sobrenome`, `bairro`, `cidade`, `estado`, `email`, `senha`,
 `cpf`, `id`) 
VALUES ('Laura','Garcias','Parque Esperança','São Paulo','São Paulo','barretolaura@gmail.com',
'laU1w@','46687569309','15');
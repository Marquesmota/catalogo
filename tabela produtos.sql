create database cadastro_usuario
create table produtos

    create table produtos (
    id int(6)not null,
    codigo_produto int(11) not null,
    Nome varchar(80) not null,
    preco float(7,2) not null,
    imagem varchar(30) not null,
    constraint pk_produtos primary key (id)
);


INSERT INTO `produtos` (`codigo_produto`, `Nome`, `preco`, `imagem`) 
VALUES ('0', 'Iphone 7', '2499.99', 'iphone-frente.png');

INSERT INTO `produtos` (`codigo_produto`, `Nome`, `preco`, `imagem`) 
VALUES ('1', 'Iphone 12', '3579.99', 'Iphone12.png');

INSERT INTO `produtos` (`codigo_produto`, `Nome`, `preco`, `imagem`) 
VALUES ('2', 'Iphone 13', '5279.99', 'Iphone13.png');

INSERT INTO `produtos` (`codigo_produto`, `Nome`, `preco`, `imagem`) 
VALUES ('3', 'Iphone XR', '3149.99', 'Iphonexr.png');

INSERT INTO `produtos` (`codigo_produto`, `Nome`, `preco`, `imagem`) 
VALUES ('4', 'Iphone 14', '10599.59', 'Iphone14.jpeg');

INSERT INTO `produtos` (`codigo_produto`, `Nome`, `preco`, `imagem`) 
VALUES ('5', 'Iphone 11 promax', '3299.99', 'Iphone11.jpeg');
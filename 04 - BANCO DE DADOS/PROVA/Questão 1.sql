
-- ENUNCIADO
A locadora tem objetivos de criar várias franquias es
palhadas pelo Brasil. Para isso queremos saber em quais cidades nossos clientes moram.

Para você nos ajudar selecione o nome de todas as cidades onde a locadora tem clientes. Mas por favor, não repita o nome da cidade.


CREATE TABLE customers (
  id numeric PRIMARY KEY,
  name varchar(50),
  street varchar(50),
  city varchar(50)
);


INSERT INTO customers (id, name, street, city)
VALUES
  (1,	'Giovanna Goncalves Oliveira',	'Rua Mato Grosso',	'Canoas'),
  (2, 'Kauã Azevedo Ribeiro',	'Travessa Ibiá',	'Uberlândia'),
  (3,	'Rebeca Barbosa Santos',	'Rua Observatório Meteorológico',	'Salvador'),
  (4,	'Sarah Carvalho Correia',	'Rua Antônio Carlos da Silva',	'Uberlândia'),
  (5,	'João Almeida Lima',	'Rua Rio Taiuva',	'Ponta Grossa'),
  (6,	'Diogo Melo Dias',	'Rua Duzentos e Cinqüenta',	'Várzea Grande');
  

/*  Execute this query to drop the tables */
-- DROP TABLE customers; --
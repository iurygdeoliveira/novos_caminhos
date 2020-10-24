-- ENUNCIADO

O setor de vendas quer fazer uma promoção para todos os clientes que são pessoas jurídicas. Para isso você deve exibir o nome dos clientes que sejam pessoa jurídica.

-- ESQUEMA DAS TABELAS A SEREM CRIADAS

TABELA CUSTOMERS
Coluna	        Tipo
id (PK) 	    numeric
name    	    varchar(255)
street          varchar(255)
city    	    varchar(255)
state   	    varchar(2)
credit_limit    numeric   

TABELA LEGAL_PERSON

Coluna	            Tipo
id_customers (FK)	numeric
cnpj                varchar(18)
contact             varchar(25) 

-- VALORES A SEREM INSERIDOS DENTRO DA TABELA CUSTOMERS

id    name                      street          city	        state   credit_limit
1	  Nicolas Diogo Cardoso	    Acesso Um	    Porto Alegre	RS	    475
2	  Cecília Olivia Rodrigues	Rua Sizuka  	Cianorte	    PR	    3170
3	  Augusto F. C. E. Cardoso	Rua Baldomiro 	Palhoça	        SC	    1067
4	  Nicolas Diogo Cardoso	    Acesso Um	    Porto Alegre	RS	    475
5     Sabrina H. G. Barros      Rua Engenheiro  Porto Alegre	RS	    4312
6	  Joaquim D. L. Araújo      Rua Vitorino	Novo Hamburgo	RS	    231 

-- VALORES A SEREM INSERIDOS DENTRO DA TABELA LEGAL_PERSON
id_customers	cnpj        	contact
4	            85883842000191	99767-0562	
5	            47773848000117	99100-8965 

-- EXEMPLO DE SAÍDA ESPERADO
name	
Nicolas Diogo Cardoso	
Sabrina Heloisa Gabriela Barros
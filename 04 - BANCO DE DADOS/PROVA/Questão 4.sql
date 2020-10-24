-- ENUNCIADO 

Você foi contratado para dar consultoria a uma empresa. Analisando o banco de dados você notou que as senhas gravadas dos usuários estão em formato de texto, sendo que isso pode gerar uma falha de segurança, uma vez que elas não estão criptografadas.

Por tanto você deve selecionar o id, a senha atual e a senha transformada em MD5 de cada usuário na tabela account.

-- ESQUEMA DAS TABELAS A SEREM CRIADAS

TABELA ACCOUNT
Coluna	        Tipo
id (PK)	        integer	
name            varchar
login       	varchar
password	    varchar    

-- VALORES A SEREM INSERIDOS DENTRO DA TABELA CUSTOMERS

id    name                      login           password       
1	  Joyce P. Parry	        Promeraw	    noh1Oozei
2	  Michael T. Gonzalez	    Phers1942	    Iath3see9bi
3	  Heather W. Lawless	    Hankicht	    diShono4
4	  Otis C. Hitt	            Conalothe	    zooFohH7w
5	  Roger N. Brownfield	    Worseente	    fah7ohN	 

-- EXEMPLO DE SAÍDA ESPERADO
id	    password	    MD5
1	    noh1Oozei	    b67ed42ced0e0a19ce7ed904bb94b607
2	    Iath3see9bi	    66877b2da87fb09af3f5602f31c6d35c
3	    diShono4    	d19c9be4c00c683a4688948b81eb2a1d
4	    zooFohH7w	    202b76ed4a556fdbf409505a8023695e
5	    fah7ohNg	    05b3dccaa70f228f1bedc7a285e50d9d


Aplicação desenvolvida para a conclusão do curso de Engenharia de Software

A aplicação foi criada com banco de dados local; A aplicação contém código em HMTL, PHP e json.

Banco de dados criar um banco de dados e executar as instruções SQLs abaixo para criar a tabela Usuários:

## Banco de dados

Criar um banco de dados e executar as instruções SQLs abaixo para criar a tabela Usuários:

  CREATE TABLE `usuarios` (
  	`profregister` INT(30) NOT NULL,
  	`email` VARCHAR(80) NOT NULL COLLATE 'utf8_general_ci',
  	`name` VARCHAR(20) NOT NULL COLLATE 'utf8_general_ci',
  	`surname` VARCHAR(80) NOT NULL COLLATE 'utf8_general_ci',
    `profission` VARCHAR(80) NOT NULL COLLATE 'utf8_general_ci',
  	 `accesskind` VARCHAR(30) NOT NULL COLLATE 'utf8_general_ci',
      `place` VARCHAR(80) NOT NULL COLLATE 'utf8_general_ci',
       `timeattend` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
        `password` VARCHAR(80) NOT NULL COLLATE 'utf8_general_ci',
         `situation` INT(1) NOT NULL,
  	PRIMARY KEY (`profregister`) USING BTREE
  )
  COLLATE='utf8_general_ci'
  ENGINE=InnoDB
  
 Criar um banco de dados e executar as instruções SQLs abaixo para criar a tabela Unidade:

CREATE TABLE `unit` (
  `unitcod` int(11) NOT NULL,
  `kindplace` varchar(80) NOT NULL,
  `state` text NOT NULL,
  `address` varchar(80) NOT NULL,
  `specialit` varchar(80) NOT NULL
   	PRIMARY KEY (`unitcod`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  )
  COLLATE='utf8_general_ci'
  ENGINE=InnoDB
  AUTO_INCREMENT=1;
 

## Configuração
As credenciais do banco de dados estão no arquivo `./app/Db/Database.php` e você deve alterar para as configurações do seu ambiente (HOST, NAME, USER e PASS).

## Composer
Para a aplicação funcionar, é necessário rodar o Composer para que sejam criados os arquivos responsáveis pelo autoload das classes.

Caso não tenha o Composer instalado, baixar pelo site oficial: [https://getcomposer.org/download](https://getcomposer.org/download/)

Para rodar o composer, basta acessar a pasta do projeto e executar o comando abaixo em seu terminal:
```shell
 composer install
```

Após essa execução uma uma pasta com o nome vendor será criada na raiz do projeto e poderá acessar pelo seu navegador.
